
<?php include_once 'header.php'; ?>

<section id="about">
    <div class="container">
        <div class="center">
            <div class="col-md-6 col-md-offset-3">
                <h2>Achat en cours</h2>
            </div>
        </div>
    </div>
    <style>

    </style>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInRight">  
                <p>Etoile rouge</p>
                <img src="images/1.png" class="img-responsive img-thumbnail" />
                <div class="row container-fluid" >
                    <a class="btn btn-default col-sm-5" href="images/4.jpg" rel="prettyPhoto"><i class="fa fa-download"></i>Télécharger avec filigramme</a>
                    <a class="btn btn-default col-sm-3" href="view.php"><i class="fa fa-share"></i> Partager </a>
                    <a class="btn btn-default col-sm-3" href="view.php"><i class="fa fa-picture-o"></i> Images similaires </a>
                </div>

            </div>
            <!--/.col-sm-6-->

            <div class="col-sm-6 wow fadeInDown">
                <div class="accordion">
                    <div class="panel-group" id="accordion1">
                        <div class="panel panel-default">
                            <div class="panel-heading active">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                        Prix:
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="media accordion-inner">
                                        <div class="media-body">
                                            <h4>Acheter une image</h4>
                                            <p>Certaines images sont soumises à des licences. Pour en avoir le plein droit d'utilisation vous devez les achetées.</p>
                                            <p class="text-primary">Taille de l'image:</p>
                                            <div class="col-md-10">
                                                <H4> <input type="radio" name="taille" value="Tpetit" /> Très petit  <b class="pull-right">$50,00</b> </H4><hr> 
                                                <H4> <input type="radio" name="taille" value="Petit" /> Petit <b class="pull-right">$150,00</b> </H4><hr> 
                                                <H4> <input type="radio" name="taille" value="Moyen" /> Moyen <b class="pull-right">$200,00</b> </H4><hr> 
                                                <H4> <input type="radio" name="taille" value="Grande" /> Grande <b class="pull-right">$550,00</b> </H4>


                                                <div class="text-center"><button type="submit" class="btn btn-primary btn-lg"> <i class="fa fa-shopping-cart"></i>  Ajouter au panier</button></div>

                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                        Informations générales:
                                        <i class="fa fa-angle-right pull-right"></i>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Crédit:</p>
                                    <p>lieu:</p>
                                    <p>Auteur:</p>
                                    <p>Créatif Numéro:</p>
                                    <p>Date d'ajout:</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/#accordion1-->
                </div>
            </div>

        </div>
        <!--/.row-->
    </div>

    <div class="wow fadeInDown">
        <div class="accordion">
            <div class="panel-group" id="accordion1">
                <div class="panel panel-default">
                    <div class="panel-heading active">
                        <h3 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse4">
                                <H4> Images similaires: </H4>
                            </a>
                        </h3>
                    </div> 
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            <p>
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
                            </p>
                        </div>
                    </div>
                    <div class="">

                        <div class="row">

                            <span class=""><img class="imgborder" src="images/slide1.jpg" alt="" height="200px" /></span>
                            <span class=""><img class="imgborder" src="images/4.jpg" alt="" height="200px" /></span> 
                            <span class=""><img class="imgborder" src="images/accordion1.png" alt="" height="200px" /></span>
                            <span class=""><img class="imgborder" src="images/4.jpg" alt="" height="200px" /></span>  
                            <span class=""><img class="imgborder" src="images/slide2.jpg" alt="" height="200px" /></span>
                            <span class=""><img class="imgborder" src="images/4.jpg" alt="" height="200px" /></span>  
                            <span class=""><img class="imgborder" src="images/accordion1.png" alt="" height="200px" /></span>
                            <span class=""><img class="imgborder" src="images/4.jpg" alt="" height="200px" /></span>  
                            <span class=""><img class="imgborder" src="images/4.jpg" alt="" height="200px" /></span>  

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.container-->
</section>
<!--/#about-->


<?php include_once 'footer.php'; ?>
