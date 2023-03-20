$(document).ready(function () {
    // Get the user data from local storage
    var userData = JSON.parse(localStorage.getItem("userData"));
      console.log(userData)
      console.log(userData.username)
    // Display the user data on the page
    $("#fullname").val(userData.fullname);
    // Set the value of the email input field
    $("#email").val(userData.email);
    $("#phone").val(userData.phone);
    $("#age").val(userData.age);
    $("#dob").val(userData.dob);
    $("#education").val(userData.education);
    $("#street").val(userData.street);
    $("#city").val(userData.city);
    $("#state").val(userData.state);
    $("#zip").val(userData.zipcode);
  });