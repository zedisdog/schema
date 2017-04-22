<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午5:16
 */

namespace Schema\builder;


class DefaultValue extends BaseBuilder
{
    protected $key = 'default';

    public function build(): ?array
    {
        if ($this->isMath()) {
            return ['default' => $this->data[$this->key]];
        }else{
            return null;
        }
    }
}