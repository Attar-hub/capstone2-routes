<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 350px; border-radius: 15px;">

        <h3 class="text-center mb-3">Login</h3>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger text-center">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('login/process') ?>" method="post">
            
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary w-100">
                Login
            </button>

        </form>

    </div>
</div>

</body>
</html>