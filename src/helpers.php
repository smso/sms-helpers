<?php

use Instasent\SMSCounter\SMSCounter;

if (! function_exists('smsLength')) {
    /**
     * @param $body
     * @return int
     */
    function smsLength($body)
    {
        $smsCounter = new SMSCounter();
        return $smsCounter->count($body)->messages;
    }

}

if (! function_exists('smsEncoding')) {
    /**
     * @param $body
     * @return string (GSM_7BIT|GSM_7BIT_EX|UTF16)
     */
    function smsEncoding($body)
    {
        $smsCounter = new SMSCounter();
        return $smsCounter->count($body)->encoding;
    }

}

if (! function_exists('smsCleaner')) {
    /**
     * @param $body
     * @return string
     */
    function smsCleaner($body)
    {
        $smsCounter = new SMSCounter();
        return $smsCounter->sanitizeToGSM($body);
    }

}


