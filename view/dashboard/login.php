<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'view/dashboard/partials/head.php'; ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class='panel-title'>Please Login In to Continue</h3>
                    </div>
                    <div class="panel-body">
                        <form action="/dashboard/check-login" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter your username" name="username" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter your password" name="password" type="password">
                                </div>                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit">
                                    Login
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'view/dashboard/partials/js.php'; ?>
</body>
</html>