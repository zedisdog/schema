<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午6:30
 */

namespace Schema\builder;


class ReadOnly extends BaseBuilder
{
    protected $key = 'readOnly';

    public function build(): ?array
    {
        if ($this->isMath()) {
            return ['readOnly' => true];
        } else {
            return null;
        }
    }
}