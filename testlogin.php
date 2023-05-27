
<?php
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'estudo';

        $pdo = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
        
        //$pdo = new PDO('mysql:host=localhost;dbname=estudo','root',);
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        echo 'Email: ' . $email;
        echo '<br>';
        echo 'Senha: ' . $senha;
        echo '<br>';

        //$select = "SELECT * FROM usuarios where usuario = $email and senha = $senha";

       // $result = $pdo->prepare($select);
        //$result->execute($select);

        
        $select = "SELECT * FROM usuarios where usuario = '$email' and senha = '$senha'";
        $result = $pdo->query($select);
      
        //$result->execute();

        //print_r($select);
        //echo '<br>';
        //print_r($result);

        if (mysqli_num_rows($result)<1) {
            header('location: login.php');
        } else {
            header('location: index.html');
        }
        

    }else {
        header('location: login.php');
    }
?>
