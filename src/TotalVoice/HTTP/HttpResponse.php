<?php

namespace Minerva\TotalVoice\HTTP;

/**
 * Response
 * 
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Minerva\TotalVoice\HTTP
 */
class HttpResponse
{
    /**
     * @var int
     */
    protected $statusCode;

    /**
     * @var string
     */
    protected $contentType;

    /**
     * @var array
     */
    protected $content;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * @return array
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param array $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}