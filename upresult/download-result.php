<?php
session_start();

require_once('includes/configpdo.php');


require"dompdf/autoload.inc.php";

use Dompdf\Dompdf; 

ob_start();
//error_reporting(0);
?>

<html>
<style>
body {
  padding: 4px;
  text-align: center;
  font-family: serif;
  font-size: 20px;
}

table {
  width: 100%;
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


</style>


<?php 
$totlcount=0;
$totalcn=0;
$totals=0;
$rollid=$_SESSION['rollid'];
$classid=$_SESSION['classid'];
$qery = "SELECT   tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section,tblclasses.ClassNameNumeric from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.RollId=? and tblstudents.ClassId=?";
$stmt21 = $mysqli->prepare($qery);
$stmt21->bind_param("ss",$rollid,$classid);
$stmt21->execute();
                 $res1=$stmt21->get_result();
                 $cnt=1;
                   while($result=$res1->fetch_object())
                  {  ?>
 <p><b><?php echo htmlentities($result->ClassName);?>&nbsp;<?php echo htmlentities($result->ClassNameNumeric);?>&nbsp;<?php echo htmlentities($result->Section);?>  Results Sheet </b></p>              
<p><b>Student Name :</b> <?php echo htmlentities($result->StudentName);?></p>
<p><b>Student Index Number :</b> <?php echo htmlentities($result->RollId);?>
<p><b>Student Class:</b> <?php echo htmlentities($result->ClassName);?>&nbsp;<?php echo htmlentities($result->ClassNameNumeric);?>&nbsp;<?php echo htmlentities($result->Section);?>
<?php }

    ?>
 <table class="table table-inverse" border="1">
                      
                                                <table class="table table-hover table-bordered">
                                                <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Subject</th>    
                                                            <!-- <th>Subject GPA</th> -->
                                                            <th>Credit</th>
                                                            <th>Grade</th>
                                                            <!-- <th>Subject * Credit</th> -->
                                                        </tr>
                                               </thead>
  


                                                  
                                                  <tbody>
<?php                                              
// Code for result
 $query ="select t.StudentName,t.RollId,t.ClassId,t.marks,SubjectId,tblsubjects.SubjectName,tblsubjects.SubjectCredit from (select sts.StudentName,sts.RollId,sts.ClassId,tr.marks,SubjectId from tblstudents as sts join  tblresult as tr on tr.StudentId=sts.StudentId) as t join tblsubjects on tblsubjects.id=t.SubjectId where (t.RollId=? and t.ClassId=?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ss",$rollid,$classid);
$stmt->execute();
                 $res=$stmt->get_result();
                 $cnt=1;
                   while($row=$res->fetch_object())
                  {

    ?>

                                                    <tr>
                                                      <td ><?php echo htmlentities($cnt);?></td>
                                                      <td><?php echo htmlentities($row->SubjectName);?></td>
                                                      <!-- <td><?php echo htmlentities($totalmarks=$row->marks);?></td> -->
                                                      <td ><?php echo htmlentities($totalcredit=$row->SubjectCredit);?></td>
                                                      <!-- <td><?php echo htmlentities($total=(($row->marks) * ($row->SubjectCredit)));?></td> -->
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
                                                		</tr>
                                                    </tr>
<?php 
$totlcount+=$totalmarks;
$totalcn+=$totalcredit;
$totals+=$total;
$cnt++;}
?>

<!-- <tr>
 <th scope="row" colspan="4">Total Credit</th>           
<td ><b><?php echo  htmlentities($totalcn); ?> </b></td>
</tr>
<tr>
 <th scope="row" colspan="4">Total Subject * Credit </th>           
<td ><b><?php echo  htmlentities($totals); ?> </b></td>
</tr> -->

<tr>
<th scope="row" colspan="3" >Total GPA</th>
<td ><b><?php echo htmlentities(round(($totals) / ($totalcn),2)); ?></b>  <b>GPA</b></td>
 </tr>

                                              

                            </tbody>
                        </table>
                        
                    </div>
</html>






<?php
$html = ob_get_clean();


$dompdf = new dompdf();

$dompdf->set_option('enable_html5_parser', TRUE);

$dompdf->loadHtml($html); 
 

$dompdf->setPaper('A4', 'landscape'); 
 

$dompdf->render(); 
 

$dompdf->stream("result");
?>