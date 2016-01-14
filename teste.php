<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include './apibuscamilhas.php';

$chave = "SuaChave";
$senha = "SuaSenha";
$tipoviagem = 1;
$companhias = array("GOL");
$adultos = 1;
$criancas = 0;
$bebes = 0;
$trechos = array(array("Origem" => "BSB", "Destino" => "BHZ", "DataIda" => "01/07/2015", "DataVolta" => "07/07/2015"));

$objeto = new apibuscamilhas($chave, $senha, $tipoviagem, $companhias, $adultos, $criancas, $bebes, $trechos);

$ida = new apibuscamilhas();
$ida->Chave = "c4ca4238a0b923820dcc509a6f75849b";
$ida->Senha = "c4ca4238a0b923820dcc509a6f75849b";
$ida->TipoViagem = 0;
$ida->Companhias = array("GOL");
$ida->Adultos = 1;
$ida->Criancas = 0;
$ida->Bebes = 0;
$ida->Trechos = array(array("Origem" => "BSB", "Destino" => "BHZ", "DataIda" => "01/07/2015"));
//var_dump($ida->enviarRequisicao());
echo '<hr>';

$idaevolta = new apibuscamilhas();
$idaevolta->Chave = "c4ca4238a0b923820dcc509a6f75849b";
$idaevolta->Senha = "c4ca4238a0b923820dcc509a6f75849b";
$idaevolta->TipoViagem = 1;
$idaevolta->Companhias = array("GOL", "AZUL", "TAM");
$idaevolta->Adultos = 1;
$idaevolta->Criancas = 0;
$idaevolta->Bebes = 0;
$idaevolta->Trechos = array(array("Origem" => "BSB", "Destino" => "BHZ", "DataIda" => "01/07/2015", "DataVolta" => "07/07/2015"));
var_dump($idaevolta->enviarRequisicao());
echo '<hr>';

$multitrecho = new apibuscamilhas();
$multitrecho->Chave = "c4ca4238a0b923820dcc509a6f75849b";
$multitrecho->Senha = "c4ca4238a0b923820dcc509a6f75849b";
$multitrecho->TipoViagem = 2;
$multitrecho->Companhias = array("GOL");
$multitrecho->Adultos = 1;
$multitrecho->Criancas = 0;
$multitrecho->Bebes = 0;
$multitrecho->Trechos = array(
    array("Origem" => "BSB", "Destino" => "BHZ", "DataIda" => "01/07/2015"),
    array("Origem" => "BHZ", "Destino" => "RIO", "DataIda" => "02/07/2015")
    );
//var_dump($multitrecho->enviarRequisicao());
echo '<hr>';
