<?php include 'inc/header.php' ?>
<div class="container pt-5">
    <h1 class="text-center display-4 mb-4">login & register PHP</h1>
    <div class="row justify-content-center">
        <div class="col-12 col-xl-5">
            <div class="card shadow">
                <div class="card-header p-0 pt-1">
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab"
                            aria-controls="login" aria-selected="true">Login</a>
                        <a class="nav-item nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                            aria-controls="register" aria-selected="false">Register</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form action="bin/login.php" method="post">
                                <div class="form-group">
                                    <label for="">USERNAME</label>
                                    <input type="text" class="form-control form-control-sm" name="username" id=""
                                        placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label for="">PASSWORD</label>
                                    <input type="password" class="form-control form-control-sm" name="password" id=""
                                        placeholder="password">
                                </div>
                                <button class="btn btn-block btn-success" type="submit">LOGIN</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <form action="bin/register.php" method="post">
                                <div class="form-group">
                                    <label for="">USERNAME</label>
                                    <input type="text" class="form-control form-control-sm" name="username" id=""
                                        placeholder="username">
                                </div>
                                <div class="form-group">
                                    <label for="">EMAIL</label>
                                    <input type="email" class="form-control form-control-sm" name="email" id=""
                                        placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="">PASSWORD</label>
                                    <input type="password" class="form-control form-control-sm" name="password" id=""
                                        placeholder="password">
                                </div>
                                <button class="btn btn-block btn-info" type="submit">REGISTER</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'inc/footer.php' ?>