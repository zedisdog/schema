<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午6:29
 */

namespace Schema\builder;


class Minimum extends BaseBuilder
{
    protected $key = 'min';

    protected $type = ['integer','numeric'];

    public function build(): ?array
    {
        if ($this->isMath()) {
            return ['minimum' => $this->data[$this->key]];
        }else{
            return null;
        }
    }
}