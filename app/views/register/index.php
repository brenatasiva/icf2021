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

    .pretty {
        position: relative;
        display: inline-block;
        margin-right: 1em;
        white-space: nowrap;
        line-height: 1;
        user-select: none;
    }

    input[type="checkbox"],
    input[type="radio"] {
        /*        box-sizing: border-box;*/
        padding: 0;
    }

    .pretty input {
        position: absolute;
        left: 0;
        top: 0;
        min-width: 1em;
        width: 100%;
        height: 100%;
        z-index: 2;
        opacity: 0;
        margin: 0;
        padding: 0;
        cursor: pointer;
    }

    .pretty .state label {
        position: initial;
        display: inline-block;
        font-weight: 400;
        margin: 0;
        text-indent: 1.5em;
        min-width: calc(1em + 2px);
    }

    .pretty .state label::before {
        border-color: white !important;
    }

    .pretty .state label::after,
    .pretty .state label::before {
        content: '';
        width: calc(1em + 2px);
        height: calc(1em + 2px);
        display: block;
        box-sizing: border-box;
        border-radius: 0;
        border: 1px solid transparent;
        z-index: 0;
        position: absolute;
        left: 0;
        top: calc((0% - (100% - 1em)) - 8%);
        background-color: transparent;
    }

    .pretty .state label {
        /*font-weight: 400;*/
        text-indent: 1.5em;
    }

    .pretty.p-default input:checked~.state label::after {
        background-color: white !important;
    }

    .pretty.p-default .state label::after {
        -webkit-transform: scale(.6);
        -ms-transform: scale(.6);
        transform: scale(.6);
    }

    .w-30 {
        width: 30% !important;
    }
</style>
<div class="user-bg">
    <div class="container">
        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex justify-content-center inner-container">
                <img src="<?= BASECSS; ?>/img/login/icf_2021_blue_logo.png" class="logo-icf">
            </div>
            <div class="d-flex justify-content-center">
                <form class="w-50 form-user-input d-grid" action="<?= BASEURL; ?>/user/registUser" method="post">
                    <div class="pb-4">
                        <input type="text" class="form-control user-input" id="nama" name="nama" placeholder="Full Name" required>
                    </div>
                    <div class="pb-4">
                        <input type="email" class="form-control user-input" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="pb-4">
                        <input type="text" class="form-control user-input" id="nomor" name="nomor" placeholder="Nomor WA" required>
                    </div>
                    <div class="pb-4">
                        <input type="text" class="form-control user-input" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="pb-4" style="position: relative;">
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
                        <input type="password" class="form-control user-input" id="password" style="padding-right: 3rem;" name="password" placeholder="Password" required>
                    </div>
                    <div class="pb-4" style="position: relative;">
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
                        <input type="password" class="form-control user-input" id="confirmPassword" style="padding-right: 3rem;" name="confirmPassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="pt-1 pb-4 text-light d-flex justify-content-start">
                        <span style="width: 40% !important;">Mahasiswa UBAYA?</span>
                        <div style="width: 25% !important;">
                            <div class="pretty p-default">
                                <input type="radio" name="rdomahasiswa" value="ya" required>
                                <div class="state">
                                    <label>Ya</label>
                                </div>
                            </div>
                        </div>
                        <div style="width: 25% !important;">
                            <div class="pretty p-default">
                                <input type="radio" name="rdomahasiswa" value="bukan" required>
                                <div class="state">
                                    <label>Bukan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="nrp"></div>
                    <div class="pt-4 pb-5">
                        <button type="input" class="btn btn-primary btn-user-submit" name="btnsubmit" type="button"><b>SIGN UP</b></button>
                    </div>
                    <div class="pt-4 pb-5 text-light d-flex justify-content-center">
                        <label for="" class="form-label">Already have an account? <a href="<?= BASEURL; ?>/user/login" style="color: orange !important;">Login</a></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('input[name="rdomahasiswa"]').click(function() {
        var checkedBtn = document.querySelector('input[name="rdomahasiswa"]:checked');
        if (checkedBtn.value == "ya") {
            document.getElementById("nrp").innerHTML = '<div class="pt-1 pb-4 d-flex justify-content-end"><div style="width: 60% !important;"><input type="text" maxlength="10" class="form-control user-input" id="nrp" name="nrp" placeholder="NRP" required></div></div>';
        } else {
            document.getElementById("nrp").innerHTML = '';
        }
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