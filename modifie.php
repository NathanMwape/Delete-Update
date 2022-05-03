<?php
    include_once("data.php");
    $sup = $conn->prepare("SELECT * FROM personne WHERE id=? ");
    $execut = $sup->execute(array( $_GET['numEdit']));
    $pers=$sup->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="">
            <header >
                <h1>Modifier la personne</h1>
            </header>
            <hr>
            <form action="enregistrer.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="numid" value="<?= $pers['id'];?>">
                            <div class="form-group">
                                <label class="form-label">Nom : </label>
                                <input type="text" name="nom" class="form-control" value="<?= $pers['nom'];?>">
                            </div><br>
                            <div class="form-group">
                                <label class="form-label">Prenom : </label>
                                <input type="text" name="prenom"  class="form-control" value="<?= $pers['prenom'];?>">
                            </div><br>
                            <div class="form-group">
                                <label class="form-label">Ville : </label>
                                <input type="text" name="ville"  class="form-control" value="<?= $pers['ville'];?>">
                            </div><br>
                            <div class="form-group">
                                <label class="form-label">Age : </label>
                                <input type="text" name="age" class="form-control" value="<?= $pers['age'];?>">
                            </div><br>
                            <div class="form-group">
                                <label class="form-label">Photo : </label>
                                <input type="file" name="fichier" class="form-control" value="<?= $pers['photo'];?>">
                            </div><br>
                            <div class="form-group">
                                <label class="form-label"> Email : </label>
                                <input type="text" name="email"  class="form-control" value="<?= $pers['email'];?>">
                            </div><br>
                            <div class=" text-center">
                                <input class="btn btn-primary w-50 " name="envoyer" type="submit" value="Enregistrer les modifications">
                            </div>
                        </form>
            </div>
        </div>
        
    
</body>
</html>