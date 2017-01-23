<?php

namespace Minerva\TotalVoice;

use Minerva\TotalVoice\HTTP\HttpClient;
use Minerva\TotalVoice\HTTP\HttpResponse;
use Minerva\TotalVoice\SMS\SMS;

/**
 * TotalVoice
 *
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Minerva\TotalVoice
 */
class TotalVoice
{
    /**
     * @var string
     */
    public static $token;

    /**
     * @var string
     */
    public static $api = 'https://api.evoline.com.br';

    /**
     * @param SMS $sms
     * @param bool $resposta Aguarda resposta do usuario
     * @return HttpResponse
     */
    public static function sendSms(SMS $sms, $resposta = false)
    {
        return HttpClient::post('/sms', [
            'numero_destino'   => $sms->getNumber(),
            'mensagem'         => $sms->getText(),
            'resposta_usuario' => $resposta
        ]);
    }
}