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
                <form class="w-50 form-user-input" method="post" action="<?= BASEURL; ?>/user/cekLogin">
                    <div class="pb-4">
                        <input type="text" class="form-control user-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Username">
                    </div>
                    <div class="pb-2">
                        <input type="password" class="form-control user-input" id="exampleInputPassword1" name="password" placeholder="Password">
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
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalToggleLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="reset1">
                    <div class="input-group mb-3" id="modalReset">
                        <input type="text" class="form-control" placeholder="username" aria-describedby="button-addon2" id="usernameReset" required>
                        <button type="button" class="btn btn-primary" id="buttonSend">Send</button><br>
                    </div>
                </div>
                <div id="reset2">
                    <div class="input-group mb-3" id="modalReset2">
                        <form action="<?= BASEURL; ?>/user/reset" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                                <input type="text" class="form-control" readonly name="username" id="modalUsername">
                                <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                                <input type="text" class="form-control" readonly id="modalEmail">
                            </div>
                            <input type="text" class="form-control" name="code" placeholder="code" aria-describedby="button-addon2" id="codeReset" required>
                            <button type="submit" class="btn btn-primary" id="buttonReset">Reset</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#reset2').hide();
    var username = "";

    $('body').on('click', '#buttonSend', function() {

        username = $('#usernameReset').val();

        if (username != "") {
            $.ajax({
                method: 'post',
                url: '<?= BASEURL; ?>/user/requestReset',
                data: {
                    username: username
                },
                dataType: 'json',
                success: function(data) {
                    $('#reset1').hide();
                    $('#reset2').show();
                    $('.modal-header').html("Please check your email for confirmation code");
                    $('#modalUsername').val(data[0]['username']);
                    $('#modalEmail').val(data[0]['email']);
                }
            });
        }
    });

    // $('body').on('click', '#buttonReset', function() {

    //     var code = $('#codeReset').val();
    //     if (code != "") {
    //         $.ajax({
    //             method: 'post',
    //             url: '<?= BASEURL; ?>/user/checkCode',
    //             data: {
    //                 username: username,
    //                 code: code
    //             },
    //             dataType: 'json',
    //             success: function(data) {
    //                 $('#reset2').hide();
    //                 $('#reset1').show();
    //             }
    //         });
    //     }


    // });
</script>