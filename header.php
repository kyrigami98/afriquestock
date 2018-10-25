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

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="site-logo">
                        <a href="index.php" class="brand"><img src="images/logo2.png" style="height:35px;" class="img-responsive" alt=""></a>
                    </div>

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                            <i style="color:white;" class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">

                            <li><a href="#"  style="color:white;"  data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i> Mon panier 
                                    <span class="badge" style="background-color:#5a0170; font-size:12px; position:absolute;top:5px;right:0px;" >8</span></a>
                            </li>
                            <li><a href="contributeur.php"  style="color:white;"><i class="fa fa-home"></i> Devenir contributeur</a></li>
                            <li><a href="#"  data-toggle="modal" data-target="#myModal1" style="color:white;"><i class="fa fa-euro"></i> Tarifs </a></li>

                            <li><a href="#"  style="color:white;" class="dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"> <i class="fa fa-user"></i> Kyriel DOSSOU </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="form-control" type="submit" >Déconnexion</a> 
                                </div>
                            </li>
                            <li><a href="traduction.php"  style="color:white;"><img src="images/fr-rond.png" height="20px"/> fr </a></li>
                            <li><a href="traduction.php"  style="color:white;"><img src="images/en-rond.png"  height="20px" /> en </a></li>


                        </ul>
                    </div>
                    <!-- /.Navbar-collapse -->
                </div>
            </div>
        </nav>


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="fa fa-times"></i>
                        </button>
                        <a href="index.php" class="brand"><img src="images/logo1.png" style="height:20px;" class="img-responsive" alt=""></a>

                    </div>
                    <div class="modal-body">

                        <p class="img-thumbnail">
                            <img height="" class="img-responsive" src="images/accordion1.png">
                            <button type="button" class="btn-primary btn-block">
                                <i class="fa fa-trash-o"></i> Retirer
                            </button>
                        </p>

                        <p class="img-thumbnail">
                            <img height="" class="img-responsive" src="images/slide1.jpg">
                            <button type="button" class="btn-primary btn-block">
                                <i class="fa fa-trash-o"></i> Retirer
                            </button>
                        </p>


                    </div>

                </div>
            </div>
        </div>


        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content"  style="border-radius:20px;">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="fa fa-times"></i>
                        </button>
                        <a href="index.php" class="brand"><img src="images/logo1.png" style="height:20px;" class="img-responsive" alt=""></a>

                    </div>
                    <div class="modal-body" style="background-color:#5a0170  ">

                        <h4 class="text-center btn-primary">Combinez Photos, Vidéos et Créas libres de droit</h4>

                        <div class="row" style="border:3px #5a0170 solid;background-color:whitesmoke ">
                            <div class="container-fluid col-lg-12">
                                <div class="col-sm-4"  style="border-radius:10px;">
                                    <div class="text-center" >
                                        <div class="btn-primary btn-lg">Images de grandes tailles & Vidéos HD</div>
                                        <div class="col-md-10">
                                            <H4> <input type="radio" name="taille" value="Tpetit" />A l'unité <b class="pull-right">$50,00</b> </H4><hr> 
                                            <H4> <input type="radio" name="taille" value="Petit" /> PACK DE 5 <b class="pull-right">$150,00</b> </H4><hr> 
                                            <H4> <input type="radio" name="taille" value="Moyen" /> PACK DE 10 <b class="pull-right">$200,00</b> </H4><hr> 

                                            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg"> <i class="fa fa-shopping-cart"></i>  Acheter maintenant</button></div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center" style="border-radius:10px;">
                                        <p class="btn-primary btn-lg">Images de moyennes tailles & Vidéos HD</p>
                                        <div class="col-md-10">
                                            <H4> <input type="radio" name="taille" value="Tpetit" />A l'unité <b class="pull-right">$50,00</b> </H4><hr> 
                                            <H4> <input type="radio" name="taille" value="Petit" /> PACK DE 5 <b class="pull-right">$150,00</b> </H4><hr> 
                                            <H4> <input type="radio" name="taille" value="Moyen" /> PACK DE 10 <b class="pull-right">$200,00</b> </H4><hr> 

                                            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg"> <i class="fa fa-shopping-cart"></i>  Acheter maintenant</button></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="text-center" style="border-radius:10px;">
                                        <p class="btn-primary btn-lg">Images de petites tailles & Vidéos HD</p>
                                        <div class="col-md-10">
                                            <H4> <input type="radio" name="taille" value="Tpetit" />A l'unité <b class="pull-right">$50,00</b> </H4><hr> 
                                            <H4> <input type="radio" name="taille" value="Petit" /> PACK DE 5 <b class="pull-right">$150,00</b> </H4><hr> 
                                            <H4> <input type="radio" name="taille" value="Moyen" /> PACK DE 10 <b class="pull-right">$200,00</b> </H4><hr> 

                                            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg"> <i class="fa fa-shopping-cart"></i>  Acheter maintenant</button></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>