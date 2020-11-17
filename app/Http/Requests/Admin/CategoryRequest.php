<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|min:3|max:200',
            'status' => 'nullable|boolean',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg',
            'parent_id' => 'nullable|numeric|exists:categories,id'
        ];
    }

    public function messages()
    {
        return [
            '*.required' => __('general.validate_required'),
            '*.min' => __('general.validate_min') . '3',
            '*.max' => __('general.validate_max') . '30',
            '*.image' => __('general.validate_image'),
            '*.mimes' => __('general.validate_mimes'),
        ];
    }
}
