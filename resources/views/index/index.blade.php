<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="{{url('/s/css/tan.css')}}" type="text/css" />
    <script src="{{url('/s/css/tan.js')}}"></script>
    <link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.7/skins/default/aliplayer-min.css" />
    <script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.7/aliplayer-min.js"></script>
    <title>直播间</title>
</head>
<body>
        
        <div style="width: 70%;height: 500px;float: left;" class="prism-player" id="mainScreen"></div>
        <div style="width: 29%;float:right;">
                <input type="button" value="大家说" style="width:49%;height:40px" class="dajia">
                <input type="button" value="粉丝贡献榜" style="width:49%;height:40px" class="fensi">
            <div class="huan">
                <div style="width: 99%; height: 600px; border: 1px solid black;overflow: auto" id="list"></div>
                <div id="bottom">
                        <input type="text" id="txt">
                        <input type="button" value="发送" id='btn'>
                   </div>
                
            </div>
        </div>
        <div  style="width: 100px;height: 100px;float: right; margin:15px 15px 15px 15px" class="xh"><img style="width:99%;height:80px" src="{{url('./storage/liwu/xh.jpg')}}" alt=""><p style="text-align:center">1积分</p></div>
        <div  style="width: 100px;height: 100px;float: right; margin:15px 15px 15px 15px" class="zs"><img style="width:99%;height:80px" src="{{url('./storage/liwu/zs.jpg')}}" alt=""><p style="text-align:center">10积分</p></div>
        <div  style="width: 100px;height: 100px;float: right; margin:15px 15px 15px 15px" class="pc"><img style="width:99%;height:80px" src="{{url('./storage/liwu/pc.jpg')}}" alt=""><p style="text-align:center">100积分</p></div>
        <div  style="width: 100px;height: 100px;float: right; margin:15px 15px 15px 15px" class="hj"><img style="width:99%;height:80px" src="{{url('./storage/liwu/hj.jpg')}}" alt=""><p style="text-align:center">1000积分</p></div>
        <div  style="width: 100px;height: 100px;float: right; margin:15px 15px 15px 15px" class="fj"><img style="width:99%;height:80px" src="{{url('./storage/liwu/fj.jpg')}}" alt=""><p style="text-align:center">10000积分</p></div>
        <div  style="width: 100px;height: 100px;float: right; margin:15px 15px 15px 15px" class="tui"><input type="button" value="点击退出"></div>
</body>
<script>
    //    粉丝贡献榜
        $(document).on('click','.fensi',function(){
            var _this=$(this);
            var s = $('.huan');
            $.ajax({
                url:"{{url('index/fensi')}}",
                type:"POST",
                success:function(data){
                    s.html(data);
                }
            })
        })  
        $(document).on('click','.dajia',function(){
            var _this=$(this);
            var s = $('.huan');
            $.ajax({
                url:"{{url('index/dajia')}}",
                type:"POST",
                success:function(data){
                    s.html(data);
                }
            })
        })                                                                                                                                                                                                                                                                                
    //鲜花
    $(document).on('click','.xh',function(){
        var res = $(this).find('img').attr("src");
        var con = "<img class='bqimg' src='" + res + "' style='width: 70px;height: 70px;'>";
        var message = '{"type":"liwu","con":"' + con + '"}';
        ws.send(message);
        var name = "{{session('name')}}";
        $.ajax({
            url:"{{url('index/xh')}}",
            type:"POST",
            data:{
                name:name,
                jf:'1'
            },
            dataType:"JSON",
        })
    })
    //砖石
    $(document).on('click','.zs',function(){
        var res = $(this).find('img').attr("src");
        console.log(res);
        var con = "<img class='bqimg' src='" + res + "' style='width: 70px;height: 70px;'>";
        var message = '{"type":"liwu","con":"' + con + '"}';
        ws.send(message);
        var name = "{{session('name')}}";
        $.ajax({
            url:"{{url('index/zs')}}",
            type:"POST",
            data:{
                name:name,
                jf:'10'
            },
            dataType:"JSON",
        })
    })
    //跑车
    $(document).on('click','.pc',function(){
        var res = $(this).find('img').attr("src");
        console.log(res);
        var con = "<img class='bqimg' src='" + res + "' style='width: 70px;height: 70px;'>";
        var message = '{"type":"liwu","con":"' + con + '"}';
        ws.send(message);
        var name = "{{session('name')}}";
        $.ajax({
            url:"{{url('index/pc')}}",
            type:"POST",
            data:{
                name:name,
                jf:'100'
            },
            dataType:"JSON",
        })
    })
    //火箭
    $(document).on('click','.hj',function(){
        var res = $(this).find('img').attr("src");
        console.log(res);
        var con = "<img class='bqimg' src='" + res + "' style='width: 70px;height: 70px;'>";
        var message = '{"type":"liwu","con":"' + con + '"}';
        ws.send(message);
        var name = "{{session('name')}}";
        $.ajax({
            url:"{{url('index/hj')}}",
            type:"POST",
            data:{
                name:name,
                jf:'1000'
            },
            dataType:"JSON",
        })
    })
 //飞机
 $(document).on('click','.fj',function(){
        var res = $(this).find('img').attr("src");
        console.log(res);
        var con = "<img class='bqimg' src='" + res + "' style='width: 70px;height: 70px;'>";
        var message = '{"type":"liwu","con":"' + con + '"}';
        ws.send(message);
        var name = "{{session('name')}}";
        $.ajax({
            url:"{{url('index/fj')}}",
            type:"POST",
            data:{
                name:name,
                jf:'10000'
            },
            dataType:"JSON",
        })
    })


    $(document).on('click','.dajia',function(){
        var _this=$(this);
        var div = _this.parent().parent().html();
        console.log(div);
    });
    var player = new Aliplayer({
        "id": "mainScreen",
        "source": "rtmp://youke.bianaoao.top/aa/aaa?auth_key=1583380698-0-0-0232b67837e4042bbee2dd57b7e1f136",
        "width": "100%",
        "height": "500px",
        "autoplay": true,
        "isLive": false,
        "rePlay": false,
        "playsinline": true,
        "preload": true,
        "controlBarVisibility": "hover",
        "useH5Prism": true
    }, function(player) {
        console.log("The player is created");
    });
    var username = "{{session('name')}}";
    var ws = new WebSocket("ws://182.92.161.74:9501");
    ws.onopen = function() {
        var message = '{"type":"login","con":"' + username + '"}';
        ws.send(message);
    }
    ws.onmessage = function(res) {
        var data = JSON.parse(res.data);
        if (data.is_me == 1 && data.type == 'login') {
            var con = "<p style='text-align:center'>尊敬的用户：" + data.username + "欢迎您的到来</p>";
        } else if (data.is_me == 0 && data.type == 'login') {
            var con = "<p style='text-align:center'>系统提示：" + data.username + "上线</p>";
        } else if (data.is_me == 1 && data.type == 'message') {
            var con = "<div style='width: 99%; height: 100px;' align='right'><p>来自您的消息</p><p></p><p>" + data.message + "</p></div>"
        } else if (data.is_me == 0 && data.type == 'message') {
            var con = "<div style='width: 300px; height: 100px;' alig='left'><p>来自" + data.username + "的消息</p><p></p><p>" + data.message + "</p></div>"
        } else if (data.is_me == 0 && data.type == 'loginout') {
            var con = "<p style='text-align:center'>系统提示：" + data.username + "离开了聊天室</p>";
        }else if (data.is_me == 1 && data.type == 'liwu') {
            var con = "<div style='width: 99%; height: 100px;' align='right'><p>您刷的礼物</p><p></p><p>" + data.message + "</p></div>"
        } else if (data.is_me == 0 && data.type == 'liwu') {
            var con = "<div style='width: 300px; height: 100px;' alig='left'><p>来自" + data.username + "刷的礼物</p><p></p><p>" + data.message + "</p></div>"
        }
        $("#list").append(con);
    }
    $(document).on('click', '#btn', function() {
        var con = $('#txt').val();
        var message = '{"type":"message","con":"' + con + '"}';
        ws.send(message);
    });
    $(document).on('click', '.bqimg', function() {
        var res = $(this).attr("src");
        var con = "<img class='bqimg' src='" + res + "' style='width: 70px;height: 70px;'>";
        var message = '{"type":"message","con":"' + con + '"}';
        ws.send(message);
    })
</script>
</html>