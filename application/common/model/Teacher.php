<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/17
 * Time: 16:19
 */

namespace app\common\model;
use think\Model;

class Teacher extends Model
{

    /**
     * 性别属性读取器
     * @param $sex
     * @return string
     */
    public function getSexAttr($sex) {
        return $sex == 0 ? '男' : '女';
    }

}