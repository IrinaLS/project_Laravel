<?php

declare(strict_types=1);

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
			'category_id' => ['required', 'integer'],
			'title' => ['required', 'string', 'min:5'],
			'author' => ['required', 'string', 'min:2'],
			'status' => ['required', 'string'],
			'image' => ['nullable', 'file', 'image', 'mimes:jpg,png'],
			'description' => ['nullable', 'string', 'max:1000'],
			'display' => ['nullable', 'boolean']
        ];
    }

    public function messages(): array
	{
	//	return parent::messages(); 
    return [
        'required' => 'Необходимо заполнить поле :attribute.',
        'string' => 'Поле :attribute должно быть текстовым.'
    ];
	}

	public function  attributes(): array
	{
		//return parent::attributes(); 

        return [
            'title' => 'Заголовок новости',
            'author' => 'Автор новости',
            'description' => 'Описание новости'        
        ];
	}
}