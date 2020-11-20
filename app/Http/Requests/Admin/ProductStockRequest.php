<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductStockRequest extends FormRequest
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
        if (!$this->has('manage_stock'))
            $this['manage_stock'] = '0';
        if (!$this->has('in_stock'))
            $this['in_stock'] = '0';
        return [
            'product_id' => 'required|numeric|exists:products,id',
            'sku' => 'nullable|min:3|max:10',
            'manage_stock' => 'boolean',
            // 'qty' => 'required_if:manage_stock,==,1|numeric|min:0',
            'qty' => 'required_if:manage_stock,1|numeric|min:0',
            'in_stock' => 'required|boolean',
        ];
    }
}
