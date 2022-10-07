<?php
session_start();
error_reporting(0);
include('includes/config.php');
{
}?>

         <!-- ========== TOP NAVBAR ========== -->
         <?php include('includes/topbar.php');?>   
       
       <div class="content-wrapper">
           <div class="content-container">


<?php include('includes/leftbar.php');?>  
<div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Progressive</h2>
                                </div>
                                
                            </div>
                      
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
            							<li>Progressive</li>
            							
            						</ul>
                                </div>
                               
                            </div>
                      
                        </div> 
<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [ 'Subject', 'GPA'],
          [ "OSCS", 3.70],
          ["Project Management", 3.30],
          ["Management and Applied Economics", 3.0],
          ["RAD", 3.0],
          ["Principals of Software Engineering",2.70],
          ["OOAD", 4.0],
          ["Communication Skills III",2.70]
        ]);

        var options = {
          chart: {
            title: 'Progressive Report',
            subtitle: 'GPA, Subject'
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 1400px; height: 600px;"></div>
  </body>
</html



<?php include('includes/footer.php');?>
