<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午6:29
 */

namespace Schema\builder;


class MaxLength extends BaseBuilder
{
    protected $key = 'max';

    protected $type = 'string';

    public function build(): ?array
    {
        if ($this->isMath()) {
            return ['maxLength' => $this->data[$this->key]];
        } else {
            return null;
        }
    }
}