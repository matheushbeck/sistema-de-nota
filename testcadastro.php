
<?php
    //print_r($_REQUEST);
  
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

        
        //$select = "SELECT * FROM usuarios where usuario = '$email' and senha = '$senha'";
        $select = "INSERT INTO usuarios values('$email','$senha')";
        $result = $pdo->query($select);
      
        //$result->execute();

        print_r($select);
        echo '<br>';
        print_r($result);

        if ($result = 1) {
            header('location: login.html');
        } else {
           echo "erro";
        }
?>
