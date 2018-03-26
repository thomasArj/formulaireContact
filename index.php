<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>phpForm</title>
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2>Contactez-moi</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contact-form" class="" action="" method="post" role="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="nom">Nom <span class="rouge">*</span>: </label>
                                <input type="text" id="nom" name="nom" value="" class="form-control" placeholder="Votre nom">
                                <p class="commantaire"></p>
                            </div>
                            <div class="col-lg-6">
                                <label for="prenom">Prénom <span class="rouge">*</span>:</label>
                                <input type="text" id="prenom" name="prenom" value="" class="form-control" placeholder="Votre prénom">
                                <p class="commantaire"></p>
                            </div>
                            <div class="col-lg-6">
                                <label for="mail">E-mail <span class="rouge">*</span>:</label>
                                <input type="email" id="mail" name="mail" value="" class="form-control" placeholder="Votre e-mail">
                                <p class="commantaire"></p>
                            </div>
                            <div class="col-lg-6">
                                <label for="telephone">Téléphone :</label>
                                <input type="tel" id="telephone" name="telephone" value="" class="form-control" placeholder="Votre téléphone">
                                <p class="commantaire"></p>
                            </div>
                            <div class="col-lg-12">
                                <label for="message">Message <span class="rouge">*</span>:</label>
                                <textarea rows="4" name="message" id="message" class="form-control" placeholder="Votre message" value=""></textarea>
                                <p class="commantaire"></p>
                            </div>
                            <div class="col-lg-12">
                                <p class="obligatoire"><span class="rouge">*</span> C'est information sont requises</p>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" value="Envoyer" class="button1">
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </body>
</html>
