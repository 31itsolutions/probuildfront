<?php 

namespace App\Library;


class CommonLib {
    
    
    
public static function send_sms_by_curl(array $data)
    {
        // create a new cURL resource
        $ch = curl_init();

        // set URL and other appropriate options
       //  http://my.smsmv.com/smsAPI?sendsms&apikey=Your_API_KEY&apitoken=YOUR_API_TOKEN&type=sms&from=SENDERID&to=123456&text=My+first+text&scheduledate=2022-02-16 11:25:41&route=0

         $url = "http://my.smsmv.com/smsAPI?sendsms&apikey=K8HSnMMPLJIhIPOQ0aWXEmBY9Y5vpsa6&apitoken=tkzD1644577119&type=sms&from=MNXMV-BRO&to=".$data['mobile'].'&text=Your%20otp%20is%20'.$data['otp'];
       
        $test = curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        // grab URL and pass it to the browser
        curl_exec($ch);

        $err = curl_error($ch);
        //dd($response);

        // close cURL resource, and free up system resources
        curl_close($ch);

        if ($err) {
            return false;
        } else {
            return true;
        }
    }
}


