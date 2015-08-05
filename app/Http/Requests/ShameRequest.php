<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ShameRequest extends Request
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
            'reg' => 'required|alpha_num|max:10',
            'video_id' => 'required|youtubeembeddable',
            'reason' => 'required|exists:reasons,id',
            'taken_at_date' => 'date|before:tomorrow',
        ];
    }
}
