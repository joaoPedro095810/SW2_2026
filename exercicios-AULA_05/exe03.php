<?php
    $json = file_get_contents("produtos.json");
    $produtos = json_decode($json, true);

    $novoProduto = [
        "nome" => "Monitor",
        "preco" => 900,
        "quantidade" => 20
];

    $produtos[] = $novoProduto;

    $jsonAtualizado = json_encode($produtos);

    file_put_contents("produtos.json", $jsonAtualizado);

        echo "Produto adicionado com sucesso!";
?>