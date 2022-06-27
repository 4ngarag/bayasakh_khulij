<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
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
            'name_en' => ['required'],
            'name_ru' => ['string'],
            'name_mn' => ['string'],
            'intro_en' => ['required'],
            'intro_ru' => ['string'],
            'intro_mn' => ['string'],
            'logo_en' => ['required', 'image'],
            'logo_ru' => ['image'],
            'logo_mn' => ['image'],
            'direction_en' => ['required'],
            'direction_ru' => ['string'],
            'direction_mn' => ['string'],
            'start_year' => ['required'],
            'company_size' => ['string'],
            'phone' => ['string'],
            'email' => ['string'],
            'facebook' => ['string'],
        ];
    }
}
