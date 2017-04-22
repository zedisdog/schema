<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午4:42
 */
declare(strict_types=1);
namespace Schema\parser;


class ReadOnly extends BaseParser
{
    protected $key = 'readOnly';

    public function parser(): ?array
    {
        if ($this->isMatch()) {
            return ['readOnly'];
        }else{
            return null;
        }
    }
}