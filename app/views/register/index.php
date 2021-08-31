<style type="text/css">
    .user-bg {
        background-image: url("<?= BASEURL; ?>/img/register/register_bg.jpg");
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
                <img src="<?= BASEURL; ?>/img/login/icf_2021_blue_logo.png" class="logo-icf">
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
                    <div class="pb-4">
                        <input type="password" class="form-control user-input" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="pb-4">
                        <input type="password" class="form-control user-input" id="password" name="confirmPassword" placeholder="Confirm Password" required>
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
</script>