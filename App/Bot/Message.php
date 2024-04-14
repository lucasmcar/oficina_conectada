<?php

namespace App\Bot;

class Message
{

    public static function sendMessage(string $os, string $nomeCliente, string $veiculo)
    {
        return sprintf("Olá Sr/Sra. %s.\n Seu veiculo, modelo: %s foi cadastrado sob o servico: %s.\n Para acompanhar o serviço, basta acessar o link abaixo.\n 
        ", $nomeCliente, $veiculo, $os);
    }

}