<?php

class mbomber002
{
    private $Number;
    public function __construct($NUM)
    {
        $this->$Number = $NUM;
    }

    public function s002($lurl, $datas = [], $headers = [],$type=1)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $lurl);

        $headers[] = 'Content-Type:application/json';

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if($type==1)
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datas, true));
        else
        curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        return curl_exec($ch);
    }
    public function sg002($lurl, $headers = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $lurl);
        $headers[] = 'Content-Type:application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);

        return curl_exec($ch);
    }

}