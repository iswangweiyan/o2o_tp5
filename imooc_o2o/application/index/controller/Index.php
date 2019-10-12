<?php
namespace app\index\controller;

//引入think下的Controller
use think\Controller;

//继承公共的controller
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
