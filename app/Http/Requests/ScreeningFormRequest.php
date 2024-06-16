<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ScreeningFormRequest extends FormRequest
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

                'date' => 'required|date',
                'start_time.*' => 'required|date_format:H:i',
                'movie_id' => 'required|integer',
                'theater_id' => 'required|integer'

        ];

        return $rules;
    }

    public function messages(): array
    {
        return [

        ];
    }
}
