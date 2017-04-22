<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午3:09
 */
declare(strict_types = 1);
namespace Schema\parser;


interface ParserContract
{
    public function isMatch(): bool;
    public function parser(): ?array;
}