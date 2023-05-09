<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateNotesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $method = $this->method();

        if($method == 'PUT'){
            return [
                'id' => ['required'],
                'authorID' => ['required'],
                'categoryID' => ['required'],
                'title' => ['required'],
                'content' => ['required'],
                'dateTime' => ['required']
            ];
        }else{
            return [
                'id' => ['sometimes', 'required'],
                'authorID' => ['sometimes', 'required'],
                'categoryID' => ['sometimes', 'required'],
                'title' => ['sometimes', 'required'],
                'content' => ['sometimes', 'required'],
                'dateTime' => ['sometimes', 'required']
            ];
        }
    }

    protected function prepareForValidation() {
        $this->merge([
            'author_id' => $this->authorID,
            'category_id' => $this->categoryID,
            'date_time' => $this->dateTime
        ]);
    }
}
