<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午6:31
 */

namespace Schema\builder;


class Type extends BaseBuilder
{
    protected $key = ['integer','string','number','array'];

    public function build(): ?array
    {
        if ($this->isMath()) {
            return ['type' => array_intersect(array_keys($this->data),$this->key)[0]];
        }else{
            return null;
        }
    }
}