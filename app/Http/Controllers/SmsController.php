<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Nexmo\Laravel\Facade\Nexmo;
// use BulkSMSBD\Laravel\Facade\BulkSMSBD;
// use Iqbalhasandev\Laravel_bulksmsbd\Classes\BulkSMSBD;
use iqbalhasandev\bulksmsbd\Classes\BulkSMSBD;

class SmsController extends Controller
{
    
    public function index(Request $request)
    {
        Nexmo::message()->send(
            [ 
                'to' => '+8801799646486',
                'from'=>'sender',
                'text'=>'Text SMS'
            ]
            );
            echo "Message sent!";
           
    }
    public function sendSms()
    {
       
        // return $request;
        // Nexmo::message()->send([
        //     'to' => '88' . $request->mobile,
        //     'from'=>'sender',
        //     'text'=>'Text SMS'
        // ]);

        // Session::flash('success', 'Message sent');
        return view('user.sms');
    }
    public function Store(Request $request)
    {
        // $code=rand(1111,9999);
       $user=new User;
       $user->phone=$request->phone;
    //    $user->code=$code;
    //    $user->save();
    //    dd($code);
    $nexmo=app('Nexmo\Client');
    $numbers = User::orderBy('phone', 'ASC')->get();
    $nexmo->message()->send(
        [ 
            'to' => '+880' . (int)$request->phone,
            // 'to'=>$number,
            'from'=>'sender',
            'text'=>'hello'
        ]
        );
        // foreach($numbers as $number) {
        //     $nexmo->message()->send([
        //         'to' =>'+880' . $number,
        //         'from' => 'sender',
        //         'text' => 'Your message'
        //     ]);
        // }
    
        
        return redirect()->back();
    // }
//     public function Getverify()
//     {
//    return view('user.verify');
//     }
//     public function Postverify(Request $request)
//     {
//        $check=User::where('code',$request->code)->first
//     }

    }

    public function Message(Request $request)
    {
      $message=$request->input('message');
    //   $phone=$request->input('phone');
      $encodeMessage=urlencode($message);
    // //   $authkey='';
    // //   $senderId='';
    // //   $route=4;
    //   $postData=$request->all();
  
    //   $mobileNumber=implode('',$postData['phone']);
    // //      print_r($phone);
    // //   exit();
    // $arr=str_split($mobileNumber,'12');
    // $mobiles=implode(",",$arr);
    //      print_r($mobiles);
    //   exit();
    // $nexmo=app('Nexmo\Client');
    // $nexmo->message()->send(
    //     [ 
    //         'to' =>'+880' . (int)$request->phone,
    //         // 'to'=>$number,
    //         'from'=>'sender',
    //         'text'=>$message
    //     ]
    //     );
        // foreach($phone as $number) {
        //     $nexmo->message()->send([
        //         'to' =>'+880' . $number,
        //         'from' => 'sender',
        //         'text' => $encodeMessage
        //     ]);
        // }
    

    // $data=array(
    //     'authkey' =>$authkey,
    //     'mobiles' =>$mobiles,
    //     'message' =>$encodeMessage,
    //     'sender' =>$senderId,
    //     'route'  =>$route,
    // );
    // $url="https://rest.nexmo.com/sms/json";
    // $ch = curl_init();
    // curl_setopt_array($ch,array(
    //     CURLOPT_URL=>$url,
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_POST=>true,
    //     CURLOPT_POSTFIELDS =>$postData
    // ));
  
    
    // curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
    // curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
    // $output=curl_exec($ch);
    // if(curl_errno($ch))
    // {
    //     echo'error:' . curl_error($ch);
    // }
    // curl_close($ch);
//     // return redirect('/')->with('response','Message sent successfully');
//     $url = "http://66.45.237.70/api.php";
// $number=$request->input('phone');

// // dd($encodeMessage);
// $text="Hello Bangladesh";
// $data= array(
// // 'username'=>"01940966786",
// 'username'=>"01300847431",
// // 'password'=>"HZMW7G9E",
// 'password'=>"2EH7VAXC",
// 'number'=>$number,
// 'message'=>"FGFGFTHGGF"
// );

// $ch = curl_init(); // Initialize cURL
// curl_setopt($ch, CURLOPT_URL,$url);
// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $smsresult = curl_exec($ch);
// $p = explode("|",$smsresult);
// $sendstatus = $p[0]; 
// // dd($sendstatus );
// if($smsresult===true)
// {
//     echo "message sent successfully";
// }
// else{
//     echo "invalid";
// }
// dd($smsresult);
//   
//  return redirect()->back()->with('response','Message sent successfully');
$number=$request->input('phone');
// $number=01712345678;
// $message='this is a demo Example form Laravel bulksmsBD Package.';
BulkSMSBD::send($number,$encodeMessage);
    }
}
