<?php
    include_once("data.php");

    if (!empty($_FILES)) {
        
        $file_name = $_FILES['fichier']['name'];
        $file_extension = strrchr($file_name, ".");

        $file_tmp_name = $_FILES['fichier']['tmp_name'];
        $file_dest = 'image/'.$file_name;

        $extension_autorisees = array('.png','.jpg','.jpge','.PNG','.JPG','.JPGE');
        if (in_array($file_extension,$extension_autorisees)) {
            if (move_uploaded_file($file_tmp_name,$file_dest)) {
                if (isset($_POST['envoyer'])) {
                    $sql = $conn->prepare("UPDATE personne SET nom=?,prenom=?,ville=?,age=?,photo=?,email=? WHERE id=?");
                    $sql->execute(array($_POST['nom'],$_POST['prenom'],$_POST['ville'],$_POST['age'],$file_dest,$_POST['email'],$_POST['numid']));
                    include_once("index.php");
                }
            }else {
                include_once("index.php");
                echo "<p class='btn btn-danger'>erreur est survenue lors de l'envoie du fichier</p>";
            }
        }else {
            include_once("index.php");
            if (isset($_POST['envoyer'])) {
                    $sql = $conn->prepare("UPDATE personne SET nom=?,prenom=?,ville=?,age=?,photo=?,email=? WHERE id=?");
                    $sql->execute(array($_POST['nom'],$_POST['prenom'],$_POST['ville'],$_POST['age'],$file_dest,$_POST['email'],$_POST['numid']));
                    include_once("index.php");
                }
        }
    }
    
?>