$("#login-form").on("submit", function (e) {
    e.preventDefault();
    var form = $(this);
    console.log($("input[name='email']").val());
    console.log($("input[name='password']").val());
    $.ajax({
      type: "POST",
      url: "php/login.php",
      data: {
        email: $("input[name='email']").val(),
        password: $("input[name='password']").val(),
      },
      error: function (xhr, textStatus, errorThrown) {
        console.log(xhr.responseText);
      },
      success: function (response) {
        console.log(response);
        localStorage.setItem("userData", response);
        console.log(localStorage.setItem("userData", response))
        window.location.href = "profile.html";
      },
    });
  });