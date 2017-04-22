<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午6:30
 */

namespace Schema\builder;


class Required extends BaseBuilder
{
    protected $key = 'required';

    public function build(): ?array
    {
        if ($this->isMath()) {
            return ['required' => true];
        } else {
            return null;
        }
    }
}