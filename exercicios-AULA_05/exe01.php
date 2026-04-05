<?php
    $produtos = [
        ["nome" => "Notebook", "preco" => 3500, "quantidade" => 10],
        ["nome" => "Mouse", "preco" => 50, "quantidade" => 100],
        ["nome" => "Teclado", "preco" => 120, "quantidade" => 50]
        ];

    $json = json_encode($produtos, JSON_PRETTY_PRINT);

    file_put_contents("produtos.json", $json);

        echo "Arquivo produtos.json criado com sucesso!";

?>