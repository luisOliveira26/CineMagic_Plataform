<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ConfigurationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'ticket_price' => 'required|numeric|gte:0',
            'registered_customer_ticket_discount' => 'required|numeric|min:0|lte:ticket_price'
        ];

        return $rules;
    }

    public function messages(): array
    {
        return [

        ];
    }
}
