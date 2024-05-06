<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include_once('navbar.php'); ?>
        <?php include_once('sidebar.php'); ?>
        <div class="content-wrapper">
            <!-- Content Header -->
            <div class="content-header">
            <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-16">
                            <span class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href=""></a></li>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="heding">
                <form action="" method="POST">
      <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
      <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter phone">
    </div>
      <div class="form-group">
      <label for="address">Address:</label>
      <input type="text"  name="address" class="form-control" id="address" placeholder="Enter Address">
    </div>
    <div class="from-group">
    <button type="submit" name="submit" class="btn btn-default">Submit</button>
  </form>
                </div>
            </div>
        </div>
    </div>
</html>
</body>
</html>