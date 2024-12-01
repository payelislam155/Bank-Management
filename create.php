<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 200px;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            color: #2a9d8f;
        }

        form {
            background-color: white;
            padding: 100px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #2a9d8f;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #21867a;
        }

        textarea {
            resize: none;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-size: 1rem;
            color: #2a9d8f;
        }

        .error {
            color: red;
        }

        .home-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            margin-bottom:100px;
        }

        .home-button a {
            text-decoration: none;
            background-color: #2a9d8f;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .home-button a:hover {
            background-color: #21867a;
        }
    </style>
</head>
<body>
    <div>
        <h2>Create New Account</h2>
        <form method="POST" action="">
            <label>Name:</label>
            <input type="text" name="name" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Phone:</label>
            <input type="text" name="phone" required>
            <label>Address:</label>
            <textarea name="address" required></textarea>
            <button type="submit" name="submit">Create</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            $sql = "INSERT INTO accounts (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
            if ($conn->query($sql) === TRUE) {
                echo "<p class='message'>Account created successfully!</p>";
            } else {
                echo "<p class='message error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }
        ?>

        <div class="home-button">
            <a href="index.php">Go to Home</a>
        </div>
    </div>
</body>
</html>
