<?php
include('header.php');
?>
<main>
    <div class="contact">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2437.215713417239!2d21.05835225209207!3d52.34837277968277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ec8b17d97b391%3A0xf6218e9b49a6253f!2sS%C5%82odka%2018%2C%2003-290%20Warszawa!5e0!3m2!1spl!2spl!4v1648586382660!5m2!1spl!2spl" frameborder="0" style="border:0;" allowfullscreen></iframe>
        </div>
        <div class="howToContact">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="contactHeader">
                            <h1>Jak się z nami skontaktować</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-8">
                        <form action="" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" name="name" value="" size="40" placeholder="Imię" />
                                </div>
                                <div class="col-6">
                                    <input type="text" name="surname" value="" size="40" placeholder="Nazwisko" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <input type="email" name="email" value="" size="40" placeholder="Adres e-mail" />
                                </div>
                                <div class="col-6">
                                    <input type="text" name="title" value="" size="40" placeholder="Temat" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                <div class="col-12">
                                    <input type="text" name="text" value="" size="1000" placeholder="Tresc" />
                                </div>
                                    <div class="toRight">
                                        <input type="submit" name="wyslij" value="Prześlij" class="formSubmit" />
                                    </div>
                                </div>
                                <h1><?php echo $wyslano?></h1>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <div class="contactData">
                            <div class="title">
                                <i class="bi bi-phone"></i>Telefon
                            </div>
                            <div class="mainInformation">
                                34 373 28 22
                            </div>
                            <div class="moreInformation">
                                Infolinia dostępna w godzinach 8:00 - 16:00
                            </div>
                        </div>
                        <div class="contactData">
                            <div class="title">
                                <i class="bi bi-envelope"></i>E-mail
                            </div>
                            <div class="mainInformation">
                                wsparcie@dob-med.com
                            </div>
                            <div class="moreInformation">
                                Pracownicy odpisują na wiadomości ze skrzynki pocztowej w godzinach 8:00 - 16:00
                            </div>
                        </div>
                        <div class="contactData">
                            <div class="title">
                                <i class="bi bi-building"></i>Adres
                            </div>
                            <div class="mainInformation">
                                Warszawa ul. Słodka 18
                            </div>
                            <div class="moreInformation">
                                Firma otwarta w godzinach 8:00 - 16:00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include('footer.php');
?>
