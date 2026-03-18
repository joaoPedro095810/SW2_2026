<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade= $_POST['idade'];     
        //superglobais = pseudovariáveis (get, pos, request, session, server)//

        $nascimento = date('Y') - $idade;


        if ($idade >= 18) {
            echo "<p style = 'color: red;'> Você é maior de idade" ;
        }else{
            echo "<p style = 'color: blue;'> Você é menor de idade";
        }
    ?>
    

    <div>
        <p>Nome: <?php echo $nome ?></p>
        <p>Email é: <?php echo $email ?></p>
        <p>Idade: <?php echo $idade ?></p>
        <p>Data de Nascimento: <?php echo $nascimento ?></p>
    </div>


    <?php
        echo "<h1>Lista de Clientes</h1>";
        echo "<ul>";
        for ($i=1; $i <= 3; $i++) { 
            echo "<li>Cliente $i </li>";
        }
        echo "</ul>";
    ?>

<!--<div>
        <h1>Lista de Clientes</h1>
        <ul>
            <li>Cliente 1</li>
            <li>Cliente 2</li>
            <li>Cliente 3</li>
        </ul>
    </div> -->
</body>
</html>