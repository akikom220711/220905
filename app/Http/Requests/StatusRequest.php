<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
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
            'status_1' => ['max:191'],
            'status_2' => ['max:191'],
            'status_3' => ['max:191'],
            'status_4' => ['max:191'],
            'status_5' => ['max:191'],
        ];
    }
}
