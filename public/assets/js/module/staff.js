/**
 * Created by admin on 5/10/2016.
 */

(function($) {
    $(function(){
        Views.Staff = Views.Base.extend({
            el: '#create-staff',
            events: {
                'click .add-staff' : 'create_staff',
                'click .add-image' : 'add_image'
            },
            initialize: function(options) {
                this.base = new Views.Base();
            },
            validate : function() {
                console.log(1111);
                return false;
                $('#form-create-staff').validate({
                    rules: {
                        fullname: {
                            required: true
                        },
                        gender: {
                            required: true
                        },
                        mobile: {

                        },
                        salary: {
                            required: true,
                            min: 1
                        },
                        department: {
                            required: true
                        }
                    }
                });
            },
            create_staff: function() {
                alert(111);
                this.validate();
                this.base.dc_notify("Hello World, What are you doing Hello World","success");
            },
            add_image: function(){
                alert('Chào');
                return false;
            }
        });

        new Views.Staff;
    });
})(jQuery);

