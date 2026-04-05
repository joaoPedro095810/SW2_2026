<?php
    $emailBuscado = $_GET["email"] ?? "mariafernanda@email.com";

    $json = file_get_contents("usuarios.json");
    $usuarios = json_decode($json, true);

    $encontrado = false;

    foreach ($usuarios as $usuario) {
        if ($usuario["email"] == $emailBuscado) {
            echo "Usuário encontrado:<br>";
            echo "Nome: " . $usuario["nome"] . "<br>";
            echo "Email: " . $usuario["email"];
            $encontrado = true;
            break;
        }
    }

    if (!$encontrado) {
        echo "Usuário não encontrado.";
}
?>