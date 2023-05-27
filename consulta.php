<?php
            $dbHost = 'localhost';
            $dbUsername = 'root';
            $dbPassword = '';
            $dbName = 'estudo';
            
            $pdo = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
            $nome = $_POST['aluno'];

            $select = "SELECT * FROM alunos where nome = '$nome'";
            $result = $pdo->query($select);
            //print_r($select);
            //echo '<br>';
            //print_r($result);

        if ($row = $result->fetch_assoc()) {
            echo '<p style="background-color: #f2f2f2; margin: 0px; padding: 8px; border: 1px solid #ddd; text-align: center; font-size: 1.4rem;"><b>Nome do aluno: '.$row["nome"].'<b></p>';
        }
        echo '<table style="border-collapse: collapse; width: 100%;">';
        echo '<tr>';
        echo '<th style="background-color: #f2f2f2; padding: 8px; border: 1px solid #ddd;">Matéria</th>';
        echo '<th style="background-color: #f2f2f2; padding: 8px; border: 1px solid #ddd;">Primeiro trimestre</th>';
        echo '<th style="background-color: #f2f2f2; padding: 8px; border: 1px solid #ddd;">Segundo trimestre</th>';
        echo '<th style="background-color: #f2f2f2; padding: 8px; border: 1px solid #ddd;">Terceiro trimestre</th>';
        echo '<th style="background-color: #f2f2f2; padding: 8px; border: 1px solid #ddd;">Média</th>';
        echo '</tr>';
        do {
            echo '<tr>';
            echo '<td style="padding: 8px; border: 1px solid #ddd; text-align: center;">' . $row["materia"] . '</td>';
            echo '<td style="padding: 8px; border: 1px solid #ddd; text-align: center;">' . $row["nota1"] . '</td>';
            echo '<td style="padding: 8px; border: 1px solid #ddd; text-align: center;">' . $row["nota2"] . '</td>';
            echo '<td style="padding: 8px; border: 1px solid #ddd; text-align: center;">' . $row["nota3"] . '</td>';
            echo '<td style="padding: 8px; border: 1px solid #ddd; text-align: center;">' . $row["media"] . '</td>';
            echo '</tr>';
        } while ($row = $result->fetch_assoc());

        echo '</table>';

            
        ?>