<?php

namespace App\Http\Requests\SP;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSPRequest extends FormRequest
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
    public function rules()
    {
        $id = $this->route('organization');
        return [
            "name" => ['required'],
            "mobile" => ['required',],
            "email" => ['required', 'unique:s_p_s,email,' . $id . ',id,deleted_at,NULL'],
            "vat_id" => ['nullable','integer'],
            "address" => ['nullable'],
            "invoice_address" => ['nullable'],
            "country" => ['nullable'],
            "language_id" => ['nullable','exists:languages,id'],
            "free_trial" => ['nullable'],
            "subscription" => ['nullable'],
        ];
    }
}
