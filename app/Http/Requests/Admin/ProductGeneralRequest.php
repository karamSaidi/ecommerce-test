<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductGeneralRequest extends FormRequest
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
            'description' => 'required|string|min:30',
            'short_description' => 'nullable|string|min:20',
            'brand_id' => 'nullable|numeric|exists:brands,id',
            'categories' => 'required|array|min:1',
            'categories.*' => 'required|numeric|exists:categories,id',
            'tags' => 'required|array',
            'tags.*' => 'required|numeric|exists:tags,id',
        ];
    }
}
