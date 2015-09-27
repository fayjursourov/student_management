/**
 * Created by toorel on 9/14/2015.
 */

$(document).ready(function(){
    $('.edit_person').on('click', function(){
        var person_id = $(this).data('personid');
        $('#person_id').attr('value', person_id);
    });

    $('.delete_student_info').on('click', function(){

        var button = this;

        var person_id = $(this).data('personid');
        //alert(person_id);
        $.ajax({
            method: "POST",
            url: "delete.php",
            data: { id: person_id},
            beforeSend: function( xhr ) {
               return confirm('are you sure?');
            }
        }).done(function( data ) {
            if(data == 'true'){
                $( button ).parent().parent().parent().parent().parent().remove();
            }
            else{
                alert('not deleted');
            }

        });
    });
});
