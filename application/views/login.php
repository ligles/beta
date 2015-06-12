<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= css_url('bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="<?= css_url('style.css'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container marge-top-login">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="text-center">Connexion !!! </h1>
            </div>
            <div class="panel-body">
                <?php echo validation_errors(); ?>
                <?php echo form_open('auth/login'); ?>
                    <div class="form-group">
                        <label for="username">Login</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success form-control">Connectez-vous !</button>
                    </div>
                <?php echo form_close();?>
            </div>
            </div>
        <?php if($error): ?>
            <div class="alert alert-danger">Identifiants invalides</div>
        <?php endif; ?>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="<?= js_url('jquery.min.js'); ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= js_url('bootstrap.min.js'); ?>"></script>

</body>
</html>