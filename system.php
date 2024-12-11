<?php
include('connection.php');  

// SQL query to select data from database
$sql = " SELECT * FROM student";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<html>
<head>
    <title>Account Status</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <img src="NDDU Logo.png" alt="NDDU Logo" width="280" height="280">
    <div id="profile">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <div id="profile-container">
            <image id="profileImage" src="default_profile.png" />
        </div>
        <input id="imageUpload" type="file"
               name="profile_photo" placeholder="Photo" required="" capture\>
        <h3>
            Points:
        </h3>
        <div class="btn-group" style="width:100%">
            <button style="width:33.3%">Profile</button>
            <button style="width:33.3%">Purchase/Change Theme</button>
            <form name="f1" action="index.html" method="POST">
                <button type="submit" style="width:33.3%" method="POST">Logout</button>
            </form>
        </div>
        <br />
        
            
           <p>Student Name: <?php'student_name'?> </p>
           <p>Department: <?php'department'?></p>
           <p>School Year: <?php'school_year'?></p>
           <p>Course: <?php'course_name'?></p>
           <p>Age: <?php'student_age'?></p>
           
        
    </div>
</body>

</html>

<script>
    $("#profileImage").click(function (e) {
        $("#imageUpload").click();
    });

    function fasterPreview(uploader) {
        if (uploader.files && uploader.files[0]) {
            $('#profileImage').attr('src',
                window.URL.createObjectURL(uploader.files[0]));
        }
    }

    $("#imageUpload").change(function () {
        fasterPreview(this);
    });
</script>