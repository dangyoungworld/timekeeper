/**
 * Created by admin on 5/10/2016.
 */
/**
 * Created by Jack Bui on 1/28/2016.
 */

(function() {
    window.App = {
        Models : {},
        Views : {},
        Collections : {},
        Routers: {}
    };
    $(function(){
        App.Views.Staff = Backbone.View.extend({
            el: '#create-staff',
            events: {
                'click .add-staff' : 'create_staff',
                'click .add-image' : 'add_image'
            },
            create_staff: function() {
                alert('Hello');
                return false;
            },
            add_image: function(){
                alert('Chào');
                return false;
            }
        });

        new App.Views.Staff;
    });



})();

