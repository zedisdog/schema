<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午4:39
 */
declare(strict_types=1);
namespace Schema\parser;


class Maximum extends BaseParser
{
    protected $key = 'maximum';

    public function parser(): ?array
    {
        if ($this->isMatch()) {
            return ['max',$this->data[$this->key]];
        }else{
            return null;
        }
    }
}