$(document).ready(function () {
  $(".menu").click(function () {
    $("nav").slideToggle();
  });

  $(window).resize(function () {
    if ($(window).width() > 768) {
      $("nav").show();
    } else {
      $("nav").hide();
    }
  });
  $(".allz2").hide();
  $("#mesreservations").show();

  $(".allz").hide();
  $("#ac").show();

  // $(".con").hide();
  // $("#home").show();

  $("#bres").click(function () {
    $(".allz2").hide();
    $("#mesreservations").show();
    $("a").removeClass("active");
    $("#bres").addClass("active");
  });
  $("#bem").click(function () {
    $(".allz2").hide();
    $("#mesemprunts").show();
    $("a").removeClass("active");
    $("#bem").addClass("active");
  });
  $("#bac").click(function () {
    $(".allz").hide();
    $("#ac").show();
    $("a").removeClass("active");
    $("#bac").addClass("active");
  });
  $("#bpas").click(function () {
    $(".allz").hide();
    $("#pas").show();
    $("a").removeClass("active");
    $("#bpas").addClass("active");
  });
  $("#bim").click(function () {
    $(".allz").hide();
    $("#im").show();
    $("a").removeClass("active");
    $("#bim").addClass("active");
  });
  ///////
  // $("#ahome").click(function () {
  //   $(".con").hide();
  //   $("#home").show();
  //   $("a").removeClass("active");
  //   $("#ahome").addClass("active");
  // });
  // $("#aClients").click(function () {
  //   $(".con").hide();
  //   $("#Clients").show();
  //   $("a").removeClass("active");
  //   $("#aClients").addClass("active");
  // });
  // $("#ademmande").click(function () {
  //   $(".con").hide();
  //   $("#demmande").show();
  //   $("a").removeClass("active");
  //   $("#ademmande").addClass("active");
  // });

  // $("#abooks").click(function () {
  //   $(".con").hide();
  //   $("#books").show();
  //   $("a").removeClass("active");
  //   $("#abooks").addClass("active");
  // });
  // get current URL path and assign 'active' class
});
