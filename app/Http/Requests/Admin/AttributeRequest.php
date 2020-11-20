<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AttributeRequest extends FormRequest
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
            'name' => 'required|min:3|max:200|unique:attribute_translations,name,'.$this->id.',attribute_id',
        ];
    }

    public function messages()
    {
        return [
            '*.required' => __('general.validate_required'),
            '*.min' => __('general.validate_min') . '3',
            '*.max' => __('general.validate_max') . '30',
            // '*.unique' => __('general.validate_unique'),

        ];
    }
}
