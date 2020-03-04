<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>注册</title>
</head>
<body>
        <h1>注册页面</h1>
        <form action="{{url('reg/insert')}}" method="post">
            @csrf
            <table border="1">
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="user_name" id=""></td>
                </tr>
                <tr>
                    <td>手机号</td>
                    <td><input type="tel" name="user_tel" id=""></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="password" name="user_pwd" id=""></td>
                </tr>
                <tr>
                    <td>确认密码</td>
                    <td><input type="password" name="user_pwds" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="点击注册"></td>
                    <td></td>                   
                </tr>
            </table>
        </form>
</body>
</html>