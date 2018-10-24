<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="site-logo">
                <a href="index.php" class="brand"><img src="images/logo2.png" style="height:40px;" class="img-responsive" alt=""></a>
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
                    <li><a href="index.php"  style="color:white;"><i class="fa fa-home"></i> Accueil</a></li>
                    <li><a href="#"  style="color:white;"  data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i> Mon panier 
                            <span class="badge" style="background-color:#5a0170; font-size:12px; position:absolute;top:5px;right:0px;" >8</span></a>
                    </li>
                    <li><a href="#"  style="color:white;" class="dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"> <i class="fa fa-user"></i> Kyriel DOSSOU </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            Les langues:
                            <a class="form-control" type="submit" >Anglais</a> 
                            <a class="form-control" type="submit" >Français</a> 
                            <div class="divider"></div>
                            <a class="form-control" type="submit" >Déconnexion</a> 

                        </div>

                    </li>

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