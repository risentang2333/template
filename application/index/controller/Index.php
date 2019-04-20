<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller 
{
    public function index()
    {
        return view();
        // 可以在view方法里写模板html的路径，指定去渲染哪个模板
        return view("header");
    }

    public function hello()
    {
        echo "hello";
    }
}
