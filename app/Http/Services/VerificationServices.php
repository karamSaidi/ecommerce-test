<?php

namespace App\Http\Services;

use App\Models\UserVerification;

class VerificationServices
{
    public function set_new_user_mobile_code($user_id)
    {
        UserVerification::where('user_id', $user_id)->delete();
        $code = random_int(10000, 99999);
        //$verify_code =
        UserVerification::create(['user_id' => $user_id, 'code' => $code]);
        return $code;
    } // //setUserMobileCodeVerification


    public function getSMSVerifyMessageByAppName($code)
    {
        $message = " your verification code  account";

        return $code . $message;
    }



}// ./VerificationServices
