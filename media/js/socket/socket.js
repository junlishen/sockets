var socketFed = {
    socket:null,
    emptyVal:function(args){
        for(var i in args){
            if((/\s+/gi).test(args[i])||args[i]==""){
                return true;
            }
        }
        return false;
    },
    serialzeVal:function(serialzs){
        var val = {}
            ,_nowVal;
        for(var i =0;i<serialzs.length;i++){
            _nowVal = serialzs[i];
            val[_nowVal['name']]=serialzs[i]['value'];
        }
        return val;
    },
    getTime:function(dataParse){
        var time = new Date(dataParse);
        return time.getHours()+":"+time.getMinutes()+":"+time.getSeconds();
    },
    msgLog:function(args){
        var messageTim = socketFed.getTime(args['timeStamp']/1000)
            ,msgData = JSON.parse(args.data)
            ,msgBx = $('#J_msgLogBx')
            ,msgTxtBx = $('#msgBx')
            ,msgInfo;
        alert(args.data);
        return;
        switch (msgData['type']){
            case 'usrin':
                msgTxtBx.text(JSON.stringify(msgData));
                break;
            case 'usrout':
                msgTxtBx.text(JSON.stringify(msgData));
                break;
            case 'usrinfo':
                msgTxtBx.text(JSON.stringify(msgData));
                break;
            case 'allusrinfo':
                msgTxtBx.text(JSON.stringify(msgData));
                break;
            case 'getselfinfo':
                msgTxtBx.text(JSON.stringify(msgData));
                break;
            default ://msgData['type']=="msg"
                msgInfo = "<dl><dt><b usrid='"+msgData['id']+"'>"+msgData['usrnick']+":</b> <span class='msgTime'>"+messageTim+"</span></dt><dd class='pic'></dd><dd class='msgCont'>"+msgData['msg']+"</dd></dl>";
                $('<li>'+msgInfo+'</li>').appendTo(msgBx);
        }
    },
    socketLoadFun:function(host){
        //var socketHost = host||'172.16.3.9'
        var socketHost = host||'192.168.0.25'
            ,_this = this
            ,textBx = $('#text');
        function socketLink(){
            _this['socket'] = new WebSocket("ws://"+socketHost+":12345");
            _this['socket']['onopen'] = function () {
                document.title = '连接成功';
                var sendData = JSON.stringify({'type':'usrinfo','info':{"usrid":usrInfo['usrid'],"checkid":usrInfo['checkid']},'msg':"用户登录"});
                _this['socket'].send(sendData);
            }
            _this['socket']['onmessage'] = function (msg) {
                socketFed.msgLog(msg);
            }
            _this['socket']['onclose'] = function () {
                document.title = '断开连接';
            }
        }
        socketLink();
        $("input",'#J_controlBx').on({
            click:function(){
                if($(this).hasClass('J_connetSocket')){
                    socketLink();
                }else if($(this).hasClass('J_disSocket')){
                    _socket.close();
                    _socket = null;
                }else if($(this).hasClass('J_sendSocket')){
                    var _sendVal = {"type":"msg","usrid":usrInfo['usrid'],"msg":textBx.val()}
                        ,sendData = JSON.stringify(_sendVal);
                    _socket.send(sendData);
                }else if($(this).hasClass('J_getUsrs')){
                    _socket.send('{"type":"getallusrinfo"}');
                }else if($(this).hasClass('J_getSeftInfo')){
                    _socket.send('{"type":"getselfinfo"}');
                }
                return false;
            }
        });
    }
};