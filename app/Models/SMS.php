<?php


namespace App\Models;


class SMS
{
    public $UserName;
    public $Password;
    public $Footer;
    function __construct($username,$password){
        $this->UserName=$username;
        $this->Password=$password;
    }

    function Sendsms($Number,$message,$rec,$sms){
        $Url="https://RayganSMS.com/SendMessageWithPost.ashx";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,$Url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            http_build_query(array('UserName' => $this->UserName,
                'Password'=>$this->Password,
                'PhoneNumber'=>$Number,
                'MessageBody'=>$message,
                'RecNumber'=>$rec,
                'Smsclass'=>$sms)));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close ($ch);

        return $server_output;

    }
}
