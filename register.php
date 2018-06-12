<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("radiusbackend", $connection); // Selecting Database.
$name=$_POST['uname1']; // Fetching Values from URL.

$password= sha1($_POST['pword1']); // Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
$name=$_POST['fname1']; // Fetching Values from URL.
$name=$_POST['lname1']; // Fetching Values from URL.
$name=$_POST['address1']; // Fetching Values from URL.
$name=$_POST['contact1']; // Fetching Values from URL.
$email=$_POST['email1'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysql_query("SELECT * FROM user_accounts WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into user_accounts(uname, pword,fname,lname,contact,email,address) values ('$name', '$uname', '$pword','$fname','$lname','$contact','$email','$address')"); // Insert query
if($query){
echo "You have Successfully Registered.....";
}else
{
echo "Error....!!";
}
}else{
echo "This email is already registered, Please try another email...";
}