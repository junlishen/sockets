<?php
include 'websocket.class.php';
$config = array(
    'address' => '172.16.3.9',
   // 'address' => '192.168.0.25',
    'port' => '12345',
    'event' => 'WSevent', //回调函数的函数名
    'log' => true,
);
$websocket = new websocket($config);
$websocket->run();
function WSevent($type,$event){
    global $websocket;
    $Mcache = $websocket->Mcache;
    $signNum = preg_replace('/[^\d]+/','',(string)$event['sign']);

    $sendOneMsg = array(
        'flag'=> 'all',
        'sign'=>0
    );
    if ($type== 'in') {
        $websocket->log( '客户进入id:' . $signNum);
        return;
    }
    if ($type=='out') {
        $websocket->log('客户退出id:' .$signNum);
        $msgs = array(
            'type'=>"usrout",
            'id'=>$signNum,
            'msg'=>$signNum.'已下线!'
        );
    } elseif ($type=='msg') {
        $websocket->log($signNum.'消息:' . $event['msg']);
        $recvMsg = json_decode($event['msg'],true);
        /*print_r($recvMsg);*/
        $usrs = $Mcache->get('usrs');

        if($recvMsg['type']=='msg'){
            $usrid = $recvMsg['usrid'];
            $usr = $usrs[$usrid];
            $msgs = array(
                'type'=>"msg",
                'id'=>$usrid,
                'usrnick'=>$usr['usrnick'],
                'usrpic'=>$usr['pic'],
                'msg'=>$recvMsg['msg'],
                'type'=>$recvMsg['msg']
            );

        }else if($recvMsg['type']=='usrinfo'){
            /*$usrid = $recvMsg['info']['usrid'];
            $usrnick = $usrs[$usrid]['usrnick'];
            $usrInfo = json_encode($recvMsg['info'],true);
            $msgs = '{"type":"usrin","id":'.$usrid.',"usrname":"'.$usrnick.'","info":'.$usrInfo.',"msg":"用户信息"}';*/

            $usrInfo = json_encode($recvMsg['info'],true);
            $msgs = array(
                "type"=>"usrin",
                "info"=>$usrInfo,
                "msg"=>"用户信息"
            );

        }else if($recvMsg['type']=='getallusrinfo'){
            $allUsrs = $websocket->usr;
            $allInfo = array();
            foreach($allUsrs as $val){
                if(isset($val['info'])){
                    $allInfo[] = $val['info'];
                }
            }
            $usrInfo = json_encode($allInfo,true);
            $msgs = array(
                "type"=>"allusrinfo",
                "msg"=>$usrInfo
            );
            $websocket->log($msgs);
            $sendOneMsg['flag'] = 'one';
            $sendOneMsg['sign'] = $event['sign'];

        }elseif($recvMsg['type']=="getselfinfo"){
            /*var_dump($_SERVER);
            session_start();
            $selfInfo = json_encode($_SESSION['usrinfo']);*/
            /*$selfInfo = json_encode(getallheaders());
            $msgs = '{"type":"getselfinfo","msg":'.$selfInfo.'}';
            $websocket->log($msgs);
            $sendOneMsg['flag'] = 'one';
            $sendOneMsg['sign'] = $event['sign'];*/
            /*session_end();*/
        }

    }
    /*发送信息*/
    $msgs = json_encode($msgs);
    $websocket->log("返回信息：".$msgs);

    $msg = $websocket->code($msgs);
    $msgLen = strlen($msg);

    if($sendOneMsg['flag'] == 'one'){
        socket_write($sendOneMsg['sign'], $msg, $msgLen);//单人发送
    }else{
        $logUsrs = $websocket->sockets;
        unset($logUsrs[0]);

        foreach($logUsrs as $val){
            socket_write($val, $msg, $msgLen);
        }
    }
}
?>
