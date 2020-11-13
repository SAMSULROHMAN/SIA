<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    protected $rules = [

    ];
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return $this->rules;
    }
}
