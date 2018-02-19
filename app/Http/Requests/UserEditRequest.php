<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
    public function messages()
    {
        return [
            'nome.required' => 'Preencha o campo nome',
            'nome.max' => 'O nome deve conter menos de 50 caracteres',
            'sobrenome.required' => 'Preencha o campo sobrenome',
            'sobrenome.max' => 'O sobrenome deve conter menos de 50 caracteres',
            'email.required' => 'Preencha o campo email',
            'email.email' => 'Formato de email não reconhecido',
            'email.unique' => 'Digite um email não cadastrado',
            'email.max' => 'O email deve conter menos de 100 caracteres',
            'cpf.required' => 'Preencha o campo cpf',
            'nascimento.required' => 'Preencha o campo nascimento',
            'nascimento.date' => 'O campo nascimento deve ser uma data',
            'ddd.numeric' => 'O ddd deve ser numérico',

        ];
    }

    public function rules()
    {
        return [
            'nome' => 'required | max:50',
            'sobrenome' => 'required | max: 50',
            'email' => 'unique:usuarios,email,'.$this->id,
            'cpf' => 'required',
            'ddd' => 'nullable | numeric',
            'nascimento' => 'required | date',
        ];
    }
}
