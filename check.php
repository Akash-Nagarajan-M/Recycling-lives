<?php
session_start();
$conn=mysqli_connect('localhost','root','','edispose');
$ord_id=$_POST['id'];
$query1="Select *from user_orders where Order_id='$ord_id'";
if ($result1 = $conn->query($query1)) {
    echo '<table border="1px solid black"  cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Order_id</font> </td> 
          <td> <font face="Arial">Item_Name</font> </td> 
          <td> <font face="Arial">Price</font> </td> 
          <td> <font face="Arial">Quantity</font> </td> </tr>';
    while ($row = $result1->fetch_assoc()) {
        $field1name = $row["Order_id"];
        $field2name = $row["Item_Name"];
        $field3name = $row["Price"];
        $field4name = $row["Quantity"];
        echo "<tr>
        <td>$field1name</td>
        <td>$field2name</td>
        <td>$field3name</td>
        <td>$field4name</td>
        </tr>";
    }
}

?>