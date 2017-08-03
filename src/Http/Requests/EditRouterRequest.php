<?php

namespace AccessManager\Routers\Http\Requests;


use AccessManager\Base\Http\Requests\BaseFormRequest;

class EditRouterRequest extends BaseFormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [

        ];
    }
}