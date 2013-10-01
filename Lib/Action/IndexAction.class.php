<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    function indexAct(){
        $this->assign(array(
            'webTitle'=>"Socket By Junli"
        ));
        $this->display("Tpl/login.html");

    }
    function random_str($length){
        $arr = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
        $str = '';
        $arr_len = count($arr);
        for ($i = 0; $i < $length; $i++){
            $rand = mt_rand(0, $arr_len-1);
            $str.=$arr[$rand];
        }
        return $str;
    }
    function loginAct(){
        /*Memcache*/
        $Mcache = new Memcache;
        $Mcache->connect("127.0.0.1", 11211) or die ("Could not connect");

        $usrName = $this->_post('username');
        $usrPwd = $this->_post('password');
        if($usrName==""||$usrPwd==""){
            return false;
        }
        $mode = M('user');
        $logData = $mode->where("`username`='".$usrName."' and `password` = '".$usrPwd."'")->select();
        $logData = $logData[0];
        $usrInfo = array(
            'usrid'=>$logData['userid'],
            'usrnick'=>$logData['nickname'],
            'usrname'=>$logData['username'],
            'email'=>$logData['email'],
            'pic'=>$logData['pic'],
            'logintime'=>date("Y-m-d H:i:s"),
            'checkid'=> $this->random_str(15)
        );
        $cUsrs = $Mcache->get('usrs');
        $cUsrs[$logData["userid"]] = $usrInfo;
        if(!$Mcache->set('usrs',$cUsrs)){
            echo "登录失败";
        }
        session('usrid',$logData["userid"]);
        session("usrinfo",$usrInfo);
        $this->display("Tpl/msg.html");
        /*var_dump($Mcache->get('key1'));
        echo "<br/>";
        var_dump($Mcache->get('usrs'));
        echo "<br/>";
        var_dump(session("usrinfo"));*/
       // header("Location: ".U("main/index"));

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
}