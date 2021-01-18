<?php

namespace Modules\Web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'receiver_name' => 'required',
            'email' => 'required|email|max:255',
            'receiver_phone_number' => 'required|regex:/^0(\d{9})$/i',
            'province' => 'required'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'receiver_name.required' => 'Họ tên chưa được nhập',
            'email.required' => 'Email chưa được nhập',
            'email.email' => 'Email chưa đúng định dạng',
            'email.max' => 'Email quá dài',
            'receiver_phone_number.required' => 'Số điện thoại chưa được nhập',
            'receiver_phone_number.regex' => 'Số điện thoại không đúng định dạng',
            'province.required' => 'Thành phố chưa được nhập',
            'add.required' => 'Địa chỉ chưa được nhập'
        ];
    }
}
