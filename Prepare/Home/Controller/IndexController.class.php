<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //B站首页数据
        $url="http://app.bilibili.com/x/v2/show?access_key=6b60e915a1374240922b8d3a10ad1a21&actionKey=appkey&appkey=27eb53fc9058f8c3&build=3480&channel=appstore&device=phone&mobi_app=iphone&plat=1&platform=ios&sign=2144dd6db2b13275933dd47bebc2b5af&ts=1470825898&warm=0";
       $str=file_get_contents($url);
    dump(json_decode($str,true));

        //    $this->ajaxReturn(返回数据,提示信息,操作状态);
    }
    //b站内容页
    public function next(){
        $url="http://app.bilibili.com/x/view?access_key=5b65015c833a54fcb6543f5ab579cff9&actionKey=appkey&aid=9074710&appkey=27eb53fc9058f8c3&build=3060&device=phone&plat=0&platform=ios&sign=80950c02804851e278aa56e94d06dc01&ts=1458631180";
        $str=file_get_contents($url);
        dump(json_decode($str,true));
    }

    public function test(){
        //1 接受参数
        // $phone=I('get.phone');
        //2 验证参数

        //3查询数据

        //4按约定数据格式返回数据  // $this->ajaxReturn(返回数据,提示信息,操作状态);

    }
}