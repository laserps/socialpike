<!doctype html>
<html lang="en">

  <head>
    <?php include_once('inc/header.php'); ?>
  </head>

  <body>

    <div class="full-width-div"><!-- full page div -->


      <div class="login-page-height">

        <div class="d-none d-sm-block login-left-side" ><!-- Left side -->

            <div class="col-12 d-flex align-items-start" ><!-- Logo col -->
              <div class="login-logo" >
                <img src="assets/images/SampleLogo.png" class="img-fluid" alt="Logo image">
              </div>
            </div><!-- End Logo col -->


            <div class="d-flex align-items-center logo-text-1" >
              <div style="text-align:center;" >
                  <label class="login-logo-text">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  </label>
              </div>
            </div>

            <div class="d-flex align-items-center logo-text-2" >
              <div style="text-align:center;" >
                <label class="login-logo-text">
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </label>
              </div>
            </div>

        </div><!-- end Left side -->



        <div class="col-12 col-md-6 login-right-side pl-lg-5"><!-- Right side -->


            <div class="row pt-3" ><!-- Login Nav -->

              <div class="d-block d-xl-none d-md-none" style="margin:auto;"><!-- Logo col -->
                <div class="login-logo" >
                  <img src="assets/images/SampleLogo.png" class="img-fluid" alt="Logo image">
                </div>
              </div><!-- End Logo col -->

              <form class="form-inline"><!-- Login Form-->

                <div class="col-12 col-lg-5 col-md-5 login-email-col" ><!-- Email input-->
                      <input type="text" class="form-control login-input input-rounded login-email-resize" id="" placeholder="E-mail">
                </div>

                <div class="col-12 col-lg-5 col-md-5 login-password-col" ><!-- Password Input + Forgot password -->

                      <input type="text" class="form-control input-rounded login-password-resize" id="" placeholder="Password">


                      <a class="login-forgot-password" href="#"> Forgot Password? </a>
                </div>

                <div class="col-12 col-lg-2 col-md-2 login-btn-col" ><!-- Login Button-->
                  <button type="submit" class="btn login-page-btn login-button">LOGIN</button>
                </div>

              </form><!-- End Login Form-->

           </div><!-- End Login Nav -->

           <div class="d-block d-sm-none" ><!-- HR MOBILE -->
              <hr>
           </div><!-- END HR MOBILE -->

            <div class="row" ><!-- Register section -->

                <div class="col-12 mt-lg-5 login-register-text">
                  <h1>Register</h1>
                </div>

                <div class="col-12" >

                    <form class="register-input">
                      <div class="form-group">
                        <input type="text" class="form-control input-rounded" id="" placeholder="First Name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control input-rounded" id="" placeholder="Last Name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control input-rounded" id="" placeholder="E-mail">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control input-rounded" id="" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control input-rounded" id="" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                        <label class="login-birthday-text">Birthday</label>
                        <div class="row login-birthday-row">
                          <select class="form-control register-date register-brithday-picker">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                          </select>
                          <select class="form-control register-month register-brithday-picker">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                          </select>
                          <select class="form-control register-year register-brithday-picker">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row login-gender-row">
                          <div class="form-check form-check-inline ml-3 mr-5">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="" id="" value=""> Male
                            </label>
                          </div>
                          <div class="form-check form-check-inline ml-3 mr-5">
                            <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="" id="" value=""> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="create-account mt-5">
                        <button type="submit" class="btn login-page-btn createaccount-button">Create Account</button>
                      </div>
                    </form>

                    <div class="login-or mt-5"><!-- OR -->
                      <div class="row">

                        <div class="col-2 col-lg-2 col-xl-1 col-md-1">
                        </div>
                        <div class="col-3 col-lg-3 col-xl-3 col-md-4">
                          <hr>
                        </div>
                        <div class="col-2 col-lg-2 col-xl-2 col-md-2" style="text-align:center;">
                          <label>OR</label>
                        </div>
                        <div class="col-3 col-lg-3 col-xl-3 col-md-4">
                          <hr>
                        </div>
                        <div class="col-2 col-lg-2 col-xl-3 col-md-1">
                        </div>

                      </div>
                    </div><!-- END  OR -->

                    <div class="facebook-login">
                      <a href="#">
                        <img src="assets/images/facebook-login.png" class="img-fluid" alt="Logo image">
                      </a>
                    </div>

                </div>

            </div><!-- END Register section -->


        </div><!-- end right side -->

      </div>

    </div><!-- end full page div -->

    <?php include_once('inc/footer.php');?>
    <?php include_once('inc/footer-script.php');?>


  </body>

</html>
