<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class BookRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=> "required | min:3",
            "surname"=> "required | min:3",
            "mail"=> "required | min:3 | unique:books,mail",
            "date"=> "required | date |after:today" 
        ];
    }

    #[Override]
    public function messages()
    {
        return[
            "name.required"=>"Il campo nome è obbligatorio",
            "name.min"=>"Il campo nome deve comprendere almeno 3 caratteri",
            "surname.required"=>"Il campo cognome è obbligatorio",
            "surname.min"=>"Il campo cognome deve comprendere almeno 3 caratteri",
            "mail.required"=>"Il campo Email è obbligatorio",
            "mail.min"=>"Il campo mail deve comprendere almeno 3 caratteri",
            "mail.unique"=>"Questa mail è già stata utilizzata",
            "date.required"=>"Il campo data è obbligatorio",
            "date.after"=>"Non puoi prenotare per una data passata.",
            
        ];
    }
}
