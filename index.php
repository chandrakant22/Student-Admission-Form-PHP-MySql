<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== 
    <link rel="stylesheet" href="line.css">-->

    <title>Responsive Regisration Form </title> 
</head>
<?php
if(isset($_POST['submit']))
{
    

$full_name=$_POST['full_name'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$student_number=$_POST['student_number'];
$parent_number=$_POST['parent_number'];
$address=$_POST['address'];
$city=$_POST['city'];
$pin_code=$_POST['pin_code'];
$work=$_POST['work'];
$c_name=$_POST['c_name'];
$e_name=$_POST['e_name'];
$branch=$_POST['branch'];
$course=$_POST['course'];
$batch_timing=$_POST['batch_timing'];
$tutor_name=$_POST['tutor_name'];
$photofile=$_POST['photofile'];
$docfile=$_POST['docfile'];
$total_fees=$_POST['total_fees'];
$paid_fees=$_POST['paid_fees'];
$payment_type=$_POST['payment_type'];
$cheque_no=$_POST['cheque_no'];
$admission_date=$_POST['admission_date'];
$receipt_number=$_POST['receipt_number'];


// echo 'full_name ='.$full_name;
// echo 'gender ='.$gender;
// echo 'dob ='.$dob;
// echo 'email ='.$email;
// echo 'student ='.$student_number;
// echo 'prent ='.$parent_number;
// echo 'address ='.$address;
// echo 'city ='.$city;
// echo 'pin ='.$pin_code;
// echo 'work ='.$work;
// echo 'c name ='.$c_name;
// echo 'e_name ='.$e_name;
// echo 'Branch ='.$branch;
// echo 'corse ='.$course;
// echo 'batch ='.$batch_timing;
// echo 'tutor ='.$tutor_name;
// echo 'photo ='.$photofile;
// echo 'doc ='.$docfile;
// echo 'total ='.$total_fees;
// echo 'paid ='.$paid_fees;
// echo 'pay type ='.$payment_type;
// echo 'cheq no ='.$cheque_no;
// echo 'Addmission ='.$admission_date;
// echo 'Receipt ='.$receipt_number;




echo "<script>alert('Welcome to ".$course_type."')</script>";

$sql="INSERT INTO student_admission(student_id, full_name, gender, dob, email, student_number, parent_number, address, city, pin_code, work, c_name, e_number, branch, course, batch_timing, tutor_name, photofile, docfile, total_fees, paid_fees, payment_type, cheque_no, admission_date, receipt_number)values('.$student_id.','.$full_name.','.$gender.','.$dob.','.$email.','.$student_number.','.$parent_number.','.$address.','.$city.','.$pin_code.','.$work.','.$c_name.','.$e_number.','.$branch.','.$course.','.$batch_timing.','.$tutor_name.','.$photofile.','.$docfile.','.$total_fees.','.$paid_fees.','.$payment_type.','.$cheque_no.','.$admission_date.','.$receipt_number)";  

 echo "<script>alert('hello ".$sql."')</script>"; 
   
   
   $status=mysqli_query($con,$sql);    
    if($status)
       echo "<script>alert('Data inserted!')</script>"; 
    else
       echo "<script>alert('Data Not inserted!')</script>"; 
$con-> close(); 
    
}


?>
<body>
    <div class="container">
        <header>ASTERISC.IN (Admission Form)</header>

        <form method="POST"  action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name (Name On Marksheet)</label>
                            <input type="text" name="full_name" placeholder="Enter your name" required>
                        </div>


                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="student_number" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Guardian Mobile Number</label>
                            <input type="number" name="parent_number" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter address" required>
                        </div>

                        <div class="input-field">
                            <label>City</label>
                            <input type="text" name="city" placeholder="Enter your city" required>
                        </div>

                        <div class="input-field">
                            <label>Pin Code</label>
                            <input type="text" name="pin_code" placeholder="Enter pin code" required>
                        </div>
                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Education/Job Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Working</label>
                            <select name="work" required>
                                <option disabled selected>Select</option>
                                <option>Working</option>
                                <option>Student</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>College/Company Name</label>
                            <input type="text" name="c_name" placeholder="Enter issued authority" required>
                        </div>

                        <div class="input-field">
                            <label>Enrollment Number</label>
                            <input type="text" name="e_number" placeholder="Enter issued authority" required>
                        </div>

                       
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next <b>></b></span>
                        <!-- <i class="uil uil-navigator"></i> -->
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Branch Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Branch</label>
                            <select name="branch" required>
                                <option disabled selected>Select Branch</option>
                                <option>Bhande Plot</option>
                                <option>Tiranga Chowk</option>
                                <option>Friends Colony</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Course</label>
                            <select name="course" required>
                                <option value="Industrial Java Training (Full Stack)">Industrial Java</option>
                                <option value="C Programming with Project">C</option>
                                <option value="C++ Programming with Project">C++</option>
                                <option value="C & C++ Programming with Project">C & C++</option>
                                <option value="Core Java Programming with Project">Core Java</option>
                                <option value="Advance Java Programming with Project">Adv Java</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Batch Timing</label>
                            <select name="batch_timing" required>
                                <option disabled selected>Select Batch Time</option>
                                <option>9.00 TO 10.00 AM</option>
                                <option>10.00 TO 10.00 AM</option>
                                <option>11.00 TO 12.00 PM</option>
                                <option>12.00 TO 1.00 PM</option>
                                <option>1.00 TO 2.00 PM</option>
                                <option>2.00 TO 3.00 PM</option>
                                <option>3.00 TO 4.00 PM</option>
                                <option>4.00 TO 5.00 PM</option>
                                <option>5.00 TO 6.00 PM</option>
                                <option>6.00 TO 7.00 PM</option>
                                <option>7.00 TO 8.00 PM</option>
                                <option>8.00 TO 9.00 PM</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Tutor Name</label>
                            <input type="number" name="tutor_name" placeholder="Enter tutor name" required>
                        </div>

                        <div class="input-field">
                            <label>Student Photo Upload</label>
                            <input type="file" name="photofile" style="padding-top: 9px;"required>
                        </div>

                        <div class="input-field">
                            <label>Document Photo Upload</label>
                            <input type="file" name="docfile" style="padding-top: 9px;"required>
                        </div>

                       

                    </div>
                </div>

                <div class="details family">
                    <span class="title">Payment Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Total Fees</label>
                            <input type="number" name="total_fees" placeholder="Enter total fees" required>
                        </div>

                        <div class="input-field">
                            <label>Paid Fees</label>
                            <input type="number" name="paid_fees" placeholder="Enter paid fees" required>
                        </div>

                        <div class="input-field">
                            <label>Payment Type</label>
                            <select name="payment_type" required>
                                <option disabled selected>Select Type</option>
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Cheque</option>
                            </select>                       
                        </div>

                        <div class="input-field">
                            <label>Online Transation No./ Cheque No.</label>
                            <input type="text" name="cheque_no" placeholder="Enter Transation No./ Cheque No." required>
                        </div>

                        <div class="input-field">
                            <label>Date</label>
                            <input type="date" name="admission_date" placeholder="Enter admission date" required>
                        </div>

                        <div class="input-field">
                            <label>Receipt Number</label>
                            <input type="number" name="receipt_number" placeholder="Enter receipt number" required>
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <!-- <i class="uil uil-navigator"></i> -->
                            <span class="btnText"><b>< </b>Back</span>
                        </div>
                        
                        <button class="sumbit">
                            <span class="btnText">Submit ✔</span>
                            <!-- <i class="uil uil-navigator"></i> -->
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>