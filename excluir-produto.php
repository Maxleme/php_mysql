<?php 

require "src/conexao.php";
require "src/Model/Produto.php";
require "src/Repository/ProdutoRepositorio.php";

$produtoRepository = new ProdutoRepositorio($pdo);
$produtoRepository->deletar($_POST["id"]);

header("location: admin.php");