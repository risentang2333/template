<?php
namespace app\index\controller;

use think\Controller;

class Hello extends Controller 
{
    public function hello()
    {
        return view("index/to");
    }
}
