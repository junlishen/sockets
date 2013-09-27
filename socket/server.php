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
session_start();
/*$Mcache->get('key1')*/
function WSevent($type,$event){
    global $websocket;
    $Mcache = $websocket->Mcache;
    $signStr = (string)$event['sign'];
    $signNum = preg_replace('/[^\d]+/','',$signStr);

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
        $msgs = '{"type":"usrout","id":'.$signNum.',"msg":"'.$signNum.'已下线！"}';
    } elseif ($type=='msg') {
        $websocket->log($signNum.'消息:' . $event['msg']);
        $recvMsg = json_decode($event['msg'],true);

        if($recvMsg['type']=='msg'){
            $msgs = '{"type":"msg","id":'.$signNum.',"msg":"'.$recvMsg['msg'].'"}';
            print_r($Mcache->get('key1'));

        }else if($recvMsg['type']=='usrinfo'){
            $usrInfo = json_encode($recvMsg['info'],true);
            $msgs = '{"type":"usrin","id":'.$signNum.',"info":'.$usrInfo.',"msg":"用户信息"}';

            $websocket->usr[$signStr]['info'] = $recvMsg['info'];


        }else if($recvMsg['type']=='getallusrinfo'){
            $allUsrs = $websocket->usr;
            $allInfo = array();
            foreach($allUsrs as $val){
                if(isset($val['info'])){
                    $allInfo[] = $val['info'];
                }
            }
            $usrInfo = json_encode($allInfo,true);
            $msgs = '{"type":"allusrinfo","msg":'.$usrInfo.'}';
            $websocket->log($msgs);
            $sendOneMsg['flag'] = 'one';
            $sendOneMsg['sign'] = $event['sign'];
        }elseif($recvMsg['type']=="getselfinfo"){
            $selfInfo = $_SESSION['usrinfo'];
            $msgs = '{"type":"getselfinfo","msg":['.$selfInfo.']}';
            $websocket->log($msgs);
            $sendOneMsg['flag'] = 'one';
            $sendOneMsg['sign'] = $event['sign'];
        }

    }
    /*发送信息*/
    $msg = $websocket->code($msgs);
    $msgLen = strlen($msg);
    if($sendOneMsg['flag'] == 'one'){
        socket_write($sendOneMsg['sign'], $msg, $msgLen);
    }else{
        $logUsrs = $websocket->sockets;
        unset($logUsrs[0]);

        foreach($logUsrs as $val){
            socket_write($val, $msg, $msgLen);
        }
    }
    /*socket_write($event['sign'], $msg, $msgLen);*///单人发送
}
?>
