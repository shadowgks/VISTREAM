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
        if (request()->isMethod('post')) {
            $rules = [
                'name' => 'required|string|min:2|max:255',
                'duration' => 'required|string|min:0',
                'link_media' => 'required|string|min:8',
                'link_imdb' => 'required|string|min:8',
                'picture' => 'required|image|mimes:jpeg,png,jpg',
                'description' => 'required|string|min:4',
                'released_year' => 'required',
                'director' => 'string|min:2',
                'production' => 'string|min:2',
                'trailer' => 'string|min:8',
                'status' => 'required',
                'genres' => 'required|exists:App\Models\Genre,id',
                'actors' => 'required|exists:App\Models\Actor,id',
                'country_id' => 'required|exists:App\Models\Country,id',
                'quality_id' => 'required|exists:App\Models\TypeQuality,id',
                'type_id' => 'required|exists:App\Models\Type,id'
            ];
        } elseif (request()->isMethod('PUT')) {
            $rules = [
                'name' => 'required|string|min:2|max:255',
                'duration' => 'required|string|min:0',
                'link_media' => 'required|string|min:8',
                'link_imdb' => 'required|string|min:8',
                'picture' => 'image|mimes:jpeg,png,jpg',
                'description' => 'required|string|min:4',
                'released_year' => 'required',
                'director' => 'string|min:2',
                'production' => 'string|min:2',
                'trailer' => 'string|min:8',
                'status' => 'required',
                'genres' => 'required|exists:App\Models\Genre,id',
                'actors' => 'required|exists:App\Models\Actor,id',
                'country_id' => 'required|exists:App\Models\Country,id',
                'quality_id' => 'required|exists:App\Models\TypeQuality,id',
                'type_id' => 'required|exists:App\Models\Type,id'
            ];
        }
        return $rules;
    }
}
