<?php

namespace Minerva\TotalVoice\SMS;

/**
 * SMS
 *
 * Mensagem de texto para celulares
 *
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Minerva\TotalVoice\SMS
 */
class SMS
{
    /**
     * Texto que será enviado
     *
     * @var string
     */
    protected $text;

    /**
     * Número para o qual o texto será enviado
     *
     * @var string
     */
    protected $number;

    /**
     * Retorna o texto a ser enviado
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Define o texto a ser enviado
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Retorna o número de destino
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Define o número de destino
     * 
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }
}