<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PakatDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'paket_id'=>'required|unique:table,column,except,id',
        ];
    }
}
