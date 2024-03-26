<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Password</title>
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
                <header><h2 class="card-title">Set Password</h2></header>

                <br>
                <form action="<?= base_url('setpassword') ?>" method="post">
                <div class="form-group">
                <label for="password" class="form-label">Set New Password:</label>
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
                
                <br>
                <div class="form-group d-flex justify-content-center">
                    <button class="btn btn-success w-50" type="submit">Submit</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>