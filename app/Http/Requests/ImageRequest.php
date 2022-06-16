<?php

namespace App\Http\Requests;

use App\Models\Image;
use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'file' => 'required',
            'title' => 'nullable',
        ];
    }

    public function getData()
    {
        $data = $this->all() + [
            'user_id' => 1 //$this()->user()->id(),
        ];

        // return $this->only(['file', 'title']);
        if ($this->hasFile('file')) {
            $directory = Image::makeDirectory();
            $data['file'] = $this->file->store($directory);
            $data['dimension'] = Image::getDimension($data['file']);
        }
        return $data;
    }
}
