<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class formArticle extends FormRequest
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
          'pavadinimas' => ['required', 'min:3', 'max:255'],
          'tekstas' => ['required', 'min:3', 'max:500'],
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Nuotrauką reikia pasirinkti',
            'image.file' => 'Nuotrauką nepavyko įkelti',
            'image.filled' => 'Nuotrauką nepavyko įkelti',
            'image.image' => 'Negalima pasirinkti failų, tik nuotraukas',
            'image.mimes' => 'Nuotrauka gali būti tik jpeg,png,jpg,gif,svg',
            'image.max' => 'Nuotrauka turi būti nedidesnė negu 2000 bitų',
            'pavadinimas.required' => 'Pavadinimą reikia užpildyti',
            'pavadinimas.min' => 'Pavadinimas turi būti iš daugiau negu trijų simbolių',
            'pavadinimas.max' => 'Pavadinimas turi būti nedaugiau negu 255 simbolių',
            'tekstas.required' => 'Tekstą reikia užpildyti',
            'tekstas.min' => 'Tekstas turi būti iš daugiau negu trijų simbolių',
            'tekstas.max' => 'Tekstas turi būti nedaugiau negu 500 simbolių',
             ];
    }
}
