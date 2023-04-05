<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActorRequest extends FormRequest
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
            'fullname' => 'required|min:2|string|unique',
            'imdb_path' => 'nullable|string|min:4',
            'date_birthday' => 'required',
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
