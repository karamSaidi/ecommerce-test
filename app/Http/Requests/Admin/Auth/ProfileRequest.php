<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        // if (!$this->has('status'))
        //     $this['status'] = '0';
        return [
            'email' => 'required|email|unique:admins,email,' . $this->id,
            'name' => 'required|string|min:3|max:50',
            // 'status' => 'nullable|boolean',
            'avatar' => 'sometimes|image|mimes:png,jpg,jpeg'
        ];
    }
}
