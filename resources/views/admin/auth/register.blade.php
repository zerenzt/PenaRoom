<!doctype html>
    @php
        $title = "Register";
    @endphp
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="theme/css/font-awesome.min.css" rel="stylesheet">
    <link href="theme/css/style.css" rel="stylesheet">

    <title>Register</title>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="form-sub-main">
                <div class="form-group">
                    <input id="email" name="username" class="form-control _ge_de_ol" type="text" placeholder="Enter Username" required="" aria-required="true">
                </div>
                <div class="form-group">
                    <input id="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="" aria-required="true">
                </div>
                <div class="form-group">                                              
                    <input id="password" type="password" class="form-control" name="password" placeholder="********" required="required">
                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                </div>

              <div class="form-group">
                {{-- <div class="login-checkbox">
                    <label>
                        <input type="checkbox" name="aggree">Agree the terms and policy
                    </label>
                </div> --}}
                <div class="check_box_main">
                  <a href="#" class="pas-text">Forgot Password</a>
                </div>
              </div>

              <div class="form-group">
                <div class="btn_uy">
                  <a href="#"><span>Register</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>