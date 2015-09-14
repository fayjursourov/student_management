/**
 * Created by toorel on 9/14/2015.
 */
//function idnumber(){

   // //var x = 9999;
   // //x = element.getAttribute("personid");
   //var x= element.getAttribute('personid');
   // //document.write("hello");
   // alert(x);
   // var language = document.documentElement.getAttribute('personid');
   //var language = $(this).innerHTML; //.getAttribute('personid');
   // alert(language);

//}

$(document).ready(function(){
    $('.edit_person').on('click', function(){
        var person_id = $(this).attr('personid');
        //alert(person_id);
        $('#person_id').html(person_id);
    });
});