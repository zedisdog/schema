<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午6:31
 */

namespace Schema\builder;


class Title extends BaseBuilder
{
    protected $key = 'title';

    public function build(): ?array
    {
        if ($this->isMath()) {
            return ['title' => $this->data[$this->key]];
        } else {
            return null;
        }
    }
}