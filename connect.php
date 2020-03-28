<?php
include ('base.php');
if($_POST){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $mdp = $_POST['password_c'];
    $date = $_POST['date_de_naissance'];

    if(empty($username) AND empty($email) AND empty($mdp) AND empty($date)){
        echo "Remplissez les champs";
    }else {
        $query = "INSERT INTO users (username, email, password_c, date_de_naissance) VALUES ('$username', '$email', '".hash('sha256', $mdp)."', '$date')";

        $test = mysqli_query($conn , $query);
        if ($test === true){
            echo "INSERTION REUSSIE";
        }else{
            echo "Erreur";
        }
    }
}
    
?>