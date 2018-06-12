 $(document).ready(function() {
$("#submit").click(function() {
var uname = $("#uname").val();
var email = $("#email").val();
var pword = $("#pword").val();
var pword-confirmation = $("#pword-confirmation").val();
var fname = $("#fname").val();
var lname = $("#lname").val();
var contact = $("#contact").val();
var address = $("#address").val();

if (uname == '' || email == '' || pword == '' || pword-confirmation == '') {
alert("Please fill all fields...!!!!!!");
} else if ((password.length) < 8) {
alert("Password should atleast 8 character in length...!!!!!!");
} else if (!(password).match(cpassword)) {
alert("Your passwords don't match. Try again?");
} else {
$.post("register.php", {
uname1: uname,
fname1: fname,
lname1: lname,
contact1: contact,
address1: address,
email1: email,
pword1: pword,
pword-confirmation1: pword-confirmation
}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("modal-content")[0].reset();
}
alert(data);
});
}
});
});
  }