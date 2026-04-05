<?php
    $nomeRemover = "Mouse";

    $json = file_get_contents("produtos.json");
    $produtos = json_decode($json, true);

    $produtosAtualizados = [];

    foreach ($produtos as $produto) {
        if ($produto["nome"] != $nomeRemover) {
            $produtosAtualizados[] = $produto;
    }
}

    $jsonFinal = json_encode($produtosAtualizados);

    file_put_contents("produtos.json", $jsonFinal);

        echo "Produto removido com sucesso!";
?>