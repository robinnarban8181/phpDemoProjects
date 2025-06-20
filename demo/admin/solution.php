<?php 
include 'dashbord.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> ADD DATA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input, select {
            width: 90%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            width: 90%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

       
    </style>
</head>
<body>

<h2> solution us INformation</h2>

<form action="solution_back.php" method="post" >

    <label for="so-description">solution Content:</label>
    <textarea name="so_content" rows="4" class="control" required></textarea>

    <button type="submit">save</button>
  
</form>

</body>
</html>