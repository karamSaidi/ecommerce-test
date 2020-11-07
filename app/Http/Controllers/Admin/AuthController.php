<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Http\Requests\Admin\Auth\PasswordChangeRequest;
use App\Http\Requests\Admin\Auth\ProfileRequest;
use App\Jobs\AvatarResizeJob;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    } // ./login

    public function do_login(LoginRequest $request)
    {
        $cert = $request->only('email', 'password');

        $remember_me = request()->has('remember_me') ? true : false;

        if (Auth::guard('admin')->attempt($cert, $remember_me)) {
            return redirect(route('admin.dashboard'))
                ->with(['success' => __('auth.login_success')]);
        }

        return redirect()->route('admin.login')
            ->with(['error' => __('auth.login_failed')]);
    } // ./do_login

    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin.login');
    } // ./logut


    public function profile()
    {
        $user = auth()->user();
        return view('admin.auth.profile', compact('user'));
    } // ./profile
    public function profile_update(ProfileRequest $request)
    {
        try {
            $data = $request->only('name');
            if ($request->has('avatar')) {
                // delete old avatar
                if (auth()->user()->avatar)
                    delete_storage_file('admin', auth()->user()->avatar);

                $data['avatar'] = upload_file($request->avatar, 'admin')['file_path'];
                // resize avatar in background
                dispatch(new AvatarResizeJob('admin', $data['avatar']));
            }
            auth()->user()->update($data);
            return redirect()->route('admin.profile')
                ->with(['success' => __('general.updated_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.profile')
                ->with(['error' => __('general.error_happen')]);
        }
    } // ./profile_update

    public function password_change(PasswordChangeRequest $request)
    {
        try {
            auth()->user()->update(['password' => bcrypt($request->new_password)]);
            return redirect()->route('admin.profile')
                ->with(['success' => __('general.updated_success')]);
        } catch (\Exception $ex) {
            dd($ex);
            return redirect()->route('admin.profile')
                ->with(['error' => __('general.error_happen')]);
        }
    } // ./password_change

}// ./AuthController
