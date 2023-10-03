

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Form</title>
    <link rel="icon" href="img/logo.png">
    <style>
        .complaint-input {
            display: none;
        }
        .complaint-text {
            display: none;
        }
        .submit-button {
            display: none;
        }
        .complaint-container {
            display: inline-block;
            vertical-align: top;
            margin-right: 50px; 
        }
        .complaint-image{
            border-color: black;
            border-width: 5px;
            border-style: solid;
            display: inline-block;
            width: 320px;
        }
    </style>
</head>
<body>
    <h1>Select what you want to complain about.</h1>
    
    <div class="complaint-container" id="complaint" name="complaint">
        <img src="img\CSE.jpg" width="380"height="300" alt="Click to Enter Complaint"  class="complaint-image">
        <p class="complaint-text">Enter your complaint:</p>
        <textarea class="complaint-input" rows="4" cols="50"></textarea>
        <button class="submit-button">Submit</button>
    </div>

    <div class="complaint-container" id="complaint" name="complaint">
        <img src="img\civil.webp" alt="Click to Enter Complaint"  width="380"height="300" class="complaint-image">
        <p class="complaint-text">Enter your complaint:</p>
        <textarea class="complaint-input" rows="4" cols="50"></textarea>
        <button class="submit-button">Submit</button>
    </div>


    <div class="complaint-container">
        <img src="img\eee.jpg" alt="Click to Enter Complaint"  width="380"height="300" class="complaint-image">
        <p class="complaint-text">Enter your complaint:</p>
        <textarea class="complaint-input" rows="4" cols="50"></textarea>
        <button class="submit-button">Submit</button>
    </div>

    <div class="complaint-container">
        <img src="imG\elec.jpg" alt="Click to Enter Complaint"  width="380"height="300" class="complaint-image">
        <p class="complaint-text">Enter your complaint:</p>
        <textarea class="complaint-input" rows="4" cols="50"></textarea>
        <button class="submit-button">Submit</button>
    </div>

    <div class="complaint-container">
        <img src="imG\mech.jpeg" alt="Click to Enter Complaint"  width="380"height="300" class="complaint-image">
        <p class="complaint-text">Enter your complaint:</p>
        <textarea class="complaint-input" rows="4" cols="50"></textarea>
        <button class="submit-button">Submit</button>
    </div>

    <script>
        const images = document.querySelectorAll(".complaint-image");
        const text = document.querySelectorAll(".complaint-text");
        const inputs = document.querySelectorAll(".complaint-input");
        const submitButtons = document.querySelectorAll(".submit-button");

        images.forEach((image, index) => {
            image.addEventListener("click", function() {

                if (text[index].style.display === "none" || text[index].style.display === "") {
                    text[index].style.display = "block";
                    inputs[index].style.display = "block";
                    submitButtons[index].style.display = "block";
                    inputs[index].focus();
                } else {
                    text[index].style.display = "none";
                    inputs[index].style.display = "none";
                    submitButtons[index].style.display = "none";
                }
            });
        });

        
        submitButtons.forEach((button, index) => {
            button.addEventListener("click", function() {
                
                const complaint = inputs[index].value;

                if (complaint.trim() !== "") {
                    window.location.href = 'connect.php';
                }
            });
        });
    </script>
</body>
</html>
