<?php
    //session_start();
    include_once 'db_conn.php';
    $sql="select * from users";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    // print_r($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>all user</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    
    <style>
    .heding {
        /* height: 30px; */
    }
    </style>
</head>

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
                        <div class="col-sm-6">
                            <span class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="adduser.php"><button>Add User</button></a></li>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="border table-responsive">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Dod</th>
                                <th>State</th>
                                <th>Gender</th>
                                <th>Action</th>

                                
                            </tr>
                        </thead>
                        <?php 
                        $i=1;
                        foreach($result as $row){
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['password']?></td>
                                <td><?php echo $row['phone']?></td>
                                <td><?php echo $row['address']?></td>
                                <td><?php echo $row['dob']?></td>
                                <td><?php echo $row['state']?></td>
                                <td><?php echo $row['gender']?></td>
                                
                                 <td>
                                    <a href="adduser.php?id=<?php echo $row['id']?>"><i class="fa fa-edit"></i></a>
                                    <i class="fa fa-eye text-info"></i>
                                    <a href="delete.php?id=<?php echo $row['id']?>"><i class="fa fa-trash-alt text-danger"></i>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                        }
                        ?>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Dob</th>
                                <th>State</th>
                                <th>Gender</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
<script>
    new DataTable('#example');
</script>
<?php
    include_once "footer.php";
?>
</body>
<?php
        include_once('jsheader.php');
        ?>

</html>