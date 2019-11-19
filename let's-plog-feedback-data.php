<?php include("admin/config.php");?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Let's-Plog-Feedback-Data | 42.1</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
    <script src="js/jquery-1.11.0.min.js"></script>
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin/css/dataView.css">
    
    <script type="text/javascript">
      
        $(function() {
            $("#StartDate").datepicker({
                    changeYear:true,
                    yearRange: "2019:2025"
                });
          
            $("#EndDate").datepicker({
                    changeYear:true,
                    yearRange: "2019:2025"
                });
            }); 

        function getData(){

            $startDate = $("#StartDate").val();
            $endDate = $("#EndDate").val();

            $.post("getData.php",{
                startDate : $startDate,
                endDate : $endDate
            }, function(response,status){
                if(response)
                {
                    var flag = 0;
                    $("#myTable tr").remove();
                    var test = JSON.parse(response);
                    for(var i of test)
                    {
                        if(i.name == null)
                        {
                            i.name = "";
                        }
                        if(i.email == null)
                        {
                            i.email = "";
                        }
                        if(i.mobile_number == null)
                        {
                            i.mobile_number = "";
                        }
                        $('#myTable').append('<tr><th scope="row">'+ ++flag +'</th><td>'+ i.name +'</td><td>' + i.email + '</td><td>' + i.mobile_number + '</td><td>' + i.formated_date + '</td><td class="text-center">' + i.meal_a_mile + '</td><td class="text-center">' + i.recovery_zone + '</td></tr>');
                    }
                }
                else
                {
                    $("#myTable tr").remove();
                    $('#myTable').append('<tr><th scope="row"></th><td style="color:red;">No Data Found</td><td></td><td></td><td></td><td></td><td></td></tr>');
                }
                
            });
        }
    </script>

</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="image/logo-dark.png" width="100" height="50" alt="">
            </a>
        </div>
    </nav>
    
    <div class="container mt-3 mb-4">
    <form action="exportPlogFeedbackData.php" id="myForm" method="post">
        <div class="row"> 
            <div class="col-lg-4 col-md-2"><b style="color:#660000;">Let's Plog - Ahmedabad Feedback Details</b></div>
            <div class="col-md-3 text-right"><!-- <input type="text" class="form-control date-input" id="StartDate" name="fromDate" placeholder="From Date"> --></div>
            <div class="col-md-3 text-right"><!-- <input type="text" class="form-control date-input" id="EndDate" name="toDate" placeholder="To Date"> --></div>
            <div class="col-lg-1 col-md-2 text-right">
                <!-- <button type="button" class="btn btn-secondary" onclick="getData()">Search</button> -->
            </div>
            <div class="col-lg-1 col-md-2 text-right">
                <button type="submit" class="btn btn-secondary">Export</button>
            </div>
            
        </div>
    </form>
    </div>
    <div class="container">
        <table class="table table-striped mb-5">
        <thead>
            <tr class="tbl-header">
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center" style="width:20%;">Plogger-ID</th>
                <th scope="col" class="text-center" style="width:20%;">Next-Plog</th>
                <th scope="col" class="text-center" style="width:20%;">Recommend-Plog</th>
                <th scope="col" class="text-center" style="width:20%;">Enjoy-Event</th>
                <th scope="col" class="text-center" style="width:20%;">Done-Better</th>
            </tr>
        </thead>
        <tbody id="myTable">
        <?php
            
            $query = "SELECT * FROM lets_plog_feedback";
            $result = $conn->query($query);
            $i =1;
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <th scope="row" class="text-center"><?php echo $i++ ?></th>
                    <td class="text-center"><?php echo "PL - ".$row["plogger_id"] ?></td>
                    <td class="text-center"><?php echo $row["next_plog"] ?></td>
                    <td class="text-center"><?php echo $row["recommend_plog"] ?></td>
                    <td class="text-center"><?php echo $row["enjoy_event"] ?></td>
                    <td class="text-center"><?php echo $row["done_better"] ?></td>
                </tr>
            <?php } }
            $conn->close();
                
            
          //$query =  "select * from registration order by created_date desc";
        ?>
        </tbody>
        </table>
        </div>
</body>
</html>

