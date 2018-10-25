
<?php include_once 'header.php'; ?>
<section id="portfolio">

    <div class="container-fluid btn-primary" style="padding-top:140px;padding-bottom:80px;z-index:10;background-image:url('images/banner1.png');background-size:cover;">

        <h2 class="text-center"> Des images Afro/black 100% gratuites et libres de droit  </h2>
        <div class="center">
            <div class="col-md-6 col-md-offset-3">  
                <div class="panel-heading">
                    <h3 class="panel-title ">
                        <form method="POST" action="">
                            <div class="form-group-lg"> 
                                <button class="btn btn-default btn-lg" style="background-color:#5a0170;color:white; position:absolute;right:33px;top:13px;"><i class="fa fa-search pull-right"></i> </button>
                                <input type="text" name="" required="" class="input-lg form-control" placeholder="Rechercher les meilleurs images africaines..." />
                            </div>
                        </form>

                    </h3>
                </div>

            </div>
        </div>
    </div> 
    <hr> 
    <div class="container-fluid">
        <div class="">
            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter=".bootstrap">Images</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".html">Vidéos</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".wordpress">Créas</a></li>
            </ul>
            <!--/#portfolio-filter-->

            <style>
                .imgborder{
                    margin-bottom:5px;
                }
            </style>

            <div class="row">
         
                <a href="view.php" class=""><img class="imgborder" src="images/slide1.jpg" alt="" height="200px" /></a>
                <a href="view.php"  class=""><img class="imgborder" src="images/4.jpg" alt="" height="200px" /></a> 
                <a href="view.php"  class=""><img class="imgborder" src="images/accordion1.png" alt="" height="200px" /></a>
                <a href="view.php"  class=""><img class="imgborder" src="images/4.jpg" alt="" height="200px" /></a>  
                <a href="view.php"  class=""><img class="imgborder" src="images/slide2.jpg" alt="" height="200px" /></a>
                <a href="view.php"  class=""><img class="imgborder" src="images/4.jpg" alt="" height="200px" /></a>  
                <a href="view.php"  class=""><img class="imgborder" src="images/accordion1.png" alt="" height="200px" /></a>
                <spa href="view.php" an class=""><img class="imgborder" src="images/4.jpg" alt="" height="200px" /></a>  
                <a href="view.php"  class=""><img class="imgborder" src="images/4.jpg" alt="" height="200px" /></a>  
            </div>

            <div class="row">


                <div class="col-sm-3">

                    <div class="img-raised">   
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/4.jpg" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <p>Prise à Cotonou lors de la Japan Expo 2018</p> 
                                    <a class="preview btn-block" href="images/4.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> Voir l'original</a>
                                    <a class="preview btn-block" href="view.php"><i class="fa fa-shopping-cart"></i> Ajouter au panier </a>
                                    <a class="preview btn-block" href="view.php"><i class="fa fa-picture-o"></i> Images similaires </a>
                                </div>
                            </div>
                        </div>
                    </div> 

                </div>


            </div>

        </div>
    </div>
</section>

<section id="contact">
    <div class="contact-page">
        <div class="container">
            <div class="center">
                <h2>Contacter nous!</h2>
            </div>
            <div class="row contact-wrap">
                <div class="col-md-8 col-md-offset-2">
                    <div id="sendmessage">Votre message</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="plus de 4 caractères" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Mail invalide" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjet" data-rule="minlen:4" data-msg="plus de 8 caractères" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Votre message" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>

                        <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Send Message</button></div>
                    </form>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </div>
    <!--/#contact-page-->
</section>

<?php include_once 'footer.php'; ?>
