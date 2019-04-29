<?php include("config.php");?>
<!DOCTYPE HTML>
<html>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
<head>
    <title>DataView | 42.1</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center mt-5">
        <img src="image/logo-dark-.png" alt="">
    </div>
    <div class="container mt-5 mb-3">
        <b style="color:#660000;">Registration Details </b>
    </div>
    <div class="container">
        <table class="table table-striped">
        <thead>
            <tr style="color:#fff; background:#660000;">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Date</th>
            <th scope="col">E-mail</th>
            <th scope="col">Meal-a-Mile</th>
            <th scope="col">Recovery Zone</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $query =  "select * from registration order by created_date desc";

        $result = $conn->query($query);
        $i =1;
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
          ?>
          <tr>
            <th scope="row"><?php echo $i++ ?></th>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["mobile_number"] ?></td>
            <td><?php $new_date = date('d-m-Y', strtotime($row["created_date"]));
                echo $new_date ?>
            </td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["meal_a_mile"] ?></td>
            <td><?php echo $row["recovery_zone"] ?></td>
          </tr>
<?php } }
$conn->close();
          ?>
        </tbody>
        </table>
        </div>
</body>
</html>
