<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class PasswordChangeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'old_password' => ['required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, auth()->user()->password)) {
                    $fail(__('auth.password_invalid'));
                }
            },],
            'new_password' => 'required|min:7|max:30|confirmed'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => __('general.validate_required'),
            '*.min' => __('general.validate_min') . '7',
            '*.max' => __('general.validate_max') . '30',
            '*.confirmed' => __('general.validate_confirmed'),
        ];
    }
}
