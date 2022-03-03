<?php
$title = "Contact";
$css = "contact";
require('process/header.php');

?>

<main>

    <h1>Contactez Nous</h1>

    <div class="container">

        <div class="text">

            <h2>Get in touch with us</h2>

            <p>

                We sincerely care about our customers,
                that’s why we always strive to provide the best star naming service.<br>
                Before contacting us, check out our frequently asked questions.
                Also, you may try reaching out to us via Chat.
                Usually, we get back to you within 1 business day.
                Any questions regarding the order process,
                stars and everything else will be answered!

            </p>

            <h2>Company details</h2>

            <p>

                SIA OCR,<br>
                Reg. number: 40203116030<br>
                Address: Riga, Matisa iela 61 – 23, LV-1009,<br>
                Latvia<br>
                contact@cosmonova.org<br>

            </p>

        </div>

        <form action="contact_process.php" method="post">

            <h5>Formulaire de contact</h5>

            <hr>

            <div class="name">

                <div class="txt_field">
                    <label>prénom&nbsp;</label>
                    <input type="text" name="name" required autocomplete="off">
                </div>

                <div class="txt_field">
                    <label>nom&nbsp;</label>
                    <input type="text" name="lname" required autocomplete="off">
                </div>

            </div>

            <div class="txt_field">
                <label>email&nbsp;</label>
                <input type="email" name="email" required autocomplete="off">
            </div>

            <div class="txt_field">
                <label>sujet&nbsp;</label>
                <input type="text" name="subject" required autocomplete="off">
            </div>

            <div class="txt_field">
                <label>message&nbsp;</label>
                <textarea name="content" required></textarea>
            </div>

            <input type="submit" name="formsend" value="Envoyer">

        </form>

    </div>

</main>

<?php

require('process/footer.php');

?>