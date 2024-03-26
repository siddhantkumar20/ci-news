<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
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
            <header><h2>Registration Page</h2></header>
            <form action="<?= base_url("registration")  ?>" method="post">

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
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?= old('name');?>">
                    <?php if (session()->has('validation')) : ?>
                        <?php $validation = session()->get('validation'); ?>
                                <div class="text-danger"><?= $validation->getError('name') ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?= old('email');?>">
                    <?php if (session()->has('validation')) : ?>
                        <?php $validation = session()->get('validation'); ?>
                                <div class="text-danger"><?= $validation->getError('email') ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="<?= old('address');?>">
                    <?php if (session()->has('validation')) : ?>
                        <?php $validation = session()->get('validation'); ?>
                                <div class="text-danger"><?= $validation->getError('address') ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone" value="<?= old('phone');?>">
                    <?php if (session()->has('validation')) : ?>
                        <?php $validation = session()->get('validation'); ?>
                                <div class="text-danger"><?= $validation->getError('phone') ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Set Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Set Password" name="password">
                    <?php if (session()->has('validation')) : ?>
                        <?php $validation = session()->get('validation'); ?>
                                <div class="text-danger"><?= $validation->getError('password') ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="confirm_password" class="form-label">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
                    <?php if (session()->has('validation')) : ?>
                        <?php $validation = session()->get('validation'); ?>
                                <div class="text-danger"><?= $validation->getError('confirm_password') ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group d-flex justify-content-center">
                    <button class="btn btn-success w-50" type="submit">Register</button>
                </div>
            </form>

            <div class="text-center">
                <p>Already Registered? <a href="<?= base_url('login') ?>">Login here</a></p>
            </div>
        </div>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>