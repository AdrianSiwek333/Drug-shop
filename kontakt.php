<?php
include('header.php');
include('kod.php');
?>
<main>
    <div class="contact">
    <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19613.650488346455!2d22.4134698461778!3d52.08507597419712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4721fd49704e1cb7%3A0x2f8c3ab0c4c50ea3!2s08-106%20Zbuczyn!5e0!3m2!1spl!2spl!4v1668874147945!5m2!1spl!2spl" frameborder="0" style="border:0;" allowfullscreen></iframe>
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
                                    <input type="email" name="email" value="" size="40" placeholder="Twój Adres e-mail" />
                                </div>
                                <div class="col-6">
                                    <input type="text" name="title" value="" size="40" placeholder="Temat" />
                                    
                                </div>
                               
                            </div>
                            
                            <div class="row">
                                <div class="col-12"> 
                                <div class="col-12">
                                <textarea style="width: 100%; height: 150px;" type="text" name="text" value="" size="1000" placeholder="Treść twojej wiadomości" ></textarea>
                            </div>
                                   
                                </div>
                                <div class="toRight">
                                        <input style="width=250px"type="submit" name="wyslij" value="Prześlij" class="formSubmit" /> 
                                        
                                </div>
                                <div style="text-align:center">
                                <h1 class="fw-bold mb-2 text-uppercase"><?php if(isset($_POST['wyslij'])){echo $wyslano;}?></h1>
                                </div>
                                    
                        </div>
                        </form>
                    </div>
                    
                    <div class="col-lg-12 col-xl-4">
                        <div class="contactData">
                            <div class="title">
                                <i class="bi bi-phone"></i>Telefon
                            </div>
                            <div class="mainInformation">
                                +48 420 111 000
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
                                Zbuczyn ul. Celna 420
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
