<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreEmployerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:employers,email',
            'tel' => 'required|min:10|max:15|unique:employers,phone_number',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url' => 'required|url',
            'location' => 'required',
        ];
    }
}
