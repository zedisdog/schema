<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午5:13
 */

namespace Schema\builder;


abstract class BaseBuilder implements BuilderContract
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string|array 字段类型
     */
    protected $type;

    public function __construct(string $data)
    {
        foreach (explode('|', $data) as $item) {
            $rule = explode(':',$item);
            if (isset($rule[1])) {
                $this->data[$rule[0]] = $rule[1];
            } else {
                $this->data[$rule[0]] = true;
            }
        }
    }

    public function isMath(): bool
    {
        if ($this->type) {
            if (is_array($this->type)) {
                return boolval(array_intersect($this->type,array_keys($this->data)));
            }else{
                return array_key_exists($this->type,$this->data);
            }
        }else{
            if(is_array($this->key)){
                return boolval(array_intersect($this->key,array_keys($this->data)));
            }else{
                return array_key_exists($this->key,$this->data);
            }
        }
    }
}