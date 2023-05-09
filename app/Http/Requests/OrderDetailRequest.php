<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderDetailRequest extends FormRequest
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
            'store_id' => 'required',
            'customer_id' => 'required',
            'shipping_id' => 'required',
            'payment_id' => 'required',
            'ppn' => 'required',
            'discount' => 'required',
            'total' => 'required',
        ];
    }
}
