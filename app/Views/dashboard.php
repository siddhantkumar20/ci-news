<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            <header><h2 class="card-title">Welcome, <?= $user['name'] ?></h2></header>
            
            <br>
            <div class="card-details">
                <p class="card-text"><b>User ID: </b><?= $user['id'] ?></p>
                <p class="card-text"><b>Email: </b><?= $user['email'] ?></p>
                <p class="card-text"><b>Address: </b><?= $user['address'] ?></p>
                <p class="card-text"><b>Phone: </b><?= $user['phone'] ?></p>
            </div>

            <br>
            
            <div class="form-group text-center">
                <a href="<?= base_url('editprofile') ?>"><button class="btn btn-primary w-50">Edit Profile</button></a>
            </div>

            <div class="form-group text-center">
                <a href="<?= base_url('changepassword') ?>"><button class="btn btn-primary w-50">Change Password</button></a>
            </div>

            <form action="<?= base_url("logout") ?>" method="post">
            <div class="form-group d-flex justify-content-center">
                <button class="btn btn-danger w-50" type="submit">Logout</button>
            </div>
            </form>
        </div>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>