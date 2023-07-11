<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.png">
    <title>Result</title>
</head>
<body>
    <div class="form">
        <h3 class="heading">User Input</h3>
        <div class="inputArea">
            <?php
            $name=$_POST["name"];
            $email=$_POST["email"];
            $issue=$_POST["issue"];
            $issueType=$_POST["issueType"];

            echo "Name: $name<br><br>";
            echo "E-mail: $email<br><br><br>";
            echo "User issue type - $issueType: <br>";
            echo "$issue <br> <br> <br> <br> <br> <br> <br>";
            echo "Thank you for contacting us, we'll get back to you ASAP";
            ?>
        </div>
    </div>
</body>
</html>
