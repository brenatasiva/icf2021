<form method="post" action="<?= BASEURL; ?>/user/cekLogin">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Login</button>
        <label for="" class="form-label">Dont have an account yet? <a href="<?= BASEURL; ?>/user/register">Register</a></label>
    </div>
</form>