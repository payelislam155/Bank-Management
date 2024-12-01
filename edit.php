<?php include 'connect.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM accounts WHERE id = $id");
$row = $result->fetch_assoc();
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "UPDATE accounts SET name='$name', email='$email', phone='$phone', address='$address' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: view.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
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
    </style>
</head>
<body>
    <h2>Edit Account</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required>
        <label>Address:</label>
        <textarea name="address" required><?php echo $row['address']; ?></textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>
