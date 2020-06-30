<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'data' => 'required|date|after:now',
            'trattamento' => 'required|in:Carie,Pulizia,Dentiera'
        ];
    }
}
