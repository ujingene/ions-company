<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'name'       => 'required|string',
            'email'      => 'required|email',
            'website'       => 'required|url',
            'image'          => 'dimensions:min_width=100,min_height=100'
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'email.required' => 'Email is required!',
            'website.required' => 'Website is required!',
            'website.url' => 'Website should be a url!',
            'image.dimensions' => 'Logo (minimum 100×100)'
        ];
    }
}
