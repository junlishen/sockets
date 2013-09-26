var socketFed = {
    usrInfo:{'type':'usrinfo','info':false,'msg':"用户登录"},
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
    login:function(){
        var _loginBx = $('.socket-login-form');
        _loginBx.show();
        /*$('.socket-login-form').hide();*/
        $("button",_loginBx).on({
            click:function(){
                var _this = $(this)
                    ,formVals;
                if(_this.hasClass('socket-subform')){
                    formVals = socketFed.serialzeVal($('#socket-login-form').serializeArray());
                    if(!socketFed.emptyVal(formVals)){
                        socketFed.usrInfo['info'] = formVals;
                        _loginBx.hide();
                        socketFed.socketLoadFun(/*window['location']['hostname']*/);
                    }else{
                     alert('请输入你的登录信息');
                    }
                }else{
                    _loginBx.hide();
                }
            }
        });
    },
    getTime:function(dataParse){
        var time = new Date(dataParse);;
        return time.getHours()+":"+time.getMinutes()+":"+time.getSeconds();
    },
    msgLog:function(args){
        var messageTim = socketFed.getTime(args['timeStamp']/1000)
            ,msgData = JSON.parse(args.data)
            ,msgBx = $('#J_msgLogBx')
            ,msgTxtBx = $('#msgBx')
            ,msgInfo;
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
                msgInfo = "<dl><dt><b>"+msgData['id']+"("+msgData['id']+")</b> <span class='msgTime'>"+messageTim+"</span></dt><dd class='pic'></dd><dd class='msgCont'>"+msgData['msg']+"</dd></dl>";
                $('<li>'+msgInfo+'</li>').appendTo(msgBx);
        }
    },
    socketLoadFun:function(host){
        var socketHost = host||'172.16.3.9'
        //var socketHost = host||'192.168.0.25'
            ,_socket = null
            ,textBx = $('#text');
        function socketLink(){
            _socket = new WebSocket("ws://"+socketHost+":12345");
            _socket['onopen'] = function () {
                document.title = '连接成功';
                var sendData = JSON.stringify(socketFed.usrInfo);
               // setTimeout(function(){
                    _socket.send(sendData);
               // },2000);
            }
            _socket['onmessage'] = function (msg) {
                socketFed.msgLog(msg);
            }
            _socket['onclose'] = function () {
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
                    var _sendVal = {"type":"msg","msg":textBx.val()}
                        ,sendData = JSON.stringify(_sendVal);
                    _socket.send(sendData);
                }else if($(this).hasClass('J_getUsrs')){
                    var sendData = JSON.stringify({"type":"getallusrinfo"});
                    _socket.send(sendData);
                }else if($(this).hasClass('J_getSeftInfo')){
                    var sendData = JSON.stringify({"type":"getselfinfo"});
                    _socket.send(sendData);
                }
                return false;
            }
        });
    }
};