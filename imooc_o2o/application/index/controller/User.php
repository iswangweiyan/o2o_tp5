<?php
namespace app\index\controller;

//引入think下的Controller
use think\Controller;

//继承公共的controller
class User extends Controller
{
    public function login()
    {
        return $this->fetch();
    }

    public function register()
    {
        return $this->fetch();
    }

}
