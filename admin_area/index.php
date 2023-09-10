<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image{
            width: 100px;
            object-fit: contain;
        }
        .footer{
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="p-3">
                    <a href="#"><img src="../images/pineapple.jpeg" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <button class="my-3"><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
            </div>
        </div>
        <div class="bg-info p-3 text-center footer">
            <p>All rights reserved</p>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>