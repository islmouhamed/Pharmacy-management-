$(document).ready(function() {

    
    $('#niveau').on('change', function() {
        //alert($(this).data('id_historique'));
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        //  var id_user = $('.qte_act option:selected').val();
        var niveau = $(this).val();


        //console.log(CSRF_TOKEN);
        $.ajax({
            /* the route pointing to the post function */
            url: 'date',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: { _token: CSRF_TOKEN, niveau: niveau },

            /* remind that 'data' is the response of the AjaxController */
            success: function(data) {

               
                $('#specialite').empty();

                $('#specialite').append($("<option/>", {
                    value: '',
                    text: ''

                }));

              
                $.each(data, function() {

                    $('#spesialite').append($("<option/>", {
                        value: this.id,
                        text: this.nom 

                    }));

                });


            }
        });
    });








    
});