

<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking System</title>
</head>
<body>
    

    <h2>Book a Room</h2>
    <form>
        <table border=1>
            <tr>
                <th>Select Location
                    <select name="lo" >
                        <option value="" name="se">select loction</option>
                        <option value="" name="l1">Guwahati</option>
                        <option value="" name="l2">Nalbari</option>
                        <option value="" name="l3">Pathsala</option>
                    </select>
                </th>
                <th>Select Hotal Name
                    <select name="na">
                        <option value="" name="s">select hoatl name</option>
                        <option value="" name="h1">Hotal Guwahati</option>
                        <option value="" name="h2">Nalbari Hotal </option>
                        <option value="" name="h3">Pathsala Hotal</option>
                    </select>
                </th>
            </tr>
            <tr><th colspan=2><input type="submit" name="submit" value="search"></th></tr>
        </table> 
                   
    </form>
<?php
include ('dbc.php');
// select location and name
if ( isset($_POST['submit'])) {
    $na = $_POST['l1'];
    $email = $_POST['h1'];
    $roomt = $_POST['roomtype'];
    $price = $_POST['price'];
    $checkin = date('Y-m-d', strtotime($_POST['cin']));
    $checkout = date('Y-m-d', strtotime($_POST['cout']));

    $sql = "INSERT INTO bhotal (name, email, roomtype, price, cin, cout)
              VALUES ('$na', '$email', '$roomt','$price', '$checkin', '$checkout')";

    $qu=mysqli_query($con,$sql);

    if($qu)
{?>
    <script>
        alert("submited successfully");
    </script>
<?php
}
    else{
    ?>
    <script>
        alert("Error");
    </script>
<?php } }
?>


    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Room Type: 
        <select name="roomtype" id="rt" onmouseout="result()" required>
            <option value="Select" id="se" >Select Room Type</option>
            <option value="Single" id="s" >Single</option>
            <option value="Double"id="d" >Double</option>
            <option value="Suite"id="su">Suite</option>
        </select><br>
        Price: <input type="text" name="price" id="p" readonly required ><br>
           
        </select><br>
        Check-in Date: <input type="date" name="cin" required><br>
        Check-out Date: <input type="date" name="cout" required><br>
        <input type="submit" name="submit" value="Book Now">
    </form>
    <script>
    function result() {
        var a = document.getElementById("rt").value; // Get the selected room type
        var price;
        if (a == "Select") {
            price = 0;
        } else if (a == "Single") {
            price = 1500;
        } else if (a == "Double") {
            price = 2000;
        } else if (a == "Suite") {
            price = 4500;
        }
        document.getElementById("p").value = price; // Set the price in the price input
    }
</script>

    
    </table>
</body>
</html>
<?php
include ('dbc.php');
// Booking a ;room
if ( isset($_POST['submit'])) {
    $na = $_POST['name'];
    $email = $_POST['email'];
    $roomt = $_POST['roomtype'];
    $price = $_POST['price'];
    $checkin = date('Y-m-d', strtotime($_POST['cin']));
    $checkout = date('Y-m-d', strtotime($_POST['cout']));

    $sql = "INSERT INTO bhotal (name, email, roomtype, price, cin, cout)
              VALUES ('$na', '$email', '$roomt','$price', '$checkin', '$checkout')";

    $qu=mysqli_query($con,$sql);

    if($qu)
{?>
    <script>
        alert("submited successfully");
    </script>
<?php
}
    else{
    ?>
    <script>
        alert("Error");
    </script>
<?php } }
?>


