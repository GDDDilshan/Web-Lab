<html>

<body>

<?php
  $fName = $_REQUEST['firstName'];
  $lName = $_REQUEST['lastName'];
  $username = $_REQUEST['username'];
  $pwd = $_REQUEST['password'];
  $gender = $_REQUEST['gender'];
  $academicYear =$_REQUEST['academicYear'];
  $pemailwd = $_REQUEST['email'];
  $phone =$_REQUEST['phone'];


?>
<table border="1">

<tr>
    <td>Frist Name<td>
        <td><?php echo $fName ?></td>
</tr>
<tr>
    <td>Last Name<td>
        <td><?php echo $lName ?></td>
</tr>
<tr>
    <td>username<td>
        <td><?php echo $username ?></td>
</tr>
<tr>
    <td>Password<td>
        <td>Password<?php echo $pwd ?></td>
</tr>
<tr>
    <td>Gender<td>
        <td><?php echo $gender ?></td>
</tr>
<tr>
    <td>Academic Year<td>
        <td><?php echo $academicYear ?></td>
</tr>
<tr>
    <td>Email<td>
        <td><?php echo $pemailwd ?></td>
</tr>
<tr>
    <td>Phone No<td>
        <td><?php echo $phone ?></td>
</tr>

</table>


</body>


</html>