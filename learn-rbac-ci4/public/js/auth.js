$(document).ready(() => {
  $("#loginForm").on("submit", function (e) {
    e.preventDefault();
    let loginData = $(this).serialize();
    // console.log(loginData);

    $.ajax({
      url: "/api/auth/login",
      type: "POST",
      dataType: "json",
      data: loginData,
      success: (response) => {
        if (response.success) {
          console.log(response.message);
          // future update: show popup login success
          // console.log();

          // redirect just for testing
          // window.location.href = "/";
          window.location.href = "/home";
          // window.location.href = "/user-management";
          // window.location.href = "/create-transaction";
        } else {
          console.log(response.message);
        }
      },
      error: (xhr, error, status) => {
        console.log(xhr);
        console.log(error);
        console.log(status);
      },
    });
  });
});
