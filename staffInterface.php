<?php
require_once 'includes/dbh.inc.php';

$query="SELECT * FROM menu";
$result=mysqli_query($conn,$query);

$queryReserve="SELECT * FROM reservations";
$resultreserve=mysqli_query($conn,$queryReserve);

$queryOrder="SELECT * FROM orders";
$resultOrders=mysqli_query($conn,$queryOrder);


if(isset($_POST["submit"])){
    $itemcode=$_POST["itemcode"];
    $itemname=$_POST["itemname"];
    $price=$_POST["price"];
    $qty=$_POST["qty"];
    $query = "INSERT INTO menu (itemCode, itemName, price, quantity) VALUES ('$itemcode', '$itemname', '$price', '$qty')";
    
    if(mysqli_query($conn, $query)){
        echo "<script>alert('Data inserted successfully');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <style>

body {
    /* background-image: url(img/img118.jpg); */
    background-size: cover; /* Ensure the image covers the entire screen */
    background-position: center center; /* Center the image */
    background-attachment: fixed; /* Keep the image fixed during scroll */
    background-repeat: no-repeat; /* Prevent the image from repeating */
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
  


    form {
            display: flex;
            flex-direction: column;
            width: 300px; /* Adjust the width as needed */
            margin: 0 auto; /* Center the form on the page */
        }

        label, input {
            margin-bottom: 15px; /* Add space between elements */
        }

        input[type="text"] {
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        tbody tr {
    transition: background-color 0.3s ease;
    /* Smooth background color change */
}

tbody tr:hover {
    background-color: #f2f2f2;
    /* Highlight on hover */
}

/* table {
    width: 100%;
    border-collapse: collapse;
}

table,
th,
td {
    border: 1px solid black;
    font-weight: bold;
}

th,
td {
    padding: 15px;
    text-align: left;
}

th {
    background-color: black;
    color: white;
} */





.table {
    width: 100%;
    margin: 20px 0;
    border-collapse: collapse; /* Removes space between cells */
}

.table th, .table td {
    padding: 12px 15px; /* Adds padding for better readability */
    text-align: left; /* Aligns text to the left */
}

.table th {
    background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black header background */
    color: #ffffff; /* White text for headers */
    border-bottom: 2px solid #ffffff; /* Distinct bottom border */
}

.table tr {
    transition: background-color 0.3s; /* Smooth transition for hover effect */
}

.table tr:nth-child(even) {
    background-color: rgba(255, 255, 255, 0.1); /* Light grey transparency for even rows */
}

.table tr:hover {
    background-color: rgba(255, 255, 255, 0.2); /* Slightly more opaque on hover */
}

/* Button Styles */
.btn {
    padding: 8px 12px; /* Button padding */
    border: none; /* No border */
    border-radius: 4px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    text-decoration: none; /* No underline */
}

.btn-primary {
    background-color: #007bff; /* Primary button color */
    color: #ffffff; /* White text */
}

.btn-danger {
    background-color: #dc3545; /* Danger button color */
    color: #ffffff; /* White text */
}

.btn:hover {
    opacity: 0.9; /* Slightly less transparent on hover */
}

/* Black background with blur effect */
#burgerTable {
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
    backdrop-filter: blur(10px); /* Applies a blur effect to the background */
    border-radius: 10px; /* Rounded corners for the table */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Subtle shadow for depth */
    margin: 20px auto; /* Center the table horizontally */
    width: 90%; /* Adjust table width */
    overflow: hidden; /* Hide overflow */
}










    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4"> Menu</h1>
    <table class="table table-bordered bg-dark text-white" id="burgerTable" >
       
            <tr>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Price (LKR)</th>
                <th>Qty</th>
                <th>Edit</th>
                <th>Delete</th>
                 </tr>
                 <tr>
                    <?php
                    while($row=mysqli_fetch_assoc($result)){
                      ?>
                      <td><?php echo $row['itemCode'] ?></td>
                      <td><?php echo $row['itemName'] ?></td>
                      <td><?php echo $row['price'] ?></td>
                      <td><?php echo $row['quantity'] ?></td>
                      <td>
                          <a href="editItem.php?itemCode=<?php echo $row['itemCode']; ?>" class="btn btn-primary">Edit</a>
                        </td>
                      <td>
                      <a href="deleteItem.php?itemCode=<?php echo $row['itemCode']; ?>" class="btn btn-danger">Delete</a>
                     </td>
                        </tr>
                      <?php
                    }
                    ?>
               
        
    </table>
    <table class="Table" id="TableOrder">
    <h1 class="mb-4"> Order Details</h1>
        <thead>
            <tr>
                <th>Order Id</th>
                <th>Item Name</th>
                <th>Qty</th>
                <th>Price (LKR)</th>
                <th>Action</th>
                                    </tr>
                                    <tr>
                                    <?php
                    while($row=mysqli_fetch_assoc($resultOrders)){
                      ?>
                      <td><?php echo $row['oid'] ?></td>
                      <td><?php echo $row['itemName'] ?></td>
                      <td><?php echo $row['quantity'] ?></td>
                      <td><?php echo $row['price'] ?></td>
                       </tr>
                      <?php
                    }
                    ?>
                    </tr>
        </thead>
           </table>

           <table class="Table" id="TableOrder">
        <thead>
            <tr>
                <th>Reservation Id</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Date</th>
                <th>Time</th>
                <th>Number of Guests</th>
                                    </tr>
                                    <tr>
                                    <?php
                    while($row=mysqli_fetch_assoc($resultreserve)){
                      ?>
                      <td><?php echo $row['reservationId'] ?></td>
                      <td><?php echo $row['custName'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['date'] ?></td>
                      <td><?php echo $row['time'] ?></td>
                      <td><?php echo $row['guestsNo'] ?></td>
                       </tr>
                      <?php
                    }
                    ?>
                    </tr>
        </thead>
            </table>

<form class="" action="" method="post" autocomplete="off">
    <label for=""> Item Code</label>
    <input type="text" name="itemcode" required value="">
    <label for=""> Item name</label>
    <input type="text" name="itemname" required value="">
    <label for=""> price</label>
    <input type="text" name="price" required value="">
    <label for=""> Quantity</label>
    <input type="text" name="qty" required value="">
    <br>
    <button type="submit" name="submit">submit</button>
</form>    
</body>
</html>