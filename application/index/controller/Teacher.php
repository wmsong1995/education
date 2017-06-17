<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/17
 * Time: 15:51
 * 教师管理
 */

namespace app\index\controller;
use app\common\model\Teacher as TeacherModel;
use think\Controller;

class Teacher extends Controller
{
    public function index() {
        $Teacher = new TeacherModel();
        $teachers = $Teacher->select();

        $this->assign('teachers', $teachers);
        return $this->fetch();
    }

}