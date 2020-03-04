<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录页面</title>
</head>
<body>
    <h3>请您登录</h3>
    <h3>没有账号?点击<a href="{{url('reg/index')}}">注册</a></h3>
    <form action="{{url('login/insert')}}" method="post">
        @csrf
        <table border="1">
            <tr>
                <td>用户名</td>
                <td><input type="text" name="user_name" id=""></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="password" name="user_pwd" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="点击登录"></td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>