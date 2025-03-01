<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'company_name' => 'required|string|min:3',
            'position' => 'required|string|min:3',
            'responsibilities' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'is_current_position' => 'required|boolean',
        ];
    }
}
