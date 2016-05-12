/**
 * Created by admin on 5/11/2016.
 */
var DC = window.DC || {};
var Models = DC.Models || {};
var Views = DC.Views || {};
var Collections = DC.Collections || {};


(function($){
    $(function () {
        $.notify.addStyle('dc-notify', {
            html: "<div>\n<span data-notify-text></span>\n</div>",
            classes: {
                base: {
                    "font-weight": "300",
                    "width" : "220px",
                    "padding": "4px 10px 4px 10px",
                    "background-color": "#fcf8e3",
                    "border": "1px solid #fbeed5",
                    "background-repeat": "no-repeat",
                    "background-position": "3px 7px"
                },
                error: {
                    "color": "#B94A48",
                    "background-color": "#F2DEDE",
                    "border-color": "#EED3D7"
                },
                success: {
                    "color": "#468847",
                    "background-color": "#DFF0D8",
                    "border-color": "#D6E9C6"
                },
                info: {
                    "color": "#3A87AD",
                    "background-color": "#D9EDF7",
                    "border-color": "#BCE8F1"
                },
                warn: {
                    "color": "#C09853",
                    "background-color": "#FCF8E3",
                    "border-color": "#FBEED5",
                }
            }
        });
        Views.Base = Backbone.View.extend({
           
            dc_notify : function (messerge, type) {
                $.notify(messerge,
                    {
                        style: 'dc-notify',
                        className: type
                    });
            }
        });


    });
})(jQuery);