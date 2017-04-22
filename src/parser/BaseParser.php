<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午3:12
 */
declare(strict_types=1);
namespace Schema\parser;


abstract class BaseParser implements ParserContract
{
    /**
     * @var array 原始数据
     */
    protected $data;

    /**
     * @var string 规则键名
     */
    protected $key;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function isMatch(): bool
    {
        if (!$this->key) {
            throw new \InvalidArgumentException('key must has a value');
        }

        if (array_key_exists($this->key,$this->data)) {
            return true;
        }

        return false;
    }
}