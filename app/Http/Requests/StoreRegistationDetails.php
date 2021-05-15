<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistationDetails extends FormRequest
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
      $request = $this->request->all();

        if (array_key_exists('name', $this->request->all()))
        {
            return ['name'=>'required'];
        }
        elseif (array_key_exists('image', $this->request->all()))
        {
            return ['image'=>'mimes:jpg,jpeg,png|size:512'];
        }
	    elseif (array_key_exists('grade', $this->request->all()))
        {
            return ['grade'=>'required'];
        }
        elseif (array_key_exists('dateofbirth', $this->request->all())){
            return ['dateofbirth'=>'required'];
        }
	    elseif (array_key_exists('address', $this->request->all()))
        {
           return ['address'=>'required|min:4|max:200'];
        }
        elseif (array_key_exists('city', $this->request->all()))
        {
           return ['city'=>'required|min:2|max:30'];
        }
         elseif (array_key_exists('country', $this->request->all()))
        {
           return ['country'=>'required|min:2|max:30'];
        }
    }

    public function messages(){
         return ['name.required'=>'Name field is required',
                'grade.*.mimes'=>'Please upload only jpg,jpeg,png images',
                'grade.required'=>'Select any grade and it is required',
                'dateofbirth.required'=>'Date of Birth field is required',
                'address.required'=>'Address is required',
                'address.min'=>'The Address must be at least 4 characters',
                'address.max'=>'The Address may not be greater than 25 characters.',
                'city.required'=>'City is required',
                'city.min'=>'The City name must be at least 4 characters',
                'city.max'=>'The City name may not be greater than 25 characters.',
                'country.required'=>'Country is required',
                'country.min'=>'The Country name must be at least 4 characters',
                'country.max'=>'The Country name may not be greater than 25 characters.',
                ];
    }
}
