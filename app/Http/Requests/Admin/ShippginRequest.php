<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ShippginRequest extends FormRequest
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
        if (!$this->has('status'))
            $this['status'] = '0';
        return [
            'id' => 'required|exists:settings',
            'plain_value' => 'nullable|numeric',
            'status' => 'nullable|boolean',
            'value' => 'required|string',
        ];
    }
}
