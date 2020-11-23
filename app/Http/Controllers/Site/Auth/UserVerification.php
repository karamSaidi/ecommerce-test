<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\VerifyRequest;
use Illuminate\Support\Facades\DB;

class UserVerification extends Controller
{

    public function show_verify()
    {
        return view('auth.verify_mobile');
    }

    public function confirm_verify(VerifyRequest $request)
    {
        try {
            // validateion and confirm verify code in request and it's rule
            DB::beginTransaction();
            // set verify_at and remove code from db
            auth()->user()->update(['verified_at' => now()]);
            auth()->user()->verificationCode()->delete();

            DB::commit();
            return redirect()->route('home');

        } catch (\Exception $ex) {
            DB::rollback();
            dd($ex);
            return redirect()->route('user.verify_code')
                ->with(['error' => __('general.error_happen')]);
        }
    }
}
