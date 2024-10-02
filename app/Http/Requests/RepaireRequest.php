<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepaireRequest extends FormRequest
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
            'name'=>'required|max:30',
            'phone'=>'required|max:15',
            'car'=>'required',
            'comment'=>'required|min:6|max:100'
        ];
    }
}
