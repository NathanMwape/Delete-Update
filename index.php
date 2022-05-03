<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
		<ol class="breadcrumb">
		</ol>   

		<div class="row">
            <article class="col-sm-8 maincontent">
                <header >
                    <h1 >Afficher les donnees de personne</h1>
                </header>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>idP</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Ville</th>
                            <th>age</th>
                            <th>Photo</th>
                            <th>Email</th>
                            <th colspan="2" align="center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("data.php");

                        $sql = $conn->prepare('SELECT id,nom,prenom,ville,age,email,photo FROM personne');
                        $sql->execute();
                        $resultats  = $sql->fetchAll();
                        foreach ($resultats as $resultat) { ?>
                            
                        <tr>
                            <td><?= $resultat['id']?></td>
                            <td><?= $resultat['nom']?></td> 
                            <td><?= $resultat['prenom']?></td> 
                            <td><?= $resultat['ville']?></td> 
                            <td><?= $resultat['age']?></td> 
                            <td><?php echo '<img src="' . $resultat['photo']  . '"  width="90" height="90" /> '?></td>
                            <td><?= $resultat['email']?></td>
                            <td><a href="supprimer.php?numsup=<?=$resultat['id']?>" class="btn btn-danger">Supprimer</a></td> 
                            <td><a href="modifie.php?numEdit=<?=$resultat['id']?>" class="btn btn-primary">Modifier</a></td> 
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </article>
            <aside class="col-sm-4">
                <header >
                    <h1>Ajouter Personne</h1>
                </header>
                <hr>
                <form action="insertion.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label">Nom : </label>
                        <input type="text" name="nom" placeholder="Tapez votre nom" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label class="form-label">Prenom : </label>
                        <input type="text" name="prenom" placeholder="Tapez votre prenom" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label class="form-label">Ville : </label>
                        <input type="text" name="ville" placeholder="Tapez votre ville" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label class="form-label">Age : </label>
                        <input type="text" name="age" placeholder="Tapez votre age" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label class="form-label">Photo : </label>
                        <input type="file" name="fichier" placeholder="Tapez votre age" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label class="form-label"> Email : </label>
                        <input type="text" name="email" placeholder="Tapez votre email" class="form-control">
                    </div><br>
                    <div>
                        <input class="btn btn-primary w-100" type="submit" name="envoyer">
                    </div>
                </form>

            </aside>
        </div>
    </div>

    <script src="bootstrap-5.0.2/dist/js/bootstrap.js"></script>
</body>
</html>