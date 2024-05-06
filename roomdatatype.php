<?php
    session_start();
    include_once('db_conn.php');
    $sql="select * from roomtype";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add room</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css"> 
    <style>
        .text-color{
            text-shadow:5px 6px 5px gray;
            color:#3238a8;
            text-transform: uppercase;
        } 
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php include_once('navbar.php'); ?>
        <?php include_once('sidebar.php'); ?>
        <div class="content-wrapper bg-white">
            <!-- Content Header -->
            <div class="content-header">
                <div class="container-fluid">
                  
                    <div class="row mb-2">
                        <div class="col-sm-12 col-md-9">
                           <!-- <marquee behavior="alternate" direction="" class="text-color">
                            <h1 class="ml-4 text-color">Wel-Come To Aarav  hotel</h1>-->
                         
                        </div>
                        <div class="col-sm-12 col-md-3 bg-success  text-center">
                            <a href="addroom.php"><span class="mt-1 bg-success btn fs-5"> <i class="fa fa-user-plus "></i> Add room </span></a> 
                        </div>
                    </div>        
                </div>
                <div class="container-fluid">
                <div class="row border">   
                    <div class="col-sm-12 col-md-12">
                    <div class="table-responsive">         
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>addroom</th>
                                <th>status</th>
                               
                                <!-- <th>Address</th>
                                <th>curnt_date</th>
                                <th>Time</th> -->
                                <th colspans="3" class="text-center">Action</th>
                                
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                foreach($result as $row){
                            ?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $row['addroom'] ?></td>
                                <td><?php echo $row['status'] ?></td>
                                
                                    <?php
                                        // $datetime=$row['curnt_date'];
                                        // $dateOnly = date('d-m-Y', strtotime($datetime));
                                        // $timeOnly = date('H:i:s', strtotime($datetime));
                                        // echo $dateOnly;
                                    ?>
                                </td>
                             
                                <td>
                                
                                    <a href="addroom.php?id=<?php echo $row['id']?>"><i class="fa fa-edit"></i></a>
                                   <!--<i class="fa fa-eye text-info"></i>-->
                                    <a href="delete.php?id=<?php echo $row['id']?>"><i class="fa fa-trash-alt text-danger"></i>
                                </td>
                            </tr>

                            <?php
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
<script>
    new DataTable('#example');
</script>
<?php
    include_once('footer.php');
?>
</body>
<?php
     include_once('jsheader.php');
?>

</html>