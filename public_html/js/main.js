// $('#myModal').on('shown.bs.modal', function () {
//     $('#myInput').trigger('focus')
//   })
//   var DOMAIN = "http://localhost/projects/Inventory-APP-in-PHP/public_html";

$(document).ready(function(){

  var DOMAIN = "http://localhost/projects/Inventory-APP-in-PHP/public_html";

    $("#register_form").on("submit",function () {
      var status = false;

      var name = $("#username");
      var email = $("#email");
      var pass1 = $("#password1");
      var pass2 = $("#password2");
      var type = $("#usertype");

      var n_patt = new RegExp(/^[A-Za-z ]+$/);
      var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

      if(name.val() == "" || name.val().length < 6){
        name.addClass("border-danger");
        $("#u_error").html("<span class='text-danger'>Please Enter Name with at least 6 char</span>");
        status = false;
      } else {
        name.removeClass("border-danger");
        $("#u_error").html("");
        status = true;
      }

      if(!e_patt.test(email.val())){
        email.addClass("border-danger");
        $("#e_error").html("<span class='text-danger'>Please Enter Valid Email Adress</span>");
        status = false;
      } else {
        email.removeClass("border-danger");
        $("#e_error").html("");
        status = true;
      }

      if(pass1.val() == "" || pass1.val().length < 9){
        pass1.addClass("border-danger");
        $("#p1_error").html("<span class='text-danger'>Please Enter Password with at least 9 chars</span>");
        status = false;
      } else {
        pass1.removeClass("border-danger");
        $("#p1_error").html("");
        status = true;
      }

      if(pass2.val() == "" || pass2.val().length < 9){
        pass2.addClass("border-danger");
        $("#p2_error").html("<span class='text-danger'>Please Enter Password with at least 9 chars</span>");
        status = false;
      } else {
        pass2.removeClass("border-danger");
        $("#p2_error").html("");
        status = true;
      }

      if(type.val() == ""){
        type.addClass("border-danger");
        $("#t_error").html("<span class='text-danger'>Please Choose User Type</span>");
        status = false;
      } else {
        type.removeClass("border-danger");
        $("#t_error").html("");
        status = true;
      }
     
      if ((pass1.val() == pass2.val()) && status == true) {
        $.ajax({
          url : DOMAIN+"/includes/process.php",
          method : "POST",
          data : $("#register_form").serialize(),
          success : function(data){
            if (data == "EMAIL_ALREADY_EXISTS") {
              alert("It seems like you email is already used");
            }else if(data == "SOME_ERROR"){
              alert("Something Wrong");
            }else{
              window.location.href = encodeURI(DOMAIN+"/index.php?msg=You are registered Now you can login");
            }
          }
        })
      }else{
        pass2.addClass("border-danger");
        $("#p2_error").html("<span class='text-danger'>Password is not matched</span>");
        status = true;
      }
    });

    // Login logic

    $("#form_login").on("submit",function(){
      var email  = $("#log_email");
      var pass   = $("#log_password");
      var status = false;

      if (email.val() == "") {
        email.addClass("border-danger");
        $("#e_error").html("<span class='text-danger'>You didn't type in your email</span>");
        status = false;
      } else {
        email.removeClass("border-danger");
        $("#e_error").html("");
        status = true;
      }

      if (pass.val() == "") {
        pass.addClass("border-danger");
        $("#p_error").html("<span class='text-danger'>You didn't type in your password</span>");
        status = false;
      } else {
        pass.removeClass("border-danger");
        $("#p_error").html("");
        status = true;
      }

      if(status) {
        $.ajax({
          url : DOMAIN+"/includes/process.php",
          method : "POST",
          data : $("#form_login").serialize(),
          success : function(data){
            if (data == "NOT_REGISTERD") {
              email.addClass("border-danger");
              $("#e_error").html("<span class='text-danger'>You are not registered</span>");
            }else if(data == "WRONG_PASSWORD"){
              pass.addClass("border-danger");
              $("#p_error").html("<span class='text-danger'>Enter correct password</span>");
              status = false;
            }else{
              console.log(data);
              window.location.href = DOMAIN+"/dashboard.php";
            }
          }
        })
      }
    })


})