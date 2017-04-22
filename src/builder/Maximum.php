<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午5:19
 */

namespace Schema\builder;


class Maximum extends BaseBuilder
{
    protected $key = 'max';

    protected $type = ['integer','numeric'];

    public function build(): ?array
    {
        if ($this->isMath()) {
            return ['maximum' => $this->data[$this->key]];
        }else{
            return null;
        }
    }
}