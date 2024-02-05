<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => "required|min:4",
            'price' => "required|numeric",
            'brand' => "required",
            'img' => "required|image",
        ];
    }

    public function messages() {
        return [
             'name.required' => "compilare il nome dell articolo",
             'name.min' => "Att
             enz
             ione il nome deve essere almeno di 4
             caratteri",
             'price.required' => "Inserire il prezzo",
             'price.numeric' => "la sezione prezzo accetta solo numeri",
             'brand.required' => "inserire la marca",
             'img.required' => "l'immagine è obbligatoria",
             'img.image' => "l immagine deve essere del formato ",
        ];
     
    }
}
