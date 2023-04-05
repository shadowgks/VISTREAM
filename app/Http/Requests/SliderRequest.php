<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
                'picture' => 'required|image|mimes:jpeg,png,jpg,svg,gif',
                'media_id' => 'required|exists:App\Models\Media,id'
            ];
        } elseif (request()->isMethod('PUT')) {
            $rules = [
                'picture' => 'image|mimes:jpeg,png,jpg,svg,gif',
                'media_id' => 'required|exists:App\Models\Media,id'
            ];
        }
        return $rules;
    }
}
