<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
        .card-details{
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="card col-md-9 col-sm-9 col-lg-6">
            <div>
                <header><h2 class="card-title">Forgot Password</h2></header>

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

                <form action="<?= base_url('forgotpassword') ?>" method="post">
                    <div class="form-group">
                        <label for="email" class="form-label">Enter Email:</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="<?= old('email');?>">

                        <?php if (session()->has('validation')) : ?>
                            <?php $validation = session()->get('validation'); ?>
                                <div class="text-danger"><?= $validation->getError('email') ?></div>
                        <?php endif; ?>
                    </div>
                    <br>
                    <div class="form-group d-flex justify-content-center">
                        <button class="btn btn-success w-50" type="submit">Send Reset Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>