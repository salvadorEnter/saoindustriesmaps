/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Views.Base.ListBottomView
 * @alias SUGAR.App.view.views.BaseListBottomView
 * @extends View.View
 */
({
    events: {
        'click [data-action="show-more"]': 'showMoreRecords'
    },

    initialize: function(options) {
        this._super('initialize', [options]);
        // This component should always have a `list` action.
        this.action = 'list';

        /**
         * Label key used for {@link #showMoreLabel}.
         *
         * You can define it in metadata under `label` property. Defaults to
         * `TPL_SHOW_MORE_MODULE`.
         *
         * @type {string}
         * @private
         */
        this._showMoreLabel = this.meta && this.meta.label || 'TPL_SHOW_MORE_MODULE';
        this._initPagination();
        this.Cuenta=[];
        this.defCuentas=[];
        this.cuentaUsuario;
    },

    /**
     * Initialize pagination component in order to react the show more link.
     * @private
     */
    _initPagination: function() {
        this.paginationComponent = _.find(this.layout._components, function(component) {
            return _.contains(component.plugins, 'Pagination');
        }, this);
    },

    /**
     * Retrieving the next page records by pagination plugin.
     *
     * Please see the {@link app.plugins.Pagination#getNextPagination}
     * for detail.
     */
    showMoreRecords: function() {
        if (!this.paginationComponent) {
            return;
        }

        var options = {};
        options.success = _.bind(function() {
            this.layout.trigger('list:paginate:success');
            // FIXME: This should trigger on `this.collection` instead of
            // `this.context`. Will be fixed as part of SC-2605.
            this.context.trigger('paginate');
            this.render();
            this.getCoordenadas(this.collection.models);
            this.initMapa();
        }, this);

        this.paginationComponent.getNextPagination(options);
        this.render();
    },

    getCoordenadas:function(modelos){
        window.Coordenadas=[];
        this.Cuenta=[];
        this.defCuentas=[];
        window.marcadores=[];
        if (modelos.length>0){
            for(var i=0;i<modelos.length;i++){
                if((modelos[i].attributes.gps_latitud_c!="" && modelos[i].attributes.gps_latitud_c!=undefined) && (modelos[i].attributes.gps_longitud_c!="" && modelos[i].attributes.gps_longitud_c!=undefined)){
                    window.Coordenadas.push({lat:parseFloat(modelos[i].attributes.gps_latitud_c),lng:parseFloat(modelos[i].attributes.gps_longitud_c)});
                    this.Cuenta.push({idCuenta:this.collection.models[i].attributes.id,status:this.collection.models[i].attributes.visit_c});
                    this.defCuentas.push({'id':this.collection.models[i].get('id'),
                        'name':this.collection.models[i].get('name'),
                        'quick_name':this.collection.models[i].get('quick_contact_c'),
                        'tipo_negocio':App.lang.getAppListStrings('business_type_list')[this.collection.models[i].get('business_type_c')],
                        'tipo':App.lang.getAppListStrings('account_type_dom')[this.collection.models[i].get('account_type')],
                        'foto':this.collection.models[i].get('photography_c'),
                        'domicilio':this.collection.models[i].get('photography_c'),
                        'id_usuario':this.collection.models[i].get('assigned_user_id'),
                        'nombre_usuario':this.collection.models[i].get('assigned_user_name')
                    });
                }
            }
        }
    },

    search:function(key,defCuentas){
        for(var i=0;i<defCuentas.length;i++){
            if(defCuentas[i].id===key){
            return defCuentas[i];
            }
        }
    },

    initMapa:function(){
        var self=this;
        var bounds= new google.maps.LatLngBounds();
        //var contenido=$('#contenido');
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: {lat: 19.4326018, lng: -99.13320490000001}
            });
        if(window.Coordenadas.length>0){
            var infowindow = new google.maps.InfoWindow();
            map = new google.maps.Map(document.getElementById('map'), {
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    mapTypeIds: ['roadmap', 'terrain']
                }
            });
            for(var i=0;i<window.Coordenadas.length;i++){

                var icono='';

                switch(this.Cuenta[i].status){
                    case "Planned":
                        icono = "custom/themes/default/images/sao/iconos_markers/icon-negro_.png";
                        break;
                    case "Done":
                        icono = "custom/themes/default/images/sao/iconos_markers/icon-verde_.png";
                        break;
                    case "Rescheduled":
                        icono = "custom/themes/default/images/sao/iconos_markers/icon-azul_.png";
                        break;
                    case "Canceled":
                        icono = "custom/themes/default/images/sao/iconos_markers/icon-rojo_.png";
                        break;
                    case "Pending":
                        icono = "custom/themes/default/images/sao/iconos_markers/icon-amarillo_.png";
                        break;
                    case "":
                        icono = "custom/themes/default/images/sao/iconos_markers/icon-negro_.png";
                        break;
                    default:
                        icono = "custom/themes/default/images/sao/iconos_markers/icon-negro_.png";
                }
                var mylocation=window.Coordenadas[i];
                var markers=new google.maps.Marker({
                    position:mylocation,
                    map:map,
                    title:this.Cuenta[i].idCuenta,
                    clickable:true,
                    icon:icono
                });

                window.marcadores.push(markers);
                google.maps.event.addListener(markers, 'click', (function (markers, i) {
                    return function () {

                        var contextoMarcador=self;

                        var infoMarkerUrl=app.api.buildURL('GetInfoForMarker/'+markers.title,null,null,null);

                        app.api.call('GET',infoMarkerUrl,{},{

                            success:function(data){

                                var url_sao='';
                                //Convirtiendo las etiquetas a minúsculas para poder mostrar la imagen correspondiente
                                if(data.infoCuenta.etiquetas.length>0){

                                    if(data.infoCuenta.etiquetas[0]!=null){

                                        for (var i = 0; i < data.infoCuenta.etiquetas.length; i++) {
                                            //Comprobando que la etiqueta tiene espacios en blanco, para reemplazarlo por guiones bajos
                                            if(/\s/.test(data.infoCuenta.etiquetas[i])){

                                                data.infoCuenta.etiquetas[i]=data.infoCuenta.etiquetas[i].replace(" ", "_");
                                            }

                                            //Armando strings para mostrar imágenes
                                            url_sao+='<img style="margin: 0px 15px 15px 0px;" src="custom/themes/default/images/sao/sao_'+data.infoCuenta.etiquetas[i].toLowerCase()+'.jpeg" width="50">';
                                        }
                                    }
                                }

                                var url="";
                                if(definicionCuenta.foto != undefined && definicionCuenta.foto != ""){
                                    url='rest/v11_5/Accounts/'+definicionCuenta.id+'/file/photography_c?format=sugar-html-json&amp;platform=base&amp;_hash='+definicionCuenta.foto;
                                }else{
                                    url='styleguide/assets/img/logo.svg';
                                }

                                var domicilio='';
                                if(data.infoCuenta.domicilio.calle != null && data.infoCuenta.domicilio.calle != "" && data.infoCuenta.domicilio.calle !=undefined &&
                                    data.infoCuenta.domicilio.ciudad !=null && data.infoCuenta.domicilio.ciudad != "" && data.infoCuenta.domicilio.ciudad !=undefined){

                                    domicilio='<b> '+data.infoCuenta.domicilio.calle+', '+data.infoCuenta.domicilio.ciudad+'<br>'+
                                        data.infoCuenta.domicilio.estado+' ' +data.infoCuenta.domicilio.cp +'<br>'+
                                        data.infoCuenta.domicilio.pais+'</b>';
                                }

                                var estrellas=data.infoCuenta.estrellas;
                                var contenidoEstrellas='';
                                if(estrellas=="" || estrellas ==0 || estrellas ==null){
                                        contenidoEstrellas='<img style="" src="custom/themes/default/images/sao/estrellas/estrella_blanca.png" width="25">'+
                                        '<img style="" src="custom/themes/default/images/sao/estrellas/estrella_blanca.png" width="25">'+
                                        '<img style="" src="custom/themes/default/images/sao/estrellas/estrella_blanca.png" width="25">'+
                                        '<img style="" src="custom/themes/default/images/sao/estrellas/estrella_blanca.png" width="25">'+
                                        '<img style="" src="custom/themes/default/images/sao/estrellas/estrella_blanca.png" width="25">';

                                }else{

                                    contenidoEstrellas='';

                                    for(var i=0;i<estrellas;i++){

                                        contenidoEstrellas+='<img style="" src="custom/themes/default/images/sao/estrellas/estrella.png" width="25">';
                                    }
                                    var estrellas_restantes= 5-estrellas;
                                    if(estrellas_restantes>0){
                                        for(var i=0;i<estrellas_restantes;i++){
                                                contenidoEstrellas+='<img style="" src="custom/themes/default/images/sao/estrellas/estrella_blanca.png" width="25">';
                                        }
                                    }
                                }

                                var contenido='<div class="container" style="width:300px; height:300px;">'+
                                            '<ul class="nav nav-tabs">'+
                                                '<li class="active">'+
                                                    '<a data-toggle="tab" href="#menu1">'+
                                                        'Información de Cuenta'+
                                                    '</a>'+
                                                '</li>'+
                                                '<li>'+
                                                    '<a data-toggle="tab" href="#menu2">'+
                                                        'Usuario'+
                                                    '</a>'+
                                                '</li>'+
                                            '</ul>'+
                                            '<div class="tab-content">'+
                                                '<div id="menu1" class="tab-pane fade in active">'+
                                                    '<img style="float: left; margin: 0px 15px 15px 0px;" src="'+url+'" width="100">'+
                                                    '<p> Nombre del negocio: <b><a href="#Accounts/'+definicionCuenta.id+'"target="_blank"> '+definicionCuenta.name+'</a></b></p>'+
                                                    '<div style="display:inline-block;">'+contenidoEstrellas+'</div>'+
                                                    '<p>Contacto rápido: <b> '+definicionCuenta.quick_name+'</b></p>'+
                                                    '<p>Tipo de negocio: <b> '+definicionCuenta.tipo_negocio+'</b></p>'+
                                                    '<p>Tipo: <b> '+definicionCuenta.tipo+'</b></p>'+
                                                    '<p>Domicilio:'+domicilio+'</p>'+
                                                    '<div style="border-top:1px solid #a2a2a2; padding:5px">'+url_sao+
                                                    '</div>'+
                                                '</div>'+
                                                '<div id="menu2" class="tab-pane fade">'+
                                                    '<p>Usuario: <a href="#Users/'+definicionCuenta.id_usuario+' "target="_blank">'+data.usuario.nombre +'</a></p>'+
                                                    '<p>Nombre de Usuario: <b>'+data.usuario.user_name +'</b></p>'+
                                                    '<p>Departamento: <b>'+data.usuario.depto +'</b></p>'+
                                                    '<p>Informa a: <a href="#Users/'+data.usuario.reporta_id+' "target="_blank">'+data.usuario.reporta_nombre +'</a></p>'+

                                                '</div>'+
                                            '</div>'+
                                        '</div>';
                                infowindow.setContent(contenido);
                                infowindow.open(map, markers);
                            }

                        });

                        //Se llama a la función para obtener todos los atributos de la cuenta justo antes de que llegue el success
                        // del api call GetInfoForMarker
                        var definicionCuenta=self.search(markers.title, self.defCuentas);

                    }
                })(markers, i));
                loc = new google.maps.LatLng(parseFloat(markers.position.lat()),parseFloat (markers.position.lng()));
                bounds.extend(loc);
            }
            map.fitBounds(bounds);       // auto-zoom
            map.panToBounds(bounds);     // auto-center
            this.context.trigger('refresh:count');
        }
    },

    /**
     * Assign proper label for 'show more' link.
     * Label should be "More <module name>...".
     */
    setShowMoreLabel: function() {
        var model = this.collection.at(0);
        var module = model ? model.module : this.context.get('module');
        var context = {
            count: this.collection.length,
            offset: this.collection.next_offset >= 0
        };
        if (module) {
            context.module = new Handlebars.SafeString(app.lang.getModuleName(module, {plural: true}).toLowerCase());
        }

        /**
         * Label used in the template to display Show more message.
         *
         * By default it will display "More {module}...".
         *
         * @type {string}
         * @private
         */
        this.showMoreLabel = app.lang.get(this._showMoreLabel, module, context);
    },

    /**
     * Reset previous collection handlers and
     * bind the listeners for new collection.
     */
    onCollectionChange: function() {
        var prevCollection = this.context.previous('collection');
        if (prevCollection) {
            prevCollection.off(null, null, this);
        }
        this.collection = this.context.get('collection');
        this.collection.on('add remove reset', this.render, this);
        this.render();
    },

    /**
     * @inheritdoc
     */
    _renderHtml: function() {
        this.setShowMoreLabel();
        this._super('_renderHtml');
    },

    /**
     * @inheritdoc
     *
     * Bind listeners for collection updates.
     * The pagination link synchronizes its visibility with the collection's
     * status.
     */
    bindDataChange: function() {
        this.context.on('change:collection', this.onCollectionChange, this);
        this.collection.on('add remove reset', this.render, this);
    },

    /**
     * @inheritdoc
     *
     * Add dashlet placeholder's class in order to handle the custom css style.
     */
    show: function() {
        this._super('show');
        if (!this.paginationComponent) {
            return;
        }
        this.paginationComponent.layout.$el.addClass('pagination');
    },

    /**
     * @inheritdoc
     *
     * Remove pagination custom CSS class on dashlet placeholder.
     */
    hide: function() {
        this._super('hide');
        if (!this.paginationComponent) {
            return;
        }
        this.paginationComponent.layout.$el.removeClass('pagination');
    }
})
