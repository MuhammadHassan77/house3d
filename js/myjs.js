$(document).ready(function () {
  $(".first-tab-btn").click(function () {
    $(".nav-main, .all-tab").slideUp(500);
    $(".first-tab").slideDown(500);
  });
  // for show sec tab
  $(".sec-tab-btn").click(function () {
    $(".nav-main").slideUp(500);
    $(".sec-tab").fadeIn(500);
  });
  $(".select-parts li").click(function () {
    $(".select-parts").fadeOut(500);
    $(".color-tab").fadeIn(500);
  });
  $(".parts-cross").click(function () {
    $(".sec-tab").fadeOut(200);
    $(".nav-main").slideDown(500);
  });

  $(".circle").click(function () {
    $(".circle").removeClass("clr-active");
    $(this).addClass("clr-active");
  });

  // for first tab hide
  $(".fmenu_cross").click(function () {
    $(".first-tab").slideUp(500);
    $(".nav-main").slideDown(600);
  });

  //for show size-menu
  $(".size-btn").click(function () {
    $(".size-menu").slideDown(500);
    $(".first-menu").slideUp(500);
  });
  // for first tab hide
  $(".clr_cross").click(function () {
    $(".color-tab").fadeOut(500);
    $(".select-parts").slideDown(1000);
    $(".sec-tab").fadeOut(500);
    $(".nav-main").slideDown(500);
  });
  //for show first-menu back
  $(".menu-btn").click(function () {
    $(".size-menu").slideUp(500);
    $(".first-menu").slideDown(500);
  });

  //for show third-menu
  $(".third-tab-btn").click(function () {
    $(".nav-main").slideUp(500);
    $(".third-tab").slideDown(500);
  });

  // for third tab hide
  $(".story-menu-cross").click(function () {
    $(".third-tab").slideUp(500);
    $(".nav-main").slideDown(500);
  });

  //for show four-menu
  $(".four-tab-btn").click(function () {
    $(".nav-main").slideUp(500);
    $(".four-tab").slideDown(500);
  });

  // for four tab hide
  $(".ad-menu-cross").click(function () {
    $(".four-tab").slideUp(500);
    $(".nav-main").slideDown(500);
  });

  //for show four-menu
  $(".five-tab-btn").click(function () {
    $(".nav-main").slideUp(500);
    $(".five-tab").slideDown(500);
  });

  // for four tab hide
  $(".instal-menu-cross").click(function () {
    $(".five-tab").slideUp(500);
    $(".nav-main").slideDown(500);
  });


  // start-mobile

  $('.mob-navigator').click(function () {
    $('.tabs-design').addClass('d-none');
    $($(this).attr('data-tab')).removeClass('d-none');
  });

  $('.close-icon').click(function () {
    $('.tabs-design').addClass('d-none');
  });
  // end-mobile

  // ---------------------  REGISTRATION FORM THROUGH AJAX ---------------------//

  $(".signup-btn").on("click", function (e) {
    e.preventDefault();

    var fname = $(".fname").val().trim();
    var lname = $(".lname").val().trim();
    var email = $(".email").val().trim();
    var pass = $(".pass").val().trim();
    var phone = $(".phone").val().trim();
    // var error = $(".error-message").trim();

    if (
      fname !== "" &&
      lname !== "" &&
      email !== "" &&
      pass !== "" &&
      phone !== ""
    ) {
      $.ajax({
        url: "./func.php",
        type: "POST",
        data: {
          act: "register",
          f_name: fname,
          l_name: lname,
          u_email: email,
          u_pass: pass,
          u_number: phone,
        },
        success: function (data) {
          if (data == 1) {
            showMsg(".signupMsg", "success ", "Successfully SignUp");
            $(".reg_modal").modal("hide");
            $(".form-inp").val(null);
          } else {
            // error.css("display", "flex");
            error.html(data);
            console.log(data);
            // alert("Can't be Saved");
          }
        },
      });
    } else {
      showMsg(".signupMsg", "danger", "All Feilds are required!!");
    }
  });
  $(".login-btn").on("click", function (e) {
    e.preventDefault();

    var email = $(".log_email").val().trim();
    var pass = $(".log_pass").val().trim();

    if (email !== "" && pass !== "") {
      $.ajax({
        url: "./func.php",
        type: "POST",
        data: { act: "login", u_email: email, u_pass: pass },
        success: function (data) {
          if (data == 1) {
            showMsg(".loginMsg", "success ", "Successfully SignUp");
            $(".form-inp").val(null);
            $(".logout_btn").show();
            $(".ad-cart").attr("data-bs-target", "#enquiryModel");
            $(".reg_modal").delay(1000).modal("hide");
            $(".save_url_btns").removeClass("d-none");
          } else {
            console.log(data);
          }
        },
      });
    } else {
      showMsg(".loginMsg", "danger", "Fill the Fields!!");
    }
  });

  // for checking session  & showing components

  var currentUser = $("#currentUser").val();
  if (currentUser == "") {
    $(".logout_btn").hide();
    $(".save_url_btns").addClass("d-none")
  } else {
    $(".logout_btn").show();
    $(".save_url_btns").removeClass("d-none")
    $(".ad-cart").attr("data-bs-target", "#enquiryModel");
  }

  // logout

  $(document).on("click", ".logout_btn", function () {
    $.ajax({
      url: "./func.php",
      method: "POST",
      data: { act: "logout" },
      caches: false,
      success: (res) => {
        // console.log(res);
        if (res == "success") {
          // alert("LOGOUT HOGYA");
          $(".logout_btn").hide();
          $(".save_url_btns").addClass("d-none")
          $(".ad-cart").attr("data-bs-target", "#staticBackdrop");
        } else {
          alert("error");
        }
      },
      error: (err) => {
        console.log(err);
      },
    });
  });

  // save url work

  $("#saveUrl").val(window.location.origin + window.location.pathname);
  let lastId;
  $(".saveChanges").on("click", function (e) {
    e.preventDefault();
    var save_url = window.location.origin + window.location.pathname;
    // var u_id = $("#userId").val();
    config.partsToggle.splice(0, config.partsToggle.length)
    partNames.filter((pname, i) => {
      if (pname.modelName.name == config.modelSize)
        Object.keys(pname).map((item, ind) => {
          if (pname[item].name != config.modelSize) {
            config.partsToggle.push(pname[item])
          }
        })
    })
    // console.log(config, partNames);
    $.ajax({
      url: "./func.php",
      type: "POST",
      data: {
        act: "createLink",
        details: JSON.stringify(config),
        url: save_url,
      },
      success: function (res) {
        // alert(data);
        // console.log(res);
        res = JSON.parse(res);
        if (res.result == "success") {
          lastId = res.lastId;
          $('#urlShow').val(save_url + "?id=" + res.lastId);
          $("#urlPupop").modal("show");
        } else {
          alert("cant save record");
        }
      },
    });
  });
  // opening new window for savechanges
  $(document).on("click", "#applyChangesBtn", function () {
    if (lastId !== "" || lastId !== undefined) {
      window.open($("#urlShow").val(), '_blank').focus();
    } else {
      window.open(window.location.origin + window.location.pathname, '_blank').focus();
    }
  })

  // for stories
  var userStory;
  $(".story-tab .tabs-item,.tab-story .model-box").click(function () {
    userStory = $(this).attr("data-story");
    // alert(userStory);
    $("#story").val(userStory);
  });

  // enquiry js

  $("#enq_btn").on("click", function (e) {
    e.preventDefault();
    // alert('click');

    var f_name = $("#full_name").val().trim();
    var e_email = $("#enquiryEmail").val().trim();
    var e_number = $("#contactNumber").val().trim();
    var e_detail = $("#enquiryDetail").val().trim();

    if (e_email == "" || f_name == "" || e_number == "" || e_detail == "") {
      alert("Please fill The Flieds");
    } else {
      $.ajax({
        url: "./func.php",
        type: "POST",
        data: {
          act: "enq",
          full_name: f_name,
          enquiryEmail: e_email,
          stories: userStory,
          contactNumber: e_number,
          enquiryDetail: e_detail,
        },
        success: function (data) {
          if (data == 1) {
            $("#enquiryModel").modal("hide");
            alert("done");
          } else {
            alert("cant save record");
          }
        },
      });
    }
  });

  let model1_parts = {
    roof: "structure, Wood Joist/Rafter Layer, Batt Insulation",
    interior: "Wood-SPI",
    wall: "Gypsum Wall Board",
  };

  function showMsg(targetElem, type, msg) {
    $(
      targetElem
    ).html(`<div class="alert alert-${type} alert-dismissible fade show m- p-1" role="alert" style="border-radius:100px">
    <strong>${msg}</strong>
    <button type="button" class="btn-close m-1 p-1" data-bs-dismiss="alert" aria-label="Close"></button></div>
</div>`);
  }
});
//
