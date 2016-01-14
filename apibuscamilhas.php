<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of apibuscamilhas
 *
 * @author marcos
 */
 
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

class apibuscamilhas {

    protected $Chave;
    protected $Senha;
    protected $TipoViagem;
    protected $Companhias;
    protected $Adultos;
    protected $Criancas;
    protected $Bebes;
    protected $Trechos;

    function __construct($chave = null, $senha = null, $tipoviagem = null, $companhias = null, $adultos = null, $criancas = null, $bebes = null, $trechos = null) {
        $this->Chave = $chave;
        $this->Senha = $senha;
        $this->TipoViagem = $tipoviagem;
        $this->Companhias = $companhias;
        $this->Adultos = $adultos;
        $this->Criancas = $criancas;
        $this->Bebes = $bebes;
        $this->Trechos = $trechos;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
    
    public function enviarRequisicao() {                
        $url = 'http://api.buscamilhas.com';
        
        $json = new StdClass();
        $json->Chave = $this->Chave;
        $json->Senha = $this->Senha;
        $json->TipoViagem = $this->TipoViagem;
        $json->Companhias = $this->Companhias;
        $json->Adultos = $this->Adultos;
        $json->Criancas = $this->Criancas;
        $json->Bebes = $this->Bebes;
        $json->Trechos = $this->Trechos;
        $data = json_encode($json);                
        
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $result = curl_exec($ch);

        curl_close($ch);

        return $result;
    }

}
