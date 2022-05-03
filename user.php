<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap-utilities.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <title>Utilisateur</title>
</head>
<body>
    
<div class=" social-media">
   <ul class="social-network social-circle">
      <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
      <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
      <li><a href="#" class=" icoPinterest" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
      <li><a href="#" class="icoInstagram" title=" Instagram "><i class="fa fa-instagram"></i></a></li>
      <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
      <li><a href="#" class="icoYoutube" title="Youtube"><i class="fa fa-youtube"></i></a></li>
      <li><a href="#" class="icoVimeo" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
   </ul>
</div>
<style>
.social-media{text-align:center}
ul.social-network{list-style:none;display:inline;margin-left:0!important;padding:0}
ul.social-network li{display:inline;margin:0 0 0 5px}
.social-network a.icoFacebook:hover{background-color:#3B5998}
.social-network a.icoTwitter:hover{background-color:#3cf}
.social-network a.icoPinterest:hover{background-color:#c8232c}
.social-network a.icoVimeo:hover{background-color:#0590B8}
.social-network a.icoLinkedin:hover{background-color:#007bb7}
.social-network a.icoYoutube:hover{background-color:#c4302b}
.social-network a.icoInstagram:hover{background:linear-gradient(45deg,#f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%)}
.social-network a.icoRss:hover i,.social-network a.icoFacebook:hover i,.social-network a.icoTwitter:hover i,.social-network a.icoYoutube:hover i,.social-network a.icoInstagram i,.social-network a.icoPinterest:hover i,.social-network a.icoVimeo:hover i,.social-network a.icoLinkedin:hover i{color:#fff}
a.socialIcon:hover,.socialHoverClass{color:#44BCDD}
.social-circle li a{display:inline-block;position:relative;margin:5px auto 0;-moz-border-radius:50%;-webkit-border-radius:50%;border-radius:50%;text-align:center;width:50px;height:50px;font-size:20px;background-color:#D3D3D3}
.social-circle li i{margin:0;line-height:50px;text-align:center}
.social-circle li a:hover i,.triggeredHover{-moz-transform:rotate(360deg);-webkit-transform:rotate(360deg);-ms--transform:rotate(360deg);transform:rotate(360deg);-webkit-transition:all .2s;-moz-transition:all .2s;-o-transition:all .2s;-ms-transition:all .2s;transition:all .2s}
.social-circle i{color:#fff;-webkit-transition:all .8s;-moz-transition:all .8s;-o-transition:all .8s;-ms-transition:all .8s;transition:all .8s}
</style>
    <div class="contenair">
        <div class="row">
            <h4>Carousel</h4>
            <article class="col-sm-8">
            <div >
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="bruce-hong-Jb9GwgUYQSI-unsplash.jpg" alt="First slide" width="1000" height="500">
                            <div class="align-center carousel-caption d-none d-md-block">
                                <h3>Mac book</h3>
                                <p>No comment</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="brandon-lee-jT5mSPEteVc-unsplash.jpg" alt="Second slide" width="1000" height="500">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Iphone</h3>
                                <p>No comment</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="boitumelo-phetla-TMjKmDT64i0-unsplash.jpg" alt="Third slide" width="1000" height="500">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Bureau</h3>
                                <p>No comment</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            </article>
            
            <section class="col-sm-4" style="background-color: #89DCF4;">
                <h3>Article dans la base de donnees</h3>
                <?php 
                $conn = new PDO('mysql:host=localhost;dbname=edite','root','');
                $sql = $conn->prepare('SELECT id,nom,prenom,ville,age,email,photo FROM personne group by id desc LIMIT 3');
                $sql->execute();
                $resultat =$sql->fetchAll();
                foreach ($resultat as $resultats) { ?>
                    <b>article <?= $resultats['id'] ?></b>
                    <p> <img src="<?= $resultats['photo'] ?>" alt="" width="90"  height="90">  <?= $resultats['nom'] ?></p>
                    <p><a href="<?= $resultats['photo'] ?>">telecharge!</a></p>
                <?php }
                ?>

            </section>
            <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fa fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fa fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fa fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fa fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fa fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fa fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
        </div>
    </div>
    <div class="container my-5">

  <footer class="text-center text-lg-start" style="background-color: #db6930;">
    <div class="container d-flex justify-content-center py-5">
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
        <i class="fab fa-facebook-f"></i>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
        <i class="fab fa-youtube"></i>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
        <i class="fab fa-instagram"></i>
      </button>
      <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: #54456b;">
        <i class="fab fa-twitter"></i>
      </button>
    </div>

    <!-- Copyright -->
    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</div>
<!-- End of .container -->
    
    <script src="bootstrap-5.0.2/dist/js/bootstrap.js"></script>
    <script src="bootstrap-5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.0.2/dist/js/bootstrap.bundle.js"></script>
</body>
</html>