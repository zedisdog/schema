<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午2:46
 */

namespace Schema;

use Illuminate\Foundation\Http\FormRequest;

class ActiveRequest extends FormRequest
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
        return [
            //
        ];
    }
}