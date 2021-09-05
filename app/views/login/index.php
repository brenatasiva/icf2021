<style type="text/css">
    .user-bg {
        background-image: url("<?= BASECSS; ?>/img/login/login_bg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        padding: 110px 0px 290px 0px;
    }

    .user-input {
        background: transparent;
        color: white;
        border-radius: 10px !important;
    }

    .user-input:focus {
        background: transparent;
        color: white;
    }

    .logo-icf {
        height: auto;
        width: 280px;
    }

    .inner-container {
        padding-bottom: 60px;
    }

    .form-user-input {
        min-width: 300px !important;
        max-width: 450px !important;
    }

    .btn-eye {
        position: absolute;
        color: white;
        background: transparent;
        border: 0;
        z-index: 2;
        top: 10px;
        right: 13px;
    }

    .bi-eye,
    .bi-eye-slash {
        display: none;
    }

    .bi-eye.show {
        display: block;
    }

    .bi-eye-slash.show {
        display: block;
    }

    .btn-user-submit {
        width: 100%;
        color: #2b313d;
        background: #009b8d;
        border: 0px !important;
    }

    .btn-user-submit:hover {
        color: #2b313d;
        background-color: #02756b;
    }

    .crop-login {
        width: 280px;
        height: 100px;
        overflow: hidden;
        margin: auto;
    }

    .crop-login img {
        margin-top: -30px;
    }
</style>
<div class="user-bg">
    <div class="container">
        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-center inner-container">
                <div class="crop-login">
                    <img src="<?= BASECSS; ?>/img/login/icf_2021_blue_logo.png" class="logo-icf">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form class="w-50 form-user-input" method="post" action="<?= BASEURL; ?>/user/cekLogin">
                    <div class="pb-4">
                        <input type="text" class="form-control user-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Username">
                    </div>
                    <div class="pb-2" style="position: relative;">
                        <button type="button" class="btn-eye" tabindex="-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" id="eyeShow" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" id="eyeClose" class="bi bi-eye-slash show" viewBox="0 0 16 16">
                                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
                                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
                                <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
                            </svg>
                        </button>
                        <input type="password" class="form-control user-input" style="padding-right: 3rem;" id="loginPassword" name="password" placeholder="Password">
                    </div>
                    <div class="pb-3 d-flex justify-content-end">
                        <a data-bs-toggle="modal" role="button" href="#modalToggle" style="color: orange !important;">Forgot Password?</a>
                    </div>
                    <div class="pt-4 pb-5">
                        <button type="submit" class="btn btn-primary btn-user-submit"><b>LOGIN</b></button>
                    </div>
                    <div class="pt-4 pb-5 text-light d-flex justify-content-center">
                        <label for="" class="form-label">Don't have an account yet? <a href="<?= BASEURL; ?>/user/register" style="color: orange !important;">Sign Up</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalToggle" aria-hidden="true" aria-labelledby="modalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-5 center" style="background: #eeece7;">
            <div class="modal-header" style="position: relative; justify-content: center; border-bottom: 0; padding: 0 1rem 1rem 1rem;">
                <h1 class="modal-title circular-icf text-center" id="modalToggleLabel" style="font-weight: bold; margin-bottom: 0.5rem;">Forgot Password</h1>
                <button type="button" class="btn-close" style="position: absolute; right: -15px; top: -15px;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="reset1">
                    <form action="<?= BASEURL; ?>/user/requestReset" method="post">
                        <p class="text-center" style="font-weight: lighter;">Enter your username</p>
                        <div class="input-group mb-3" id="modalReset" style="display: block;">
                            <input type="text" class="form-control mb-2" style="width: 100%; border-top-right-radius: 0.25rem; border-bottom-right-radius: 0.25rem;" placeholder="username" name="username" aria-describedby="button-addon2" id="usernameReset" required>
                            <button type="submit" class="btn btn-primary btn-user-submit" style="width: 100%; border-radius: 0.25rem; margin-left: 0;" id="buttonSend">Reset Password</button><br>
                        </div>
                    </form>
                    <div class="text-dark d-flex justify-content-center">
                        <label class="form-label" style="margin-bottom: 0;">Already have the code? <a href="<?= BASEURL; ?>/user/reset" style="color: orange !important;" id="insertCode">Insert Code</a></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#buttonSend').click(function() {
        var btn = $(this);
        btn.prop('disabled', true);
        setTimeout(function() {
            btn.prop('disabled', false);
        }, 15000);
    });

    $("body").on('click', '.btn-eye', function() {
        var passType = $(this).next().attr("type");
        if (passType == "password") {
            $(this).next().attr("type", "text");
            $(this).children("#eyeShow").addClass("show");
            $(this).children("#eyeClose").removeClass("show");
        } else {
            $(this).next().attr("type", "password");
            $(this).children("#eyeShow").removeClass("show");
            $(this).children("#eyeClose").addClass("show");
        }
    });
</script>