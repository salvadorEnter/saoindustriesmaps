/**
 * Created by salvadorlopez on 01/11/19.
 */

({
    extendsFrom: 'RecordlistView',

    events:{
        'mouseover td[data-type="name"]':'abrirInfoWindow',
        'mouseout td[data-type="name"]':'cerrarInfoWindow',
    },

    initialize: function(options) {
        this._super("initialize", [options]);
    },

    abrirInfoWindow:function(ev){
       //Se obtiene valor id de la cuenta
        var cuenta=$(ev.currentTarget).find('a').attr('href');
        var id_cuenta=cuenta.split('/')[1];
        //para disparar el click en el marcador programaticamente
        //Recorrer el arreglo de marcadores
        if(window.marcadores.length>0){

            for(var i=0;i < window.marcadores.length ;i++){

                if(window.marcadores[i].title==id_cuenta){

                    google.maps.event.trigger(window.marcadores[i], 'click');

                }

            }

        }
    },

    cerrarInfoWindow:function(ev){
    },



})
