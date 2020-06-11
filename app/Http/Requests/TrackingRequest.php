<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrackingRequest extends FormRequest
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
            'training_group' =>     ['required', 'string', 'max:255', ],
            'year' =>               ['required', 'min:0', 'max:2020', 'integer'],
            'full_name_student' =>  ['required', 'max:255', 'string'],
            'full_name_teacher' =>  ['required', 'max:255', 'string'],
            'topic' =>              ['required', 'max:255', 'string'],
            'mark' =>               ['required', 'min:3', 'max:5', 'integer'],
        ];
    }
}
