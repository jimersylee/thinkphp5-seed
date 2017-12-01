<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{

    /** domain.com/index/index/index
     * @return string
     */
    public function index()
    {
        return 'hello world';
    }

    /**
     * 返回json
     * @return \think\response\Json
     */
    public function json(){
        $arr['code']=0;
        $arr['message']="success";
        $arr['data']=null;
        return json($arr);
    }


}
