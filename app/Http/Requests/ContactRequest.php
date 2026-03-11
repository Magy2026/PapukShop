<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
      'name'=>'required|min:2|max:20',
      'email'=>['required','min:5', 'max:25','email'],
      'subject'=>'required|min:2|max:50',
      'message'=>'required|min:20|max:2000',
        ];
    }

     public function messages():array
     {
        return[
        'name.required'=>'խնդրում եմ գրել ձեր անունը',
        'email.required'=>'խնդրում եմ գրեք ձեր էլեկտրոնային հասցեն',
        'subject.required'=>'խնդրում եմ լրացնել թեմա դաշտը',
        'message.required'=>'խնդրում եմ գրել նամակ',
        'name.min'=>'խնդրեմ գրեք ձեր ճիշտ անունը, այն չի կարող լինել երկու տառից պակաս',
        'name.max'=>'խնդրեմ գրեք ձեր անունը, այն չի կարող լինել այդքան երկար',
        'message.min'=>'խնդրում եմ գրել ավելի երկար նամակ',

        ];
     }
}
