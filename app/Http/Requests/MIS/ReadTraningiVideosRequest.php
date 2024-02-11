<?php

namespace App\Http\Requests\MIS;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ReadTraningiVideosRequest extends FormRequest
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
        return [
            'data1' => 'required'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        return response()->json([
            'status' =>  'error',
            'message' => 'Oops, Please complete the form',
            'payload' => null
        ],429)->throwResponse();
    }
}
