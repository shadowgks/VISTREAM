<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MediaRequest extends FormRequest
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
            'name' => 'required|min:2|max:255',
            'duration' => 'required|min:0',
            'link_media' => 'required|min:8',
            'link_imdb' => 'required|min:8',
            'picture' => 'required',
            'description' => 'required|min:4',
            'released_year' => 'required',
            'director' => 'min:2',
            'production' => 'min:2',
            'trailer' => 'min:8',
            'status' => 'required',
            'genres' => 'required|exists:App\Models\Genre,id',
            'actors' => 'required|exists:App\Models\Actor,id',
            'country_id' => 'required|exists:App\Models\Country,id',
            'quality_id' => 'required|exists:App\Models\TypeQuality,id',
            'type_id' => 'required|exists:App\Models\Type,id',
        ];
    }
}
