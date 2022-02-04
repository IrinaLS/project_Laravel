<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
    public function rules()
    {
        return [
			'title' => ['required', 'string', 'min:5'],
			'description' => ['nullable', 'string', 'max:1000']	
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
            'title' => 'Заголовок категории',
            'description' => 'Описание категории'        
        ];
	}
}
