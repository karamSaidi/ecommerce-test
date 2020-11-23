<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckUserCodeVerification implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(auth()->user()->verificationCode()->latest('id')->first()->code == $value)
            return true;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('user.error_verify_code');
    }
}
