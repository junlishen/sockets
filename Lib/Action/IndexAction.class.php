<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    function indexAct(){
        $this->assign(array(
            'webTitle'=>"Socket By Junli"
        ));
        $this->display("Tpl/login.html");
    }
    function loginAct(){
        $usrName = $this->_post('username');
        $usrPwd = $this->_post('password');
        if($usrName==""||$usrPwd==""){
            return false;
        }
        $mode = M('user');
        $logData = $mode->where("`username`='".$usrName."' and `password` = '".$usrPwd."'")->select();
        $logData = $logData[0];
        session('usrid',$logData["userid"]);
        session("usrinfo",$logData);
       // header("Location: ".U("main/index"));
        $this->display("Tpl/msg.html");
    }
    function regAct(){
        $data['username'] = $this->_post('usrname');
        $data['password'] = $this->_post('pwd');
        $data['email'] = $this->_post('mail');
        $mode = M('user');
        $Res = array('res'=>false,'msg'=>"用户名已存在！");
        $uData = $mode->where("`username`='".$data['username']."' or `email` = '".$data['email']."'")->select();
        if(count($uData)<1){
            $addId = $mode->data($data)->add();
            $Res = array('res'=>true,'msg'=>"注册成功！",'id'=>$addId);
        }
        echo json_encode($Res);
    }
    function forgetpwdAct(){
        $mail = $this->_post('email');
        echo $mail;
    }
   /* function indexAct(){
        $this->display("Tpl/index.html");
    }
    function loginAct(){
        $this->display("Tpl/login.html");
    }*/
}