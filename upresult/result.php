<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Result Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <style>
body {
  padding: 4px;
  text-align: center;
  font-family: serif;
  font-size: 20px;
  /* background-image: url(assets/images/results.png); */
      background-color: #ffffff;
      background-size: cover;
      height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

table {
  width: 50%;
  margin: 10px auto;
  table-layout: auto;
}

.fixed {
  table-layout: fixed;
}

table,
td,
th {
  border-collapse: collapse;
}

th,
td {
  padding: 1px;
  border: solid 1px;
  text-align: center;
}
.dd{
    background-color:#66ff66;
    color:black;
    border-radius: 55px
}

</style>
    <body>
        <div class="main-wrapper">
            <div class="content-wrapper">
                <div class="content-container">

         
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-12">
                                    <h2 class="title" align="center">Result Management System</h2>
                                </div>
                            </div>
                            <!-- /.row -->
                          
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section" >
                            <div class="container-fluid">

                                <div class="row">
                              
                             

                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <!-- <h3 align="center">Student Result Details</h3>
                                                    <hr /> -->
<?php
// code Student Data
$rollid=$_POST['rollid'];
$classid=$_POST['class'];
$_SESSION['rollid']=$rollid;
$_SESSION['classid']=$classid;
$qery = "SELECT   tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.ClassNameNumeric,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.RollId=:rollid and tblstudents.ClassId=:classid ";
$stmt = $dbh->prepare($qery);
$stmt->bindParam(':rollid',$rollid,PDO::PARAM_STR);
$stmt->bindParam(':classid',$classid,PDO::PARAM_STR);
$stmt->execute();
$resultss=$stmt->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($stmt->rowCount() > 0)
{
foreach($resultss as $row)
{   ?>
<p><b>Student Name :</b> <?php echo htmlentities($row->StudentName);?></p>
<p><b>Student Index Number :</b> <?php echo htmlentities($row->RollId);?></p>
<p><b>Student Class:</b> <?php echo htmlentities($row->ClassName);?>&nbsp;<?php echo htmlentities($row->ClassNameNumeric);?>&nbsp;<?php echo htmlentities($row->Section);?>
<?php }

    ?>
 
    
                                            </div>
                                            <div class="panel-body p-20">







                                                <table class="table table-hover table-bordered">
                                                <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th> Subject</th>    
                                                            <!-- <th>Subject GPA</th> -->
                                                            <th>Credit</th>
                                                            <th>Grade</th>
                                                            <!-- <th>Subject * Credit</th> -->
                                                        </tr>
                                               </thead>
  
                                               

                                                	
                                                	<tbody>
<?php                                              
// Code for result

 $query ="select t.StudentName,t.RollId,t.ClassId,t.marks,SubjectId,tblsubjects.SubjectName,tblsubjects.SubjectCredit from (select sts.StudentName,sts.RollId,sts.ClassId,tr.marks,SubjectId from tblstudents as sts join  tblresult as tr on tr.StudentId=sts.StudentId) as t join tblsubjects on tblsubjects.id=t.SubjectId where (t.RollId=:rollid and t.ClassId=:classid)";
$query= $dbh -> prepare($query);
$query->bindParam(':rollid',$rollid,PDO::PARAM_STR);
$query->bindParam(':classid',$classid,PDO::PARAM_STR);
$query-> execute();  
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;

if($countrow=$query->rowCount()>0)
{ 
foreach($results as $result)

   { ?>

                                                		<tr>
<th scope="row" ><?php echo htmlentities($cnt);?></th>
<td ><?php echo htmlentities($result->SubjectName);?></td>
<!-- <td ><?php echo htmlentities($totalmarks=$result->marks);?></td> -->
<td ><?php echo htmlentities($totalcredit=$result->SubjectCredit);?></td>

					<?php
						if($totalmarks > 4.0){
                            echo "<td>Invalid GPA</td>";
                        }
                        elseif($totalmarks == 4.0){
                            echo "<td>A+</td>";
                        }
                        elseif($totalmarks >= 3.75){
                            echo "<td>A</td>";
                        }
                        elseif($totalmarks >= 3.25){
                            echo "<td>A-</td>";
                        }
                        elseif($totalmarks >= 3.10){
                            echo "<td>B+</td>";
                        }
                        elseif($totalmarks >= 2.75){
                            echo "<td>B-</td>";
                        }
                        elseif($totalmarks >= 2.35){
                            echo "<td>B</td>";
                        }
                        elseif($totalmarks >= 2.10){
                            echo "<td>C+</td>";
                        }
                        elseif($totalmarks == 2.0){
                            echo "<td>C-</td>";
                        }
                        elseif($totalmarks >= 0.0){
                            echo "<td>ISE</td>";
                        }
					?> 
<!-- <td><?php echo htmlentities($total=(($result->marks) * ($result->SubjectCredit)));?></td> -->
                                                		</tr>
<?php 

$totlcount+=$totalmarks;
$totalcnt+=$totalcredit;
$totals+=$total;
$cnt++;
}
?>




<tr>
<th scope="row" colspan="3" >Total GPA</th>
<td ><b><?php echo htmlentities(round(($totals) / ($totalcnt),2)); ?></b>  <b>GPA</b></td>
 </tr>
 
<tr>
<th scope="row" colspan="3">Download Result</th>           
<td class="dd"><b><a href="download-result.php">Download</a> </b></td>
</tr>                        


 <?php } else { ?>     
<div class="alert alert-warning left-icon-alert" role="alert">
                                            <strong>Notice!</strong> Your result not declare yet
 <?php }
?>
                                        </div>
 <?php 
 } else
 {?>

<div class="alert alert-danger left-icon-alert" role="alert">
strong>Oh snap!</strong>
<?php
echo htmlentities("Invalid Roll Id");
 }
?>
                                        </div>



                                                	</tbody>
                                                </table>

                                            </div>
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="form-group">
                                                           
                                                            <div class="col-sm-6">
                                                               <a href="index.php" class="text-black"><i class="fa fa-home"></i> <span> Back to Home</span></a>
                                                            </div>
                                                        </div>

                                </div>
                                <!-- /.row -->
  
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                  
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            // $(function($) {

            // });


//             function CallPrint(strid) {
// var prtContent = document.getElementById("exampl");
// var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
// WinPrint.document.write(prtContent.innerHTML);
// WinPrint.document.close();
// WinPrint.focus();
// WinPrint.print();
// WinPrint.close();
// }
</script>

        

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>
