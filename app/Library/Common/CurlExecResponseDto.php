<?php
namespace App\Library\Common;

class CurlExecResponseDto
{
    protected $header;
    protected $body;
    protected $curlInfo;
    protected $statusCode;
    protected $isSuccess;

    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setCurlInfo($curlInfo)
    {
        $this->curlInfo = $curlInfo;
        return $this;
    }

    public function getCurlInfo()
    {
        return $this->curlInfo;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;
        return $this;
    }

    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

}
