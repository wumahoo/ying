<?php
/**
 * Created by PhpStorm.
 * User: wumahoo
 * Date: 2016/9/12 0012
 * Time: 下午 5:22
 */

namespace app\components;

use yii\base\Object;

class TestComponent extends Object
{
    /**
     * @var
     */
    public $prop1;
    public $prop2;

    public function __construct($param1, $param2, $config = [])
    {
        // ... 配置生效前的初始化过程

        parent::__construct($config);
    }

    public function init()
    {
        parent::init();

        // ... 配置生效后的初始化过程
    }
}
