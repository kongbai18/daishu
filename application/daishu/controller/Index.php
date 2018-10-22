<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/19 0019
 * Time: 17:05
 */

namespace app\daishu\controller;


class Index
{
   public function index(){
       return show('1',1,1);
   }
}