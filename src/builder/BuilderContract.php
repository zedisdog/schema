<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午5:08
 */
declare(strict_types=1);
namespace Schema\builder;


interface BuilderContract
{
    public function isMath(): bool;
    public function build(): ?array;
}