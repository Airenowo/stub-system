    <?php      
        include('connection.php');  
        $student_id = $_POST['student_id'];  
        $password = $_POST['pass'];  
          
            //to prevent from mysqli injection  
            $student_id = stripcslashes($student_id);  
            $password = stripcslashes($password);  
            $student_id = mysqli_real_escape_string($con, $student_id);  
            $password = mysqli_real_escape_string($con, $password);  
          
            $sql = "select *from login where student_id = '$student_id' and password = '$password'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                echo "<h1><center> Login successful </center></h1>"; 
				header("Location: system.php");
				die();
            }  
            else{  
                echo "<h1> Login failed. Invalid student number or password.</h1>";  
            }     
    ?>  