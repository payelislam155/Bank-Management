<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #2a9d8f;
        }

        form {
            max-width: 500px;
            margin: 20px auto;
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        form input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        form button {
            background-color: #2a9d8f;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        form button:hover {
            background-color: #21867a;
        }

        table {
            width: 100%;
            max-width: 900px;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 10px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2a9d8f;
            color: white;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td a {
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
            transition: background-color 0.3s;
        }

        td a.edit {
            background-color: #4caf50; /* Green */
        }

        td a.edit:hover {
            background-color: #45a049;
        }

        td a.delete {
            background-color: #f44336; /* Red */
        }

        td a.delete:hover {
            background-color: #e53935;
        }

        p {
            text-align: center;
            font-size: 1rem;
            color: #555;
        }
    </style>
</head>
<body>
    <h2>Search Account</h2>
    <form method="GET" action="">
        <input type="text" name="query" placeholder="Enter name, email, or phone" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if (isset($_GET['query'])) {
        $query = $_GET['query'];

        // Search in 'name', 'email', and 'phone' columns
        $sql = "SELECT * FROM accounts WHERE name LIKE '%$query%' OR email LIKE '%$query%' OR phone LIKE '%$query%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3 style='text-align: center; color: #2a9d8f;'>Search Results:</h3>";
            echo "<table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['address']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}' class='edit'>Edit</a>
                            <a href='delete.php?id={$row['id']}' class='delete'>Delete</a>
                        </td>
                    </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p>No results found for '$query'.</p>";
        }
    }
    ?>
</body>
</html>
