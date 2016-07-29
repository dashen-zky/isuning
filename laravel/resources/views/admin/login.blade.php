<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">

<<<<<<< HEAD
<title>网站后台登录</title>
=======
<title>爱苏宁网站后台</title>
>>>>>>> 6774fa2b559ca8b9c1910659b00fe51c01ff54ed

</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
<<<<<<< HEAD
            <h1>Login</h1>
             @if(session('error'))
            <div class="mws-form-message error">
            {{session('error')}}
            </div>
            @endif
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/admin/dologin" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="username" class="mws-login-username required" placeholder="用户名">
=======
            <h1>爱苏宁网站后台</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/admin/login" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="username" class="mws-login-username required" placeholder="username">
>>>>>>> 6774fa2b559ca8b9c1910659b00fe51c01ff54ed
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
<<<<<<< HEAD
                            <input type="password" name="password" class="mws-login-password required" placeholder="密码">
=======
                            <input type="password" name="password" class="mws-login-password required" placeholder="password">
>>>>>>> 6774fa2b559ca8b9c1910659b00fe51c01ff54ed
                        </div>
                    </div>
                    <div id="mws-login-remember" class="mws-form-row mws-inset">
                        <ul class="mws-form-list inline">
                            <li>
                                <input id="remember" type="checkbox"> 
<<<<<<< HEAD
                                <label for="remember">记住我</label>
=======
                                <label for="remember">记住 密码</label>
>>>>>>> 6774fa2b559ca8b9c1910659b00fe51c01ff54ed
                            </li>
                        </ul>
                    </div>
                    <div class="mws-form-row">
<<<<<<< HEAD
                        {{csrf_field()}}
                        <input type="submit" value="Login" class="btn btn-success mws-login-button">
                        }
=======
                        <input type="submit" value="确认登录" class="btn btn-success mws-login-button" style="text-shadow: 1px 1px 1px rgba(0, 0, 0, 0)">
>>>>>>> 6774fa2b559ca8b9c1910659b00fe51c01ff54ed
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admins/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admins/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/admins/js/core/login.js"></script>

</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 6774fa2b559ca8b9c1910659b00fe51c01ff54ed
