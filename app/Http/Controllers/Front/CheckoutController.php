<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment;
use function Livewire\str;

class CheckoutController extends Controller
{
    public function index(){
        $orderData=session()->get('ShoppingCart');
        $updateData=session()->get('UpdateShoppingCart');
        return view('checkout',compact('orderData','updateData'));
    }

    public function storeOrder(Request $request){

//        $detailOrder=session()->get('ShoppingCart');
//        $updateDetail=session()->get('UpdateShoppingCart');
//
//        $discount_code_use=session()->get('discount_code_use');
//        $name=str($detailOrder[0]['name']);
//        $orderID=str($detailOrder[0]['orderID']);
//        $userID=Auth()->id();;
//        $qty=str($updateDetail[0]['quantity']);
//        $amount=intval($updateDetail[0]['totalAmount']);
//        $attr=$detailOrder[0]['attributes'];
//        $description=str($updateDetail[0]['description']);
//        $order=Order::query()->create([
//            'title'=>$name,
//            'orderID'=>$orderID,
//            'user_id'=>$userID,
//            'quantity'=>$qty,
//            'amount'=>$amount,
//            'details'=>$attr,
//            'address'=>$request['address'],
//            'post_code'=>$request['post_code'],
//            'description'=>$description,
//            'discount_code_used'=>$discount_code_use,
//            'notification'=>1
//
//        ]);
          $order=Order::where('id',10)->first();
          $invoice=(new  Invoice)->amount($order->amount);
          $d=Payment::purchase($invoice,function ($driver,$transactionId)
          use($order){$order->update(['transaction_id'=>$transactionId]);}
          )->pay()->render();


//        $data = array("merchant_id" => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
//            "amount" => $amount,
//            "callback_url" => 'http://127.0.0.1:8000/payment-callback',
//            "description" => "خرید تست",
//            "metadata" => [ "email" => "info@email.com","mobile"=>"09121234567"],
//        );
//        $jsonData = json_encode($data);
//        $ch = curl_init('https://sandbox.zarinpal.com/pg/v4/payment/request.json');
//        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
//        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//            'Content-Type: application/json',
//            'Content-Length: ' . strlen($jsonData)
//        ));
//
//        $result = curl_exec($ch);
//        $err = curl_error($ch);
//        $result = json_decode($result, true, JSON_PRETTY_PRINT);
//        curl_close($ch);
//
//
//
//        if ($err) {
//            echo "cURL Error #:" . $err;
//        } else {
//            if (empty($result['errors'])) {
//                if ($result['data']['code'] == 100) {
//                    header('Location: https://sandbox.zarinpal.com/pg/StartPay/' . $result['data']["authority"]);
//                }
//            } else {
//                echo'Error Code: ' . $result['errors']['code'];
//                echo'message: ' .  $result['errors']['message'];
//
//            }
//        }



    }
}
