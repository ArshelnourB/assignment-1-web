<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name = "description" content="This is a form for university student information">
        <title>Blackberry University Student Information Form</title>
        <link rel="stylesheet" href="./css/styles.css">
    </head>
    <body>
        <header>
            <nav class="link-bar">
                <a href="#"><img src="./img/blackberry-logo.png" alt="Blackbery University Logo"></a>
                <menu>
                    <li><a href="#">About Us</a></li>
                </menu>
            </nav>
            <h1>Blackberry University</h1>
        </header>
        <main>
            <section id="form">
                <form method="post">
                    <h2>Student Info</h2>
                    <div>
                        <label for="fname">First Name</label>
                        <div>
                            <input type="text" name="fname" id="fname">
                        </div>
                    </div>

                    <div>
                        <label for="lname">Last Name</label>
                        <div>
                            <input type="text" name="lname" id="lname">
                        </div>
                    </div>

                    <div>
                        <label for="phone">Phone Number</label>
                        <div>
                            <input type="text" name="phone" id="phone">
                        </div>
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <div>
                            <input type="email" name="email" id="email">
                        </div>
                    </div>

                    <div>
                        <label for="date">Date Of Birth</label>
                        <div>
                            <input type="date" name="dateOfBirth" id="date">
                        </div>
                    </div>

                    <div>
                        <label for="year">School Year</label>
                        <div>
                            <select name="schoolYear">
                                <option>Select Year</option>
                                <option value="first">First</option>
                                <option value="second">Second</option>
                                <option value="third">Third</option>
                                <option value="fourth">Fourth</option>
                                <option value="fifth">Fifth</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="course">Course</label>
                        <div>
                            <input type="text" name="course" id="course">
                        </div>
                    </div>

                    <div>
                        <label for="grade">Overall Grade</label>
                        <div>
                            <input type="text" name="overallGrade" id="grade">
                        </div>
                    </div>

                    <div>
                        <input type="submit" class="button" value="Add Student">
                    </div>
                </form>
                <!--<div class="submit">
                    <?php
                        require_once ("database.php");
                        if(isset($_POST) & !empty($_POST)){
                            $fname        = $database->sanitize($_POST['fname']);
                            $lname        = $database->sanitize($_POST['lname']);
                            $phone        = $database->sanitize($_POST['phone']);
                            $email        = $database->sanitize($_POST['email']);
                            $dateOfBirth  = $database->sanitize($_POST['dateOfBirth']);
                            $schoolYear   = $database->sanitize($_POST['schoolYear']);
                            $course       = $database->sanitize($_POST['course']);
                            $overallGrade = $database->sanitize($_POST['overallGrade']);
                            $res          = $database->create($fname, $lname, $phone, $email, $dateOfBirth, $schoolYear, $course, $overallGrade);
                            if($res){
                                echo "<p>Student added to university database</p>";
                            }
                            else{
                                echo "<p>Could not add student</p>";
                            }
                        }
                    ?>
                </div>-->
            </section>
        </main>
    </body>
</html>