
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
    


      <?php

        // First Page to Second Page
        $_SESSION['txtName'] = $_POST['name'];
        $_SESSION['txtStudentNum'] = $_POST['student_num'];
        $_SESSION['txtCourse'] = $_POST['course'];
        $_SESSION['txtYear'] = $_POST['year'];
        $_SESSION['txtSemester'] = $_POST['semester'];
        $_SESSION['txtschoolYear'] = $_POST['schoolYear'];

      ?>
  


        <div class="container mt-5">
              <div class="mb-3">
                  <strong><center><h5>Entered Name: </strong>
                    <?php 
                        echo $_POST['name'];  
                    ?>
                  </h5></center></strong>
                  <strong><center><h5>Course: </strong>
                  <?php 
                        echo $_POST['course'];  
                    ?>
                  </h5></center>
                  <strong><center><h5>Please select subject: </strong>
                    
                  </h5></center>
              </div>
        </div>
        
    <section id="box-section">
            <div id="class" class="mt-5 border p-4" style="border-radius: 5px; width: 700px;">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">
                  Class Standing
                  <hr>
                </h3>

              <form action="page3.php" method="post">

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">(Activity 1)</th>
                      <td scope="col">Score<span class="text-danger">:</span></td>
                      <th scope="col">
                        <input type="text" name="cScore1" class="form-control form-control-mb tb-input" required>
                      </th>
                      <td scope="col">Items<span class="text-danger">:</span></td>
                      <th scope="col">
                        <input type="text" name="cItem1" class="form-control form-control-mb tb-input" required> 
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">(Activity 2)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="cScore2" class="form-control form-control-mb tb-input" required>
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="cItem2" class="form-control form-control-mb tb-input" required>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">(Activity 3)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="cScore3" class="form-control form-control-mb tb-input" required>
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="cItem3" class="form-control form-control-mb tb-input" required>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">(Activity 4)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="cScore4" class="form-control form-control-mb tb-input" required>
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="cItem4" class="form-control form-control-mb tb-input" required>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">(Activity 5)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="cScore5" class="form-control form-control-mb tb-input" required>
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="cItem5" class="form-control form-control-mb tb-input" required>
                      </td>
                    </tr>
                  </tbody>
                </table>
            
          </div>  
          <br>
          <div id="table-exam" class="mt-5 border p-4" style="border-radius: 5px; width: 700px;">
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
                        <input type="text" name="qScore1" class="form-control form-control-mb tb-input" required>
                      </th>
                      <td scope="col">Items<span class="text-danger">:</span></td>
                      <th scope="col">
                        <input type="text" name="qItem1" class="form-control form-control-mb tb-input" required> 
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">(Activity 2)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="qScore2" class="form-control form-control-mb tb-input" required>
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="qItem2" class="form-control form-control-mb tb-input" required>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">(Activity 3)</th>
                      <td>Score<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="qScore3" class="form-control form-control-mb tb-input" required>
                      </td>
                      <td>Items<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="qItem3" class="form-control form-control-mb tb-input" required>
                      </td>
                    </tr>
                  </tbody>
                </table>
            
          </div> 

          <br>
          <div id="table-exam" class="mt-5 border p-4" style="border-radius: 5px; width: 700px;">
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
                        <input type="text" name="attendance" class="form-control form-control-mb tb-input" required>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">(Performance)</th>
                      <td>Percentage<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="performance" class="form-control form-control-mb tb-input" required>
                      </td>
                     
                    </tr>
                    <tr>
                      <th scope="row">(Participation)</th>
                      <td> Percentage<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" name="participation" class="form-control form-control-mb tb-input" required>
                      </td>
                    
                    </tr>
                    </tr>
                  </tbody>
                </table>
            
          </div> 

          <br>
          <div id="table-exam" class="mt-5 border p-4" style="border-radius: 5px; width: 700px;">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">
                  Major Examination
                  <hr>
                </h3>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                    <th scope="col">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                  </div>
                    </th>
                      <th scope="col">Score<span class="text-danger">:</span></th>
                      <th scope="col">
                        <input type="text" name="exam_score" class="form-control form-control-mb tb-input">
                      </th>
                      <th scope="col">Items<span class="text-danger">:</span></th>
                      <th scope="col">
                        <input type="text" name="exam_item" class="form-control form-control-mb tb-input"> 
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td class="td-score">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="">
                  </div>
                  </td>
                      <td class="td-score">Percentage<span class="text-danger">:</span></td>
                      <td>
                        <input type="text" class="form-control form-control-mb tb-input">
                      </td>
                    </tr>
                  </tbody>
                  
                </table>

                <div id="btn-position">
                  <button type="submit" name="submit" class="btn btn-dark">PROCEED TO NEXT PAGE</button>
                </div>

              </form>
          </div> 
         
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>



  
                        
                      
  </body>
</html>