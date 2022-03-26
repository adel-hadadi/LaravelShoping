<?php

namespace App\Http\Requests\Admin\Market;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        if ($this->isMethod('post')) {
            return [
                'name' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9., ]+$/u',
                'introduction' => 'required|max:500|min:5',
                'image' => 'required|image|mimes:png,jpg,jpeg,gif',
                'status' => 'required|numeric|in:0,1',
                'tags' => 'required|regex:/^[ا-یa-zA-Z0-9., ]+$/u',
                'category_id' => 'nullable|min:1|max:10000|regex:/^[0-9]+$/u|exists:product_categories,id',
                'weight' => 'nullable|max:1000|min:1',
                'length' => 'nullable|max:1000|min:1',
                'width' => 'nullable|max:1000|min:1',
                'height' => 'nullable|max:1000|min:1',
                'price' => 'required|numeric',
                'brand_id' => 'nullable|min:1|max:10000|regex:/^[0-9]+$/u|exists:brands,id',
                'published_at' => 'required|numeric'
            ];
        } else {
            return [
                'name' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9., ]+$/u',
                'introduction' => 'required|max:500|min:5',
                'image' => 'image|mimes:png,jpg,jpeg,gif',
                'status' => 'required|numeric|in:0,1',
                'tags' => 'required|regex:/^[ا-یa-zA-Z0-9., ]+$/u',
                'category_id' => 'nullable|min:1|max:10000|regex:/^[0-9]+$/u|exists:product_categories,id',
                'weight' => 'nullable|max:1000|min:1',
                'length' => 'nullable|max:1000|min:1',
                'width' => 'nullable|max:1000|min:1',
                'height' => 'nullable|max:1000|min:1',
                'price' => 'required|numeric',
                'brand_id' => 'nullable|min:1|max:10000|regex:/^[0-9]+$/u|exists:brands,id',
                'published_at' => 'required|numeric'
            ];
        }
    }
}
