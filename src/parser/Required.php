<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午4:40
 */
declare(strict_types=1);
namespace Schema\parser;


class Required extends BaseParser
{
    protected $key = 'required';

    public function parser(): ?array
    {
        if ($this->isMatch()) {
            return [$this->key];
        }else{
            return null;
        }
    }
}