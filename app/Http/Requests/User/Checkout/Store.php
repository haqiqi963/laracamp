<?php

namespace App\Http\Requests\User\Checkout;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $expiredValidate = date('Y-m', time());
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.auth()->id().',id', // agar ketika sudah ada email bisa lanut
            'occupation' => 'required|string',
            'card_number' => 'required|numeric|digits_between:8,16',
            'expired' => 'required|date|date_format:Y-m|after_or_equal:'.$expiredValidate,
            'cvc' => 'required|numeric|digits:3'
        ];
    }
}
