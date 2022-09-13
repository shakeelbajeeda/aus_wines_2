<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAusWineRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'wine_name' => 'required|string',
            'wine_type' => 'required|string',
            'wine_qty'  => 'required',
            'wine_price'=> 'required',
            'region'    => 'required|string'
        ];
    }
}
