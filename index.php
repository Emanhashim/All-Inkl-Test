<?php
$conn = mysqli_connect("localhost", "root", "","all-inkl-employee");
$count =0;

?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF -8">
        <meta name ="viewport" content ="width=device-width, initial-scale = 1.0">
        <title>ALL-INKL Employees</title>
   
   <link rel="stylesheet" href="style.css" >
   
    </head>

    <body>

<center><h1>ALL-INKL Employees</h1></center>
<div class="container">
    <div class="table list">
         <table>
            <tr>
                <th>Employee Number</th>
                <th>Name </th>
                <th>Phone Number</th>
                <th>Address</th>
            </tr>

<?php

$sql = "SELECT * FROM `list`";
$result= mysqli_query($conn, $sql);
while ($row =mysqli_fetch_assoc($result)){

    $count++;

    echo
    '
    <tr>
    <td>'.$row['employee_id'].'</td>
    <td>'.$row['employee_name']. '</td>
    <td>'.$row['phone'].'</td>
    <td>'.$row['address'].'</td>
</tr>
    ';


}

?>


            <!-- <tr>
                <th>1</th>
                <th>eman </th>
                <th>0922420131</th>
                <th>dubai</th>
            </tr> -->
         </table>
    </div>
     
    <div class="table form"></div>


    <table>
        <form action="insert.php" method = "post">

                <tr>
                <th>Employment Number</th>
                <td><input type="text" placeholder ="Employee ID" name ="employee_id"></td>
                </tr>

                <tr>
                <th>Name</th>
                <td><input type="text" placeholder ="Name" name ="employee_name"></td>
                </tr>

                <tr>
                <th>Phone Number</th>
                <td><input type="text" placeholder ="Phone Number" name = "phone"></td>
                </tr>

                <tr>
                <th>Address</th>
                <td><input type="text" placeholder ="Address" name = "address"></td>
                </tr>

                <tr>
                <td></td>
                <td><button type = "submit">Insert Employee Data</button></td>

                </tr>
        </form>
    </table>
    <div class="table count">
        <div> <?php echo $count; ?> Employees</div>

    </div>

</div>

    </body>
</html>