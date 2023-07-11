<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon.png">
    <title>Simple Web contact form</title>
</head>
<body>
    <div class="form">
    <h3 class="heading">Contact Form</h3>
    <form class="inputArea" action="Result.php" method="POST">
        Name: <br> <input type="text" name="name"> <br> <br>
        E-mail: <br> <input type="email" name="email"> <br> <br> <br>
        Type of issue:
        <select name="issueType">
            <option value="Query">Query</option>
            <option value="Feedback">Feedback</option>
            <option value="Complaint">Complaint</option>
            <option value="Other">Other</option>
        </select> <br> <br>
        <textarea name="issue" cols="30" rows="10"></textarea> <br> <br>
        <input class="submitButton" type="submit" href="Result.php"> <br>
    </form>
    </div>
</body>
</html>