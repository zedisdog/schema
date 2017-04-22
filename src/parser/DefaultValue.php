<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午3:42
 */
declare(strict_types=1);
namespace Schema\parser;


class DefaultValue extends BaseParser
{
    protected $key = 'default';

    public function parser(): ?array
    {
        if ($this->isMatch()) {
            return [$this->key,$this->data[$this->key]];
        }else{
            return null;
        }
    }
}