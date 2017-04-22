<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午3:26
 */
declare(strict_types=1);
namespace Schema\parser;


class Type extends BaseParser
{
    protected $key = 'type';

    public function parser(): ?array
    {
        $map = [
            'string' => 'string',
            'number' => 'numeric',
            'integer' => 'integer',
            'boolean' => 'boolean',
            'array' => 'array',
            'object' => 'array',
        ];

        if ($this->isMatch()) {
            return [$map[$this->data['type']]];
        }else{
            return null;
        }
    }
}