<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-color: rgb(255, 151, 67);
        }
        .card {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group{
            margin: 10px;
        }
        .text-center p a{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
    <div class="card col-md-9 col-sm-9 col-lg-6">
        <div>
            <header><h2>Login Page</h2></header>
            
            <form action="<?= base_url("login")  ?>" method="post">

                <?php if(session()->has('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>

                <?php if(session()->has('danger')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->get('danger') ?>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?= old('email');?>">
                    <?php if (session()->has('validation')) : ?>
                        <?php $validation = session()->get('validation'); ?>
                                <div class="text-danger"><?= $validation->getError('email') ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    <?php if (session()->has('validation')) : ?>
                        <?php $validation = session()->get('validation'); ?>
                                <div class="text-danger"><?= $validation->getError('password') ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group d-flex justify-content-center">
                    <button class="btn btn-success w-50" type="submit">Login</button>
                </div>
            </form>

            <div class="text-center">
                <p><a href="<?= base_url('forgotpassword') ?>">Forgot Password?</a></p>
            </div>

            <div class="text-center">
                <p>Need to Register? <a href="<?= base_url('registration') ?>">Register here</a></p>
            </div>

        </div>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
