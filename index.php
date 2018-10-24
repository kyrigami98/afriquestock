<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="images/logo1.png">
        <title>AfriqueStock</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet" />
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>


        <?php include_once 'header.php'; ?>

        <div id="home">
            <div class="slider">
                <div id="about-slider">
                    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators visible-xs">
                            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-slider" data-slide-to="1"></li>
                            <li data-target="#carousel-slider" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="images/slide1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="item">
                                <img src="images/slide2.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="item">
                                <img src="images/slide3.jpg" class="img-responsive" alt="">
                            </div>
                        </div>

                        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>

                        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <!--/#carousel-slider-->
                </div>
                <!--/#about-slider-->
            </div>
        </div>


        <section id="portfolio">
            <div class="container-fluid">
                <div class="center">
                    <div class="col-md-6 col-md-offset-3">  
                        <div class="panel-heading">
                            <h3 class="panel-title ">
                                <form method="POST" action="">
                                    <div class="form-group-lg"> 
                                        <button class="btn btn-default btn-lg" style="background-color:#5a0170;color:white; position:absolute;right:30px;top:13px;"><i class="fa fa-search pull-right"></i> </button>
                                        <input type="text" name="" class="input-lg form-control" placeholder="Rechercher des images, vidéos et autres..." />
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
                        <li><a class="btn btn-default active" href="#" data-filter="*">Tout</a></li>
                        <li><a class="btn btn-default" href="#" data-filter=".bootstrap">Images</a></li>
                        <li><a class="btn btn-default" href="#" data-filter=".html">Vidéos</a></li>
                        <li><a class="btn btn-default" href="#" data-filter=".wordpress">Gifs</a></li>
                    </ul>
                    <!--/#portfolio-filter-->

                    <style>

                    </style>


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
                        <div class="col-sm-3">

                            <div class="conatainer img-raised">   
                                <div class="recent-work-wrap">
                                    <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <p>Prise à Cotonou lors de la Japan Expo 2018</p> 
                                            <a class="preview btn-block" href="view.php"><i class="fa fa-shopping-cart"></i> Ajouter au panier </a>
                                            <a class="preview btn-block" href="view.php"><i class="fa fa-picture-o"></i> Images similaires </a>

                                        </div>
                                    </div>
                                </div>
                            </div> 

                        </div>
                        <div class="container col-sm-3">

                            <div class="conatainer img-raised">   
                                <div class="recent-work-wrap">
                                    <img class="img-responsive" src="images/slide1.jpg" alt="">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <p>Prise à Cotonou lors de la Japan Expo 2018</p> 
                                            <a class="preview btn-block" href="view.php"><i class="fa fa-shopping-cart"></i> Ajouter au panier </a>
                                            <a class="preview btn-block" href="view.php"><i class="fa fa-picture-o"></i> Images similaires </a>

                                        </div>
                                    </div>
                                </div>
                            </div></br> 

                            <div class="conatainer img-raised">   
                                <div class="recent-work-wrap">
                                    <img class="img-responsive" src="images/slide3.jpg" alt="">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <p>Prise à Cotonou lors de la Japan Expo 2018</p> 
                                            <a class="preview btn-block" href="view.php"><i class="fa fa-shopping-cart"></i> Ajouter au panier </a>
                                            <a class="preview btn-block" href="view.php"><i class="fa fa-picture-o"></i> Images similaires </a>

                                        </div>
                                    </div>
                                </div>
                            </div></br> 


                        </div>
                        <div class="container col-sm-3"></br> 

                            <div class="conatainer img-raised">   
                                <div class="recent-work-wrap">
                                    <img class="img-responsive" src="images/4.jpg" alt="">
                                    <div class="overlay">
                                        <div class="recent-work-inner">
                                            <p>Prise à Cotonou lors de la Japan Expo 2018</p> 
                                            <a class="preview btn-block" href="view.php"><i class="fa fa-shopping-cart"></i> Ajouter au panier </a>
                                            <a class="preview btn-block" href="view.php"><i class="fa fa-picture-o"></i> Images similaires </a>

                                        </div>
                                    </div>
                                </div>
                            </div>  <br/>

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
