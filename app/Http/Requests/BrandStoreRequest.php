<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandStoreRequest extends FormRequest
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
            'name' => ['required'],
            'intro_en' => ['required'],
            'intro_ru' => ['string'],
            'intro_mn' => ['string'],
            'logo' => ['required', 'image'],
            'slider_image' => ['image'],
            'start_year' => ['required'],
            'company_id' => ['required'],
        ];
    }
}
