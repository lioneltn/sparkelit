<br>
        <footer class="footer">
    

            

            <div class="footer-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title">Info Contact</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Adresse:</span>04 Rue Babel Boumhal Bassatine Ben Arous
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Tel:</span>Gratuit <a href="tel:">(216) 20.457.000 </a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">benyounesfiras@gmail.com</a>
                                    </li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="widget">
                                        <h4 class="widget-title">Mon compte</h4>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="my-account.php">Mon compte</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="links">
                                                    <li><a href="#">Historique des commandes</a></li>
                                                    <li><a href="login.php"><?PHP if(isset($_SESSION['email'])){ echo "se déconnecter";} else {echo  "se connecter";} ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="widget">
                                        <h4 class="widget-title">Panneau d'administration</h4>

                                        <div class="row">
                                            
                                            <div class="col-sm-6">
                                            <ul class="links">
                                                    <li><a href="../backend/pages/samples/login.php">Panneau d'administration puissant</a></li>
                                                    <li><a href="../backend/pages/samples/login-2.php">Panneau d'artiste </a></li>
                                                </ul>
                                            </div><!-- End .col-sm-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-5 -->

                                <div class="col-lg-3">
                                    <div class="widget">
                                        <h4 class="widget-title">Jours / heures de travail</h4>
                                        <ul class="contact-info">
                                            <li>
                                            Du lundi au samedi / de 9h00 à 20h00
                                            <br>
                                            Dimanche de 9h00 à 13h00
                                            </li>
                                        </ul>
                                    </div><!-- End .widget -->
                                </div><!-- End .col-md-33 -->
                            </div><!-- End .row -->

                            <div class="footer-bottom">
                                <p class="footer-copyright">5ICHA eCommerce. &copy; 2019. All Rights Reserved</p>
                                
                            </div><!-- End .footer-bottom -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .footer-middle -->
        </footer><!-- End .footer -->