<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PayamResan;
use App\Models\SMS;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;
use Trez\RayganSms\Facades\RayganSms;


class AuthController extends Controller
{
    public function register_view(){

        return view('Auth/register');
    }

    public function login_view(){

        return view('Auth/login');
    }

    public function verify(){


        return view('Auth/verify_phone');

    }

    public function register(Request $request){
        $this->validate($request,[
            'name'=>'required|max:30',
            'phone'=>'required|regex:/(09)[0-9]{9}/|digits:11|numeric|unique:users',
        ],[
            'name.required'=>'لطفا نام خود را وارد کنید',
            'name.max'=>'تعداد ارقام وارد شده باید 11 کاراکتر باشد',
            'phone.required'=>'لطفا شماره تلفن خود را وارد کنید',
            'phone.regex'=>'لطفا یک شماره همراه معتبر را وارد کنید',
            'phone.digits'=>'تعداد ارقام باید 11 کاراکتر باشد',
            'phone.numeric'=>'تنها مجاز به وارد کردن ارقام هستید ',
            'phone.unique'=>'کاربری با چنین شماره ای وجود دارد ',
        ]);

        $SendSMS= new PayamResan();

        $name=$request->name;
        $num=rand(1,100);
        $num2=rand(100,480);


        $user=user::create([
            'name'=>$request->name,
            'email'=>null,
            'password'=>null,
            'phone'=>$request->phone,
            'level'=>'user',

        ]);

        $verify_code=rand(1000,9999);
        $msg=$verify_code."کد ورود : ";
        /*$SendSMS->Sendsms("5000299558660",$msg,$request->phone,1);*/
        $SendSMS->PrepareSendMessage($request->phone,$msg);

        /*$request->session()->put('user_id',$user->id);
        $request->session()->put('verify_code',$verify_code);*/
        $request->session()->push('verify',['user_id'=>$user->id ,'verify_code'=>$verify_code]);
        session()->flash('verify_code','کد عبور تا لحظاتی دیگر به شماره همراهتان ارسال خواهد شد');
        return redirect(route('verify.view'));
    }

    public function  test(){

        $SendSMS= new PayamResan();
        $SendSMS->PrepareSendMessage('09360281964','سلام');

    }

    public function doverify(Request $request){


        /*
         *
                $verify_code=$request->session()->get('verify_code');
                $user_id=$request->session()->get('user_id');*/
        $VerifySession=$request->session()->get('verify');

        $user_id=$VerifySession[0]['user_id'];
        $verify_code=$VerifySession[0]['verify_code'];
        $user=user::where('id',$user_id)->first();
        $input=$request->code;


        if ($input==$verify_code){

            auth()->login($user);
            $request->session()->forget('verify');
            $request->Session()->flash('verify_successful','شما با موفقیت وارد شدید ');
            if ($user['level']=='admin'){
                return redirect(route('home'));
            }else{

                    return redirect(url('/'));
            }

        }else{

            Session()->flash('verify_unsuccessful','کد وارد شده با کد ارسال شده ما تطابق ندارد لطفا مجددا امتحان کنید');

            return back();
        }
    }
    public function login(Request $request){

        $this->validate($request,[
            'phone'=>'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
        ],[

            'phone.required'=>'لطفا شماره تلفن خود را وارد کنید',
            'phone.regex'=>'لطفا یک شماره همراه معتبر را وارد کنید',
            'phone.digits'=>'تعداد ارقام باید 11 کاراکتر باشد',
            'phone.numeric'=>'تنها مجاز به وارد کردن ارقام هستید ',

        ]);
        $SendSMS= new PayamResan();
        $verify_code=rand(1000,9999);
        $msg=" کد ورود : $verify_code";
        /*$SendSMS->Sendsms("5000299558660",$msg,$request->phone,1);*/
        $SendSMS->PrepareSendMessage($request->phone,$msg);
        $user=user::where('phone',$request->phone)->first();
        if ($user==null){
            session()->flash('verify_code_unsuccess','چنین شماره ای در سیستم ثبت نشده ');
            return back();
        }else{
            $request->session()->push('verify',['user_id'=>$user->id ,'verify_code'=>$verify_code]);

            session()->flash('verify_code','کد عبور تا لحظاتی دیگر به شماره همراهتان ارسال خواهد شد');
            return redirect(route('verify.view'));
        }

    }

    public function SendCode(Request $request){
        if (isset($_SESSION['verify'])){

            $SendSMS= new PayamResan();
            $VerifySession=$request->session()->get('verify');
            $verify_code=$VerifySession[0]['verify_code'];
            $user_id=$VerifySession[0]['user_id'];
            $msg=$verify_code."کد ورود : ";
            $user=user::where('id',$user_id)->first();
            /*$SendSMS->Sendsms("5000299558660",$msg,$user->phone,1);*/
            $SendSMS->PrepareSendMessage($user->phone,$msg);
            Session()->flash('send_code','کد احراز مجددا برای شما ارسال شد');
            return back();



        }
    }
}
