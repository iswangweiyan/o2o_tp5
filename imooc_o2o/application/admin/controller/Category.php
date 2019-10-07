<?php
namespace app\admin\controller;

use think\Controller;

class Category extends Controller
{

    public function index()
    {
        return $this->fetch();
    }

    public function add()
    {
        return $this->fetch();
    }

    public function save()
    {
        // 原生
        // print_r($_POST);
        // //tp5中两种内置的
        // print_r(input('post.'));
        // print_r(request()->post());
        $date = input('post.');
        $validate = validate('Category');
        if (!$validate->scene('add')->check($date)) {
            $this ->error($validate->getError());
        }
        //将$date提交给model
        

    }
}
