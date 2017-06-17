<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        table, th, td {
            border: 1px solid black;
        }
        </style>
    </head>
    <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "hocphp";

    $conn = new mysqli($servername, $username, $password, $dbname);
#check connection
    if (!$conn) {
        die ("Connection failed: " . $mysqli_connect_error);
    }
    echo "Connected successfully" . "<br>";

#create new database
    $sql = "create database myDB";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database " . mysqli_error($conn);
    }
    echo "<br>";

#create a table
    $sql = "create table MyGuests (
  id INT(6) unsigned auto_increment primary key,
  firstname varchar(30) not null,
  lastname varchar(30) not null,
  email varchar(50),
  reg_data timestamp
  )";
    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    echo "<br>";

#Insert data to table;
    $sql = "insert into MyGuests (firstname, lastname, email) values ('John', 'Doe', 'john@example.com')";

    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        echo "New record created successfully. ";
        echo "Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    echo "<br>";

    $stmt = $conn->prepare("insert into MyGuests (firstname, lastname, email) values (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();
    echo "New record created successfully";
    $stmt->close();
    echo "<br>";
    //delete data
    $sql = "delete from MyGuests where id = 3";
    if (mysqli_query($conn, $sql)) {
        echo "record deleted";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
//select data from database
    $sql = "select id, firstname, lastname from MyGuests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . " " . $row["lastname"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    echo "<br> Closed";
    ?>
    </body>
    </html>
