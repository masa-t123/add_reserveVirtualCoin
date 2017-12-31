<?php
namespace App\Library\Common;

class CurlExec
{
    private static $ch;

    public static function get($url) {
        self::$ch = curl_init();
        $options = [
            CURLOPT_URL            => $url,
            CURLOPT_HEADER         => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
        ];
        curl_setopt_array(self::$ch, $options);
        $data = curl_exec(self::$ch);
        $responseDto = self::makeResponseDto($data);
        curl_close(self::$ch);

        return $responseDto;
    }

    public static function post($url, $header, $postdata) {
        self::$ch = curl_init();
        $options = [
            CURLOPT_URL            => $url,
            CURLOPT_HEADER         => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $postdata,
            CURLOPT_HTTPHEADER     => $header,
        ];
        curl_setopt_array(self::$ch, $options);
        $data = curl_exec(self::$ch);
        $responseDto = self::makeResponseDto($data);
        curl_close(self::$ch);

        return $responseDto;
    }

    private static function makeResponseDto($response)
    {
        $dto = new CurlExecResponseDto();
        $headerSize = curl_getinfo(self::$ch, CURLINFO_HEADER_SIZE);
        $dto->setHeader(substr($response, 0, $headerSize));
        $dto->setBody(json_decode(substr($response, $headerSize), true));
        $dto->setCurlInfo(curl_getinfo(self::$ch));
        $dto->setStatusCode(curl_getinfo(self::$ch)['http_code']);
        $dto->setIsSuccess((200 <= $dto->getStatusCode() && $dto->getStatusCode() < 300) ? true : false);

        return $dto;


    }
}