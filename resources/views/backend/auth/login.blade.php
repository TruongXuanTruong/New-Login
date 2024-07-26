<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Trang Đăng Nhập</title>

    <link href="backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="backend/css/animate.css" rel="stylesheet">
    <link href="backend/css/style.css" rel="stylesheet">
    <link href="backend/css/custom.css" rel="stylesheet">

</head>
<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6 login-content">
                <h2 class="custom-bold text-center">Welcome to TXT +</h2>
                <div class="image-and-text">
                    <img src="backend/img/logo.jpg" atl="Logo" width="300" height="300">
                    <div class="text-content">
                        <p>
                            Chúng tôi cung cấp các giải pháp công nghệ tiên tiến và dịch vụ tư vấn chuyên nghiệp, giúp doanh nghiệp tối ưu hóa hoạt động và đạt được thành công bền vững.
                        </p>
                        <p>
                            <small class="italic-text">Chuyên cung cấp giải pháp sáng tạo cho doanh nghiệp và cá nhân.</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">

                    <form method="post" class="m-t" role="form" action="{{ route('auth.login') }}">
                        @csrf
                        <div class="form-group">
                            <input
                            type="text"
                             name="email"
                             class="form-control"
                             placeholder="Email"
                             value="{{old('email')}}" >
                             @if ($errors->has('email'))
                                <span class="error-message">* {{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input
                            type="password"
                             name="password"
                             class="form-control"
                             placeholder="Password"
                             >
                             @if ($errors->has('password'))
                                <span class="error-message">* {{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Đăng Nhập</button>

                        <a href="#">
                            <small>Lấy lại mật khẩu ?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Bạn chưa có tài khoản?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="register.html">Tạo tài khoản</a>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">`
            <div class="col-md-6">
             2024   © Design <a href="">Xuân Trường</a>
            </div>

        </div>
    </div>

</body>

</html>
