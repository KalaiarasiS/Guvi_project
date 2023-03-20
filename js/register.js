$(document).ready(function () {
    $("#registrationForm").submit(function (e) {
      e.preventDefault();
  
      var firstname = $("input[name='firstname']").val();
      var lastname = $("input[name='lastname']").val();
      var email = $("input[name='email']").val();
      var password = $("input[name='password']").val();
      var cpassword = $("input[name='cpassword']").val();
      
      alert(username);
      $.ajax({
        url: "php/register.php",
        method: "POST",
        data: {
          firstname: firstname,
          lastname: lastname,
          email: email,
          password: password,
          cpassword: cpassword
        },
        success: function (data) {
          alert(data);
          $("#registrationForm")[0].reset();
        },
      });
    });
  });