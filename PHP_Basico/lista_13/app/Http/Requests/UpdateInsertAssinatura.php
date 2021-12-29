<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInsertAssinatura extends FormRequest
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

    public function rules()
    {
        return [
            'qtdCaracteresAssinatura' => 'required|numeric|min:1|max:200',
            'assinaturaPadrao' => 'required|string|min:10|max:200',
            'qtdVezesAssinaturaUsada' => 'required|numeric|min:1|max:99',
        ];
    }

    public function messages()
    {
        return [
            'qtdCaracteresAssinatura.required' => 'A quantidade de caracteres é obrigatória.',
            'qtdCaracteresAssinatura.numeric' => 'A quantidade de caracteres deve ser um número.',
            'qtdCaracteresAssinatura.min' => 'A quantidade de caracteres deve ser maior que 1.',
            'qtdCaracteresAssinatura.max' => 'A quantidade de caracteres deve ser menor que 200.',
            'assinaturaPadrao.required' => 'A assinatura padrão é obrigatória.',
            'assinaturaPadrao.string' => 'A assinatura padrão deve ser uma string.',
            'assinaturaPadrao.min' => 'A assinatura padrão deve ter no mínimo 10 caracteres.',
            'assinaturaPadrao.max' => 'A assinatura padrão deve ter no máximo 200 caracteres.',
            'qtdVezesAssinaturaUsada.required' => 'O número de vezes em que a Assinatura foi usada é obrigatória.',
            'qtdVezesAssinaturaUsada.numeric' => 'O número de vezes em que a Assinatura foi usada deve ser um número.',
            'qtdVezesAssinaturaUsada.min' => 'O número de vezes em que a Assinatura foi usada deve ser maior que 1.',
            'qtdVezesAssinaturaUsada.max' => 'O número de vezes em que a Assinatura foi usada deve ser menor que 99.',
        ];
    }
}
