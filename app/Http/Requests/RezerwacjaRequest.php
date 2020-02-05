<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RezerwacjaRequest extends FormRequest
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
            'datarezerwacji' => 'required',
            'kwotalaczna' => 'required',
            'dataod' => 'required',
            'datado' => 'required',
            'nrpokoju' => 'required',
            'idklienta' => 'required',
            'idstatusu' => 'required'
        ];
    }

    public function messages(){
        return [
        'datarezerwacji.required'=> 'Podaj date rezerwacji',
        'kwotalaczna.required'=> 'Podaj kwote łączną',
        'dataod.required'=> 'Podaj date przyjazdu',
        'datado.required'=> 'Podaj date odjazdu',
        'nrpokoju.required'=> 'Wprowadz numer pokoju',
        'idklienta.required'=> 'Wybierz klienta',
        'idstatusu.required'=> 'Wybierz status'
     ];
    }
}
