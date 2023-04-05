<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SerieRequest extends FormRequest
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
            'media_id' => 'required|exists:App\Models\Media,id',
            'num_season' => 'required|exists:App\Models\NumSeason,id',
            'num_ep' => 'required',
            'url' => 'required',
        ];
    }
}
