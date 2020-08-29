<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDiscussionRequest extends FormRequest
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
            'title' => 'required|unique:discussions',
            'content' => 'required',
            'channel' => 'required',
        ];
    }

    public function messages()

    {


        return [
            'title.required' => 'title required',
            'title.unique'      => 'title already exists',
            'content.required' => 'content required',
            'channel.required' => 'required',
        ];
    }
}
