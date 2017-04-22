<?php
/**
 * Created by PhpStorm.
 * User: dezsidog
 * Date: 17-4-22
 * Time: 下午5:20
 */
class BuilderTest extends \PHPUnit\Framework\TestCase
{
    public function testDefault()
    {
        $input = 'default:3';
        $builder = new \Schema\builder\DefaultValue($input);
        $this->assertEquals(['default' => 3],$builder->build());
    }

    public function testMaximum()
    {
        $input = 'max:3';
        $builder = new \Schema\builder\Maximum($input);
        $this->assertEquals(null,$builder->build());

        $input = 'max:3|string';
        $builder = new \Schema\builder\Maximum($input);
        $this->assertEquals(null,$builder->build());

        $input = 'max:3|integer';
        $builder = new \Schema\builder\Maximum($input);
        $this->assertEquals(['maximum' => 3],$builder->build());
    }

    public function testMinimum()
    {
        $input = 'min:3';
        $builder = new \Schema\builder\Minimum($input);
        $this->assertEquals(null,$builder->build());

        $input = 'min:3|string';
        $builder = new \Schema\builder\Minimum($input);
        $this->assertEquals(null,$builder->build());

        $input = 'min:3|integer';
        $builder = new \Schema\builder\Minimum($input);
        $this->assertEquals(['minimum' => 3],$builder->build());
    }

    public function testMaxLength()
    {
        $input = 'max:3';
        $builder = new \Schema\builder\MaxLength($input);
        $this->assertEquals(null,$builder->build());

        $input = 'max:3|integer';
        $builder = new \Schema\builder\MaxLength($input);
        $this->assertEquals(null,$builder->build());

        $input = 'max:3|string';
        $builder = new \Schema\builder\MaxLength($input);
        $this->assertEquals(['maxLength' => 3],$builder->build());
    }

    public function testMinLength()
    {
        $input = 'min:3';
        $builder = new \Schema\builder\MinLength($input);
        $this->assertEquals(null,$builder->build());

        $input = 'min:3|integer';
        $builder = new \Schema\builder\MinLength($input);
        $this->assertEquals(null,$builder->build());

        $input = 'min:3|string';
        $builder = new \Schema\builder\MinLength($input);
        $this->assertEquals(['minLength' => 3],$builder->build());
    }

    public function testReadOnly()
    {
        $input = 'readOnly';
        $builder = new \Schema\builder\ReadOnly($input);
        $this->assertEquals(['readOnly' => true],$builder->build());
    }

    public function testRequired()
    {
        $input = 'required';
        $builder = new \Schema\builder\Required($input);
        $this->assertEquals(['required' => true],$builder->build());
    }

    public function testType()
    {
        $input = 'string';
        $builder = new \Schema\builder\Type($input);
        $this->assertEquals(['type' => 'string'],$builder->build());

        $input = 'integer';
        $builder = new \Schema\builder\Type($input);
        $this->assertEquals(['type' => 'integer'],$builder->build());

        $input = 'array';
        $builder = new \Schema\builder\Type($input);
        $this->assertEquals(['type' => 'array'],$builder->build());
    }
}