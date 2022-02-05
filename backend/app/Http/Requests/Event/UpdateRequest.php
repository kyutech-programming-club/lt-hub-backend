<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            //
            'title' => ['required', 'string', 'max:32'],
            'description' => ['nullable', 'string'],
            'startTime' => ['required', 'string', 'max:11'],
            'endTime' => ['required', 'string', 'max:11'],
            'location' => ['nullable', 'string'],
            'state' => ['required', 'string', 'in:private,limited,public'],
        ];
    }
}
