<?php

/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午2:45
 */
class ParserTest extends \PHPUnit\Framework\TestCase
{
    public function testRequired()
    {
        $input = ['required' => true];

        $parser = new \Schema\parser\Required($input);
        $this->assertEquals(['required'],$parser->parser());
    }

    public function testDefault()
    {
        $input = ['default' => 1];

        $parser = new \Schema\parser\DefaultValue($input);
        $this->assertEquals(['default',1],$parser->parser());
    }

    public function testType()
    {
        $input = ['type' => 'string'];
        $parser = new \Schema\parser\Type($input);
        $this->assertEquals(['string'],$parser->parser());
    }

    public function testTitle()
    {
        $input = ['title' => 'test'];
        $parser = new \Schema\parser\Title($input);
        $this->assertEquals(['test'],$parser->parser());
    }

    public function testReadOnly()
    {
        $input = ['readOnly' => true];
        $parser = new \Schema\parser\ReadOnly($input);
        $this->assertEquals(['readOnly'],$parser->parser());
    }

    public function testMaximum()
    {
        $input = ['maximum' => 3];
        $parser = new \Schema\parser\Maximum($input);
        $this->assertEquals(['max',3],$parser->parser());
    }

    public function testMinimum()
    {
        $input = ['minimum' => 3];
        $parser = new \Schema\parser\Minimum($input);
        $this->assertEquals(['min',3],$parser->parser());
    }

    public function testMaxLength()
    {
        $input = ['maxLength' => 3];
        $parser = new \Schema\parser\MaxLength($input);
        $this->assertEquals(['max',3],$parser->parser());
    }

    public function testMinLength()
    {
        $input = ['minLength' => 3];
        $parser = new \Schema\parser\MinLength($input);
        $this->assertEquals(['min',3],$parser->parser());
    }
}