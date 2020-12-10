<?php

namespace Modules\Admin\Http\Requests;

use App\Rules\ProductPriceRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductCRUDRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:250',
            'image' => 'required|url',
            'value' => 'required|numeric|min:0',
            'price' => ['required', 'numeric', 'min:0', new ProductPriceRule($this->all())],
            'quantity' => 'required|numeric|min:0'
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

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => "Tiêu đề chưa được nhập",
            'title.max' => "Tiêu đề quá dài",
            'image.required' => "Hình ảnh minh họa chưa được nhập",
            'image.url' => "Link ảnh không hợp lệ",
            'value.required' => "Giá gốc chưa được nhập",
            'value.numeric' => "Giá gốc không hợp lệ",
            'value.min' => "Giá gốc phải lớn hơn 0",
            'price.required' => "Giá bán chưa được nhập",
            'price.numeric' => "Giá bán không hợp lệ",
            'price.min' => "Giá bán phải lớn hơn 0",
            'quantity.required' => "Số lượng chưa được nhập",
            'quantity.numeric' => "Số lượng không hợp lệ",
            'quantity.min' => "Số lượng phải lớn hơn 0",
        ];
    }
}
