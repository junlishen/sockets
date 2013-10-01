function jLs(ids){
    return document.querySelectorAll(ids);
}
function jL(id){
    return document.querySelector(id);
}
var socketFed = window.parent['socketFed']
    ,socket = socketFed['socket']
    ,chatFed = {
    usrList:function(data){
        var listStr = ''
            ,nData;
        for(var i =0;i<data.length;i++){
            nData = data[i];
            listStr+='<li usrid="'+nData['usrid']+'"><a href="javascript:;" data-rel="fancybox-button" class="fancybox-button"><img src="'+(nData['pic']||'/media/null.gif')+'" alt="'+nData['usrnick']+'"></a></li>';
        }
        return listStr;
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
                $('#usrlist').append(this.usrList(msgData['msg']));
                break;
            case 'getselfinfo':
                msgTxtBx.text(JSON.stringify(msgData));
                break;
            default ://msgData['type']=="msg"
                msgInfo = "<dl><dt><b usrid='"+msgData['id']+"'>"+msgData['usrnick']+":</b> <span class='msgTime'>"+messageTim+"</span></dt><dd class='pic'></dd><dd class='msgCont'>"+msgData['msg']+"</dd></dl>";
                $('<li>'+msgInfo+'</li>').appendTo(msgBx);
        }
    },
    send:function(data){
        var sendTxt = JSON.stringify(data);
        socket['onmessage'] = function (msg) {
            chatFed.msgLog(msg);
        }
        socket.send(sendTxt);
    },
    chatInLoadFun:function(){
        var _this = this;
        _this.send({"type":"getallusrinfo"});
        jL('.J_sendSocket').onclick = function(){
            _this.send({"type":"msg","usrid":usrInfo['usrid'],"msg":jL("#text").value});
        };
        /*
        jL('.J_getUsrs').onclick = function(){
            _this.send({"type":"getallusrinfo"});
        }
        jL('.J_getSeftInfo').onclick = function(){
            _this.send('{"type":"getselfinfo"}');
        }*/
    }
};