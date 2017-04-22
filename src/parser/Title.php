<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午3:39
 */
declare(strict_types=1);
namespace Schema\parser;


class Title extends BaseParser
{
    protected $key = 'title';

    public function parser(): ?array
    {
        if ($this->isMatch()) {
            return [$this->data['title']];
        }else{
            return null;
        }
    }
}