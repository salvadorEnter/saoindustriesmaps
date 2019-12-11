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
 * @class View.Views.Base.ListHeaderpaneView
 * @alias SUGAR.App.view.views.BaseListHeaderpaneView
 * @extends View.Views.Base.HeaderpaneView
 */
({
    extendsFrom: 'HeaderpaneView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        // FIXME: SC-3594 will address having child views extending metadata
        // from its parent.
        options.meta = _.extend(
            {},
            app.metadata.getView(null, 'list-headerpane'),
            app.metadata.getView(options.module, 'list-headerpane'),
            options.meta
        );

        this._super('initialize', [options]);

        //shortcut keys
        app.shortcuts.register({
            id: 'List:Headerpane:Create',
            keys: 'a',
            component: this,
            description: 'LBL_SHORTCUT_CREATE_RECORD',
            handler: function() {
                var $createButton = this.$('a[name=create_button]');
                if ($createButton.is(':visible') && !$createButton.hasClass('disabled')) {
                    $createButton.get(0).click();
                }
            }
        });

        this.events['click .tabla'] = 'hideMapa';
        this.events['click .mapatabla'] = 'ShowMapTable';
        this.events['click .mapa']='showMapa';
        this.Cuenta=[];
        this.defCuentas=[];
        this.cuentaUsuario;
    },

    _render: function (fields, errors, callback) {
        this._super("_render");
        this.hideMapa();
    },

    showMapa:function(){
        this.render();
        this.getCoordenadas();
        this.initMap();
        $('.flex-list-view').hide()
        $('[data-action="show-more"]').hide();
        $('#map').show()
        var height=$(document).innerHeight();
        var width=$(document).innerWidth();
        $('#map').height(height);
        $('#map').width(width);
        //$('#over_map').show();
        //$('#plan').attr("disabled", true);
        //this.render();
    },

    getCoordenadas:function(){
        console.log("Entro a la funcion getCoordenadas de list-Headerpane");
        this.Cuenta=[];
        this.defCuentas=[];
        window.Coordenadas=[];
        window.marcadores=[];
        if (this.collection.models.length>0){
            for(var i=0;i<this.collection.models.length;i++){
                if((this.collection.models[i].attributes.gps_latitud_c!="" && this.collection.models[i].attributes.gps_latitud_c!=undefined) && (this.collection.models[i].attributes.gps_longitud_c!="" && this.collection.models[i].attributes.gps_longitud_c!=undefined)){
                    window.Coordenadas.push({lat:parseFloat(this.collection.models[i].attributes.gps_latitud_c),lng:parseFloat(this.collection.models[i].attributes.gps_longitud_c)});
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

    initMap:function() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var self=this;
        var bounds= new google.maps.LatLngBounds();
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: {lat: 19.4326018, lng: -99.13320490000001}
            });
        if(window.Coordenadas.length>0){
            var infowindow = new google.maps.InfoWindow();
            var map = new google.maps.Map(document.getElementById('map'), {
            mapTypeControl: true,
                mapTypeControlOptions: {
                    style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                    mapTypeIds: ['roadmap', 'terrain']
                }
            });
            directionsDisplay.setMap(map);
        
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
                this.marcadorDeContexto=markers;
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
                                                    //'<p><a href="#Users/'+definicionCuenta.id_usuario+' "target="_blank"></a></p>'+
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
                loc = new google.maps.LatLng(parseFloat(markers.position.lat()), parseFloat(markers.position.lng()));
                bounds.extend(loc);
            }
            map.fitBounds(bounds);       // auto-zoom
            map.panToBounds(bounds);
            this.context.trigger('refresh:count');
            
        }
    },

    hideMapa:function(){
        $('#map').hide();
        $('.flex-list-view').show()
        $('[data-action="show-more"]').show();
        console.log("Se va a ocultar el mapa");
        $('#over_map').hide();
    },

    ShowMapTable:function(){
        this.render();
        this.getCoordenadas();
        this.initMap();
        $('#map').show();
        $('.flex-list-view').show()
        $('[data-action="show-more"]').show();
        console.log("Mapa y tabla son visualizados");
        $('#map').css({'width':'1360px','height':'300px'});
        $('#over_map').show();
        //$('#plan').attr("disabled", true);
        //this.render();
    },
})
