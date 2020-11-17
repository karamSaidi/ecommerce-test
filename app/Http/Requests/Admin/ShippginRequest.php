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


    public function messages()
    {
        return [
            'id.exists' => __('admin/settings/shipping.exists'),
            '*.number' => __('general.validate_number'),
            '*.boolean' => __('general.validate_boolean'),
            '*.string' => __('general.validate_string'),
            '*.required' => __('general.validate_required'),
        ];
    }
}
