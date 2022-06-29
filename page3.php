<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Standing / Quizzes / Non-Academics / Major Exam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Open+Sans&family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  

      
    <section id="box-section">
    <form action="" method="post">
    
    <div class="container-fluid glass">
    <div class="row" id="reg">
        <div id="userinfo" class="border p-4 h-50" style="width: 1400px; border-radius: 5px;">

            <center><h1 class="title">STUDENT INFORMATION</h1></center>
            <hr>
                
                    <table id="table-reg" class="table table-borderless mt-5">
                    <thead>
                        <tr>
                        <th scope="col">Student Name:</th>
                        <th scope="col">
                            <?php 
                                $Name = $_SESSION['txtName'];
                                echo "<div style='font-weight: normal; text-transform: uppercase; text-decoration: underline;'>$Name</div>";
                            ?>
                        </th>
                        <th scope="col">Year:</th>
                        <th scope="col">
                            <?php 
                                $Year = $_SESSION['txtYear'];
                                echo "<div style='font-weight: normal; text-transform: uppercase; text-decoration: underline;'>$Year</div>";
                            ?>
                        </th>
                        <th scope="col">Picture:</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">Student Number</th>
                        <td>
                            <?php 
                                $SN = $_SESSION['txtStudentNum'];
                                echo "<div style='font-weight: normal; text-transform: uppercase; text-decoration: underline;'>$SN</div>";
                            ?>
                        </td>
                        <td>
                            <strong>Semester:</strong>
                        </td>
                     
                        <td>
                            <?php 
                                $Sem = $_SESSION['txtSemester'];
                                echo "<div style='font-weight: normal; text-transform: uppercase; text-decoration: underline;'>$Sem</div>";
                            ?>
                        </td>
                        <td>
                          
                        </td>
                        </tr>
                        
                        <tr>
                        <th scope="row">Course:</th>
                        <td>
                            <?php 
                                $Course = $_SESSION['txtCourse'];
                                echo "<div style='font-weight: normal; text-transform: uppercase; text-decoration: underline;'>$Course</div>";
                            ?>
                        </td>
                        <td>
                            <strong>School Year:</strong>
                        </td>
                        
                        
                        <td>
                            <?php 
                                $schoolYear = $_SESSION['txtschoolYear'];
                                echo "<div style='font-weight: normal; text-transform: uppercase; text-decoration: underline;'>$schoolYear</div>";
                            ?>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">Subject:</th>
                        
                        <td colspan="">
                          
                        </td>
                            
                        <td>
                          
                        </td>
                        
                        </tr>
                    </tbody>
                    </table>
                </div>

        <div id="box-page1">
            <div id="class" class="mt-5 border p-4" style="border-radius: 5px; width: 700px;">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">
                  Class Standing
                  <hr>
                </h3>


                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">(Activity 1)</th>
                      <td scope="col">Score<span class="text-danger">:</span></td>
                      <th scope="col">
                        <input type="text" value='<?php echo $_POST['cScore1']; ?>' class="form-control form-control-mb tb-input">
                      </th>
                      <td scope="col">Items<span class="text-danger">:</span></td>
                      <th scope="col">
                        <input type="text" value='<?php echo $_POST['cItem1']; ?>' class="form-control form-control-mb tb-input"> 
                      </th>
                      <td>Percentage<span class="text-danger">:</span></td>
                      <td>
                        <?php
                                 $txtcScore1 = $_POST['cScore1'];
                                 $txtcItem1 = $_POST['cItem1'];

                                 $totalcPercentage1 = ($txtcScore1 / $txtcItem1) * 50 + 50;
                                 $FinaltotalcPercentage1 = round($totalcPercentage1, 2);

                                 echo "<div><input type='text' name='totalcPercentage1' value='$FinaltotalcPercentage1 %' class='form-control form-control-mb tb-input'></div>";
                          ?>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">(Activity 2)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['cScore2']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['cItem2']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Percentage<span class="text-danger">:</span></td>
                      <td>
                        <?php
                                 $txtcScore2 = $_POST['cScore2'];
                                 $txtcItem2 = $_POST['cItem2'];

                                 $totalcPercentage2 = ($txtcScore2 / $txtcItem2) * 50 + 50;
                                 $FinaltotalcPercentage2 = round($totalcPercentage2, 2);
                                 
                                 echo "<div><input type='text' name='totalcPercentage2' value='$FinaltotalcPercentage2 %' class='form-control form-control-mb tb-input'></div>";
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">(Activity 3)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['cScore3']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['cItem3']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Percentage<span class="text-danger">:</span></td>
                      <td>
                        <?php
                                 $txtcScore3 = $_POST['cScore3'];
                                 $txtcItem3 = $_POST['cItem3'];

                                 $totalcPercentage3 = ($txtcScore3 / $txtcItem3) * 50 + 50;
                                 $FinaltotalcPercentage3 = round($totalcPercentage3, 2);

                                 echo "<div><input type='text' name='totalcPercentage3' value='$FinaltotalcPercentage3 %' class='form-control form-control-mb tb-input'></div>";
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">(Activity 4)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['cScore4']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['cItem4']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Percentage<span class="text-danger">:</span></td>
                      <td>
                        <?php
                                 $txtcScore4 = $_POST['cScore4'];
                                 $txtcItem4 = $_POST['cItem4'];

                                 $totalcPercentage4 = ($txtcScore4 / $txtcItem4) * 50 + 50;
                                 $FinaltotalcPercentage4 = round($totalcPercentage4, 2);

                                 echo "<div><input type='text' name='totalcPercentage4' value='$FinaltotalcPercentage4 %' class='form-control form-control-mb tb-input'></div>";
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">(Activity 5)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['cScore5']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      
                      
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['cItem5']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Percentage<span class="text-danger">:</span></td>
                      <td>
                        <?php
                                 $txtcScore5 = $_POST['cScore5'];
                                 $txtcItem5 = $_POST['cItem5'];

                                 $totalcPercentage5 = ($txtcScore5 / $txtcItem5) * 50 + 50;
                                 $FinaltotalcPercentage5 = round($totalcPercentage5, 2);

                                 echo "<div><input type='text' name='totalcPercentage5' value='$FinaltotalcPercentage5 %' class='form-control form-control-mb tb-input'></div>";
                          ?>
                      </td>
                      
                    </tr>
                  </tbody>
                </table>
                <div id="total">
                <strong>TOTAL CLASS STANDING AVERAGE:
                        <?php

                                $totalcPercentage1 = ($txtcScore1 / $txtcItem1) * 50 + 50;
                                $totalcPercentage2 = ($txtcScore2 / $txtcItem2) * 50 + 50;
                                $totalcPercentage3 = ($txtcScore3 / $txtcItem3) * 50 + 50;
                                $totalcPercentage4 = ($txtcScore4 / $txtcItem4) * 50 + 50;
                                $totalcPercentage5 = ($txtcScore5 / $txtcItem5) * 50 + 50;
                               
                                $aveTotalClass = ($totalcPercentage1 + $totalcPercentage2 + $totalcPercentage3 +$totalcPercentage4 + $totalcPercentage5) / 5;
                                $FinalaveTotalClass = round($aveTotalClass, 2);

                                echo "<div><input type='text' style='background-color: #4d4d4d; color: white; font-weight: bold;' value='$FinalaveTotalClass %' class='form-control form-control-mb total-class'></div>";
                          ?>
                </strong>
                </div>
              </div>
          </div>  

        <div id="box-page2">
          <div id="class" class="mt-5 border p-4" style="border-radius: 5px; width: 700px;">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">
                  Quizzes
                  <hr>
                </h3>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">(Activity 1)</th>
                      <td scope="col">Score<span class="text-danger">:</span></td>
                      <th scope="col">
                        <input type="text" value='<?php echo $_POST['qScore1']; ?>' class="form-control form-control-mb tb-input">
                      </th>
                      <td scope="col">Items<span class="text-danger">:</span></td>
                      <th scope="col">
                        <input type="text" value='<?php echo $_POST['qItem1']; ?>' class="form-control form-control-mb tb-input"> 
                      </th>
                      <td>Percentage<span class="text-danger">:</span></td>
                      <td>
                        <?php
                                 $txtqScore1 = $_POST['qScore1'];
                                 $txtqItem1 = $_POST['qItem1'];

                                 $totalqPercentage1 = ($txtqScore1 / $txtqItem1) * 50 + 50;
                                 $FinaltotalqPercentage1 = round($totalqPercentage1, 2);

                                 echo "<div><input type='text' value='$FinaltotalqPercentage1 %' class='form-control form-control-mb tb-input'></div>";
                          ?>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">(Activity 2)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['qScore2']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['qItem2']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Percentage<span class="text-danger">:</span></td>
                      <td>
                        <?php
                                 $txtqScore2 = $_POST['qScore2'];
                                 $txtqItem2 = $_POST['qItem2'];

                                 $totalqPercentage2 = ($txtqScore2 / $txtqItem2) * 50 + 50;
                                 $FinaltotalqPercentage2 = round($totalqPercentage2, 2);
                                 
                                 echo "<div><input type='text' value='$FinaltotalqPercentage2 %' class='form-control form-control-mb tb-input'></div>";
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">(Activity 3)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['qScore3']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" value='<?php echo $_POST['qItem3']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      <td>Percentage<span class="text-danger">:</span></td>
                      <td>
                       <?php
                                 $txtqScore3 = $_POST['qScore3'];
                                 $txtqItem3 = $_POST['qItem3'];

                                 $totalqPercentage3 = ($txtqScore3 / $txtqItem3) * 50 + 50;
                                 $FinaltotalqPercentage3 = round($totalqPercentage3, 2);
                                 
                                 echo "<div><input type='text' value='$FinaltotalqPercentage3 %' class='form-control form-control-mb tb-input'></div>";
                          ?>
                      </td>
                    </tr>
              
                  </tbody>
                </table>
                <div id="total-quiz">
                <strong>TOTAL QUIZ AVERAGE:
                <?php

                      

                        $totalqPercentage1 = ($txtqScore1 / $txtqItem1) * 50 + 50;
                        $totalqPercentage2 = ($txtqScore2 / $txtqItem2) * 50 + 50;
                        $totalqPercentage3 = ($txtqScore3 / $txtqItem3) * 50 + 50;

                        $aveTotalQuiz = ($totalqPercentage1 + $totalqPercentage2 + $totalqPercentage3) / 3;
                        $FinalaveTotalQuiz = round($aveTotalQuiz, 2);
                        
                        echo "<div><input type='text' style='background-color: #4d4d4d; color: white; font-weight: bold;' value='$FinalaveTotalQuiz %' class='form-control form-control-mb total-quiz'></div>";

                    ?>
                </strong>
                </div>
                
                </div>
          </div> 
        <div id="box-page3">
          <div id="gradeacads" class="mt-5 border p-4" style="border-radius: 5px; width: 700px;">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">
                  Non-Academics
                  <hr>
                </h3>

                <table class="table table-borderless table-acads">
                  <thead>
                    <tr>
                      <th scope="col">(Attendance)</th>
                      <td scope="col">Percentage<span class="text-danger">:</span></td>
                      <th scope="col">
                        <input type="text"  value='<?php echo $_POST['attendance']; ?>'class="form-control form-control-mb tb-input">
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">(Performance)</th>
                      <td>Percentage<span class="text-danger">:</span></td>
                      <td>
                        
                        <input type="text"  value='<?php echo $_POST['performance']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                      
                     
                    </tr>
                    <tr>
                      <th scope="row">(Participation)</th>
                      <td> Percentage<span class="text-danger">:</span></td>
                      <td>
                        <input type="text"  value='<?php echo $_POST['participation']; ?>' class="form-control form-control-mb tb-input">
                      </td>
                    
                    </tr>
                    </tr>
                  </tbody>
                </table>
                <div id="total-acad">
                <strong>TOTAL NON-ACADS AVERAGE:
                          <?php
                                 $txtqAttendance = $_POST['attendance'];
                                 $txtPerformance = $_POST['performance'];
                                 $txtParticipation = $_POST['participation'];

                                 $totalAcadPercentage = ($txtqAttendance + $txtPerformance + $txtParticipation) / 3;
                                 $FinaltotalAcadPercentage = round($totalAcadPercentage, 2);
                                 
                                 echo "<div><input type='text' style='background-color: #4d4d4d; color: white; font-weight: bold;' value='$FinaltotalAcadPercentage %' class='form-control form-control-mb total-acad'></div>";
                          ?>
                </strong>
                </div>
            </div>
          </div> 
        <div id="box-page4">
          <div id="gradeacads" class="mt-5 border p-4" style="border-radius: 5px; width: 700px;">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">
                  Major Examination
                  <hr>
                </h3>

                <table class="table table-borderless table-exam">
                  <thead>
                    <tr>
                      <th scope="col">Score<span class="text-danger">:</span></th>
                      <th scope="col">
                      <input type="text" value='<?php echo $_POST['exam_score'];?>' class="form-control form-control-mb tb-input">
                      </th>
                      <th scope="col">Items<span class="text-danger">:</span></th>
                      <th scope="col">
                      <input type="text" value='<?php echo $_POST['exam_item'];?>' class="form-control form-control-mb tb-input">
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="td-score">Percentage<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" class="form-control form-control-mb tb-input">
                      </td>
                    </tr>
                  </tbody>
                  
                </table>

                <div id="exam">
                <strong>TOTAL MAJOR EXAM AVERAGE:
                          <?php
                                 $txtExamScore = $_POST['exam_score'];
                                 $txtExamItem = $_POST['exam_item'];

                                 $totalAverageExam = ($txtExamScore / $txtExamItem) * 50 + 50;
                                 $FinaltotalAverageExam = round($totalAverageExam, 2);
                                 
                                 echo "<div><input type='text' style='background-color: #4d4d4d; color: white; font-weight: bold;' value='$FinaltotalAverageExam %' class='form-control form-control-mb exam'></div>";
                          ?>
                </strong>
          </div>
           
                <div class="row" id="reg">
        <div id="footer-grade" class="border p-4 h-50" style="width: 1400px; border-radius: 5px;">

            <center><h1 class="title">PERCENTAGE AND EQUIVALENT GRADES</h1></center>
            <hr>
                
                    <table id="table-footer" class="table table-borderless mt-5">
                    <thead>
                        <tr>
                        <th scope="col">GRADE PERCENTAGE:</th>
                        <th scope="col">
                          
                <div id="grade">
                          <?php

                              $FinaltotalAcadPercentage *= .2;
                              $FinalaveTotalQuiz *= .35;
                              $FinalaveTotalClass *= .05;
                              $FinaltotalAverageExam *= .40;

                              $GradePercentage = ($FinaltotalAcadPercentage + $FinalaveTotalQuiz + $FinalaveTotalClass + $FinaltotalAverageExam);
                              $FinalGradePercentage  = round($GradePercentage , 2);
                                 
                              echo "<div><input type='text' style='background-color: #c73836; color: white; font-weight: bold;' value='$FinalGradePercentage %' class='form-control form-control-mb grade'></div>";
                          ?>
                        </th>
                        <th scope="col">GRADE POINTS:</th>
                        <th scope="col">
                            <?php 
                              if ($FinalGradePercentage >= 98) {
                                echo "<div style='color: #c73836; font-weight: bold;'> 1.0 (Excellent) </div>";
                              } else if ($FinalGradePercentage >= 95) {
                                echo "<div style='color: #c73836; font-weight: bold;'> 1.24 (Very Good) </div>";
                              } else if ($FinalGradePercentage >= 92) {
                                echo "<div style='color: #c73836; font-weight: bold;'> 1.50 (Very Good) </div>";
                              } else if ($FinalGradePercentage >= 89) {
                                echo "<div style='color: #c73836; font-weight: bold;'> 1.75 (Good) </div>";
                              } else if ($FinalGradePercentage >= 86) {
                                echo "<div style='color: #c73836; font-weight: bold;'> 2.00 (Good) </div>";
                              } else if ($FinalGradePercentage >= 82) {
                                echo "<div style='color: #c73836; font-weight: bold;'> 2.25 (Good) </div>";
                              } else if ($FinalGradePercentage >= 80) {
                                echo "<div style='color: #c73836; font-weight: bold;'> 2.50 (Fair) </div>";
                              } else if ($FinalGradePercentage >= 77) {
                                echo "<div style='color: #c73836; font-weight: bold;'> 2.75 (Fair) </div>";
                              } else if ($FinalGradePercentage >= 75) {
                                echo "<div style='color: #c73836; font-weight: bold;'> 3.00 (Pass) </div>";
                              } else {
                                echo "<div style='color: #c73836; font-weight: bold;'> 5.00 (Failure) </div>";
                              }

                               
                            ?>
                    </div>
                        </th>
                       
                        </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                    </table>
                </div>
              </form>
              </div>
          </div> 
          
     </section>
               
     
                      
  </body>
</html>