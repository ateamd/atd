<h1><?php echo $lang['contact']; ?></h1>
<h3><?php echo $lang['contact_2']; ?></h3>

<table width="100%" height="500px" class="tabletr">
    <tr>
        <td>
             <?php
             if (empty($_POST['submit'])) {
             ?>
                <div id="form">
                    <form action="http://adwmicro.pl/index.php" method="post">
                        <input type="text" class="text_box_form" name="imienazwisko" style="width:90%;"
                               placeholder="<?php echo $lang['name']; ?>"><br/>
                        <input type="text" class="text_box_form" name="email" style="width:44%" placeholder="E-Mail">
                        <input type="text" class="text_box_form" name="telefon" style="width:44%" placeholder="Telefon."><br/>

                        <input type="text" class="text_box_form" name="trescwiadomosci" style="width:90%"
                               placeholder="<?php echo $lang['massage']; ?>"><br/>
                        <input type="submit" name="submit" class="buttons" value=<?php echo $lang['send']; ?>>

                    </form>
                </div>
            <?php

            } elseif (!empty($_POST['imienazwisko']) && !empty($_POST['email']) && !empty($_POST['telefon']) && !empty($_POST['trescwiadomosci'])) {
                if ($_POST['email']) {
                    $adresemail = 'adwmicro@adwmicro.pl, wasyl@adwmicro.pl, adrian@adwmicro.pl, adrian.wojdat@gmail.com';
                    $wiadomosc = "Od: $_POST[imienazwisko]\n\n($_POST[email])\n\n($_POST[telefon])\n\n$_POST[trescwiadomosci]";
                    $nadawca = "From: $_POST[email]";
                    @mail($adresemail, "Formularz kontaktowy z www.adwa.adwmicro.pl", "$wiadomosc", "$nadawca");
                    echo "<span style=\'color: #00D800; font-weight: bold; \'>Dziękujemy, formularz został wysłany.</span>";
                } else {
                    echo "<span style=\'color: #FF0000; text-align: center; font-weight: bold;\''>Wprowadzony adres E-Mail jest niepoprawny!!!</span>";
                }
            } else {
                echo "<span style=\'color: #FF0000; text-align: center; font-weight: bold;\''>Cofnij i wypełnij wszystkie pola formularza!!!</span>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <table class=tabledwa>
                <tr>
                    <td><a href="http://atd.adwmicro.pl"><img src="img/section-conto-img/twit.png"></a></td>
                    <td><a href="http://atd.adwmicro.pl"><img src="img/section-conto-img/face.png"></a></td>
                    <td><a href="http://atd.adwmicro.pl"><img src="img/section-conto-img/gog.png"></a></td>
                    <td><a href="http://atd.adwmicro.pl"><img src="img/section-conto-img/skype.png"></a></td>

                </tr>
            </table>
        </td>
    </tr>
</table>


