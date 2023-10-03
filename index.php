<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSCE</title>
    <link rel="icon" href="img/logo.png">

    <style>
       
        p {
            color:#A52A2A;
        }

        #guestButton {
            background-color: #008000; 
        }

        h1 {
            color: orange; 
        }
        
        .logo{
            display:inline-block;
        }

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
       
    
    </style>
</head>
<body>
    <center>
    <h1> Sree Sowdambika College of Engineering </h1>
    <h2> Complaint Register Form </h2>
    <hr>
    <h3> Title: "Submit Your Complaint"</h3><br>
    <h3>"Share Your Concerns with Us"</h3><br>
    <p style="font-size:20px"> "Use this form to register your complaint, feedback, or suggestions. We value your input!"
    If you are a student or staff member, please click on the 'Login Mode' to submit your complaint. If you are a guest, kindly select 'Guest Mode' to submit your complaint.

    </p>
    <a href="loginpage.php">
        <button type="button" id="loginButton">Login</button>
    </a>

    <a href="guestpage.php">
        <button type="button" id="guestButton">Guest</button>
    </a>

</center>
</body>
</html>