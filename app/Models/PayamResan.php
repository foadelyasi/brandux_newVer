<?php


namespace App\Models;




use SoapClient;

class PayamResan
{



    public function PrepareSendMessage($recipientNumber,$message)
    {


        $client = new SoapClient('https://www.payam-resan.com/ws/v2/ws.asmx?WSDL');

        $parameters['Username'] = "09360281964";
        $parameters['PassWord'] = "kaliceh1899";
        $parameters['SenderNumber'] = "30002190000678";
        $parameters['RecipientNumbers'] = array($recipientNumber);
        $parameters['MessageBodie'] =  $message;
        $parameters['AllowedDelay'] =  0;
        $parameters['Type'] =  1;


        $res = $client->SendMessage($parameters);
        foreach ($res->SendMessageResult as $r)
            echo $r;
    }



}
