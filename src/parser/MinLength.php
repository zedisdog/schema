<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午4:36
 */
declare(strict_types=1);
namespace Schema\parser;


class MinLength extends BaseParser
{
    protected $key = 'minLength';

    public function parser(): ?array
    {
        if ($this->isMatch()) {
            return ['min',$this->data[$this->key]];
        }else{
            return null;
        }
    }
}