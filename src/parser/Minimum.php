<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午4:38
 */
declare(strict_types=1);
namespace Schema\parser;


class Minimum extends BaseParser
{
    protected $key = 'minimum';

    public function parser(): ?array
    {
        if ($this->isMatch()) {
            return ['min',$this->data[$this->key]];
        }else{
            return null;
        }
    }
}