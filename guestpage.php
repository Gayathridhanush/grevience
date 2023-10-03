<?php

include('connectgue.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    

    
    $conn= mysqli_connect('localhost','root', '','sscecf') or die("Connection Failed:" .mysqli_connect_error());
        
    
    $sql = "INSERT INTO guests (name,mobile) VALUES ('$name', '$mobile')";

    if ($conn->query($sql) === TRUE) {
        echo "Login Successfull" ;
        header("Location: departmentpage.php");
        exit;
    } else {
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Login</title>
    <link rel="icon" href="img/logo.png">
    <style>
        button {
            margin-right: 10px; 
            background-color: #008000;
            color: #fff; 
            border-color: black;
            border-width: 2px;
            border-style: solid; 
            padding: 10px 20px;
            cursor: pointer; 
        }
        h1 {
            color: #FF0000; 
        }
    </style>
    <script>
        function validateForm() {
            
            var Name = document.getElementById("name").value;
            var Mobile Number = document.getElementById("mobile").value;
    

            if (Name == "" || Mobile Number == "" ) {
                alert("Please fill in all required fields.");
                return false;
            }
        }
    </script>
</head>
<body>
    <center>
    <h1> Sree Sowdambika College of Engineering </h1>
    <h2> Complaint Register Form </h2>
    <h2>Guest Login </h2>
    <hr>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" action='departmentpage.php' method="POST" onsubmit="return validateForm();">
        <table>

        <tr> 
            <td > <label for="name">Name:</label> </td>
            <td > <input type='text' name='name' id="name" required>  </td>

        </tr>
          
        <tr> 
            <td > <label for="mobile">Mobile Number:</label> </td>
            <td > <input type='number' name='mobile' id="mobile" required>  </td>

        </tr>
        
        <tr><td></td><td></td></tr>
        <tr>
            <td>
                <button type="submit" id="submit">Submit</button>
            </td>
            <td>
                <button type="reset" id="reset">Reset</button>
            </td>
        </tr>
        </table>
    </form>

    <hr>
    </center>
</body>
</html>