<style type="text/css">
    .user-bg {
        background-image: url("<?= BASEURL; ?>/img/login/login_bg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        padding: 110px 0px 290px 0px;
    }

    .user-input {
        background: #2b313d;
        color: white;
        border-radius: 10px !important;
    }

    .user-input:focus {
        background: #2b313d;
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
                    <img src="<?= BASEURL; ?>/img/login/icf_2021_blue_logo.png" class="logo-icf">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form class="w-50 form-user-input" method="post" action="<?= BASEURL; ?>/user/resetPassword">
                    <div class="pb-4">
                        <input type="text" class="form-control user-input" id="username" name="username" readonly value="<?= $data['username']; ?>">
                    </div>
                    <div class="pb-2">
                        <input type="password" class="form-control user-input" id="password1" name="password" placeholder="Password">
                    </div>
                    <div class="pb-2">
                        <input type="password" class="form-control user-input" id="password2" name="repassword" placeholder="Re-type Password">
                    </div>
                    <div class="pt-4 pb-5">
                        <button type="submit" class="btn btn-primary btn-user-submit"><b>RESET</b></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>