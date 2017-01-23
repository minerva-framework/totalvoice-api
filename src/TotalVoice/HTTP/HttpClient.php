<?php

namespace Minerva\TotalVoice\HTTP;

use Minerva\TotalVoice\TotalVoice;

/**
 * HttpClient
 *
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Minerva\TotalVoice\HTTP
 */
class HttpClient
{

    /**
     * Envia um conjunto de parâmetros via post
     *
     * @param $url
     * @param array $data
     * @return HttpResponse
     */
    public static function post($url, array $data)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,            TotalVoice::$api . $url);
        curl_setopt($ch, CURLOPT_POST,           1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,     http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER,     ['Access-Token: ' . TotalVoice::$token]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $output = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        $response = new HttpResponse();
        $response->setStatusCode((int)$info['http_code']);
        $response->setContentType($info['content_type']);
        $response->setContent(json_decode($output));
        return $response;
    }
}