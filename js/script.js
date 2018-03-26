$(document).ready(function(){
    $("#contact-form").submit(function(e){
        e.preventDefault();
        $('.commantaire').empty();
        var postdata = $('#contact-form').serialize();

        $.ajax({
            type: 'POST',
            url: 'php/function.php',
            data : postdata,
            dataType: 'json',
            success: function(result){
                if (result.reussi) {
                    $("#contact-form").append("<p class=\'merci\'>Votre message a bien été transmit. Merci.</p>");
                    $("#contact-form")[0].reset();
                } else {
                    $("#nom + .commantaire").html(result.nomError);
                    $("#prenom + .commantaire").html(result.prenomError);
                    $("#mail + .commantaire").html(result.mailError);
                    $("#telephone + .commantaire").html(result.telephoneError);
                    $("#message + .commantaire").html(result.messageError);
                }
            }
        });
    });
})
