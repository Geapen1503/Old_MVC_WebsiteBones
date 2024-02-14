<?php
ob_start();
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../public/css/p3.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 1000px)" href="../public/lcss/lP3.css">
	<link rel="icon" type="image/png" href="img/">
	<title>  - Contact</title>
</head>
<?php
$head = ob_get_clean();

ob_start();
?>


    <div id="MainBox">

            <div id="contactBox">

            <p class="contactPresText">Contactez-nous ici</p>
            <form method="post">
                <label>Nom :</label>
                <input class="input" type="text" name="nom" required>
                <label>Email :</label>
                <input class="input" type="email" name="email" required>
                <label>Sujet :</label>
                <input class="input" type="text" name="sujet" required>
                <label>Message :</label>
                <textarea name="message" required></textarea>
                <input class="buttoni" type="submit" value="Submit">
            </form>

            <?php
            if (isset($_POST["message"])) {
                $message = "Ce message vous a été envoyé via la page contact du site de votre entreprise
                Nom : " . $_POST["nom"] . "
                Email : " . $_POST["email"] . "
                Message : " . $_POST["message"];
                $retour = mail("@gmail.com", $_POST["sujet"], $message, "From:contact@exemplesite.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
                if ($retour) {
                    echo "l'email a bien été envoyé.";
                }
            }
             ?>


        </div>


    <iframe class="locaIframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5662709.460285854!2d-2.4472497178668786!3d46.130932393293705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a02933785731%3A0x6bfd3f96c747d9f7!2sFrance!5e0!3m2!1sfr!2sfr!4v1673771601363!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


    </div>

<?php
$content = ob_get_clean();