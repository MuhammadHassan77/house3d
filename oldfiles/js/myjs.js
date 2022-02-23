
$(document).ready(function () {

    $('.first-tab-btn').click(function () {
        $('.nav-main, .all-tab').slideUp(500);
        $('.first-tab').slideDown(500);
    });

    // for show sec tab 
    $('.sec-tab-btn').click(function () {
        $('.nav-main').slideUp(500);
        $('.sec-tab').fadeIn(500);
    });
    $('.select-parts li').click(function () {
        $('.select-parts').fadeOut(500);
        $('.color-tab').fadeIn(500);
    });
    $('.parts-cross').click(function () {
        $('.sec-tab').fadeOut(200);
        $('.nav-main').slideDown(500);
    });

    $(".circle").click(function () {
        $(".circle").removeClass("clr-active");
        $(this).addClass("clr-active");
    });

    // for first tab hide
    $('.fmenu_cross').click(function () {
        $('.first-tab').slideUp(500);
        $('.nav-main').slideDown(600);

    });

    //for show size-menu
    $('.size-btn').click(function () {
        $('.size-menu').slideDown(500);
        $('.first-menu').slideUp(500);

    });
    //for show first-menu back
    $('.menu-btn').click(function () {
        $('.size-menu').slideUp(500);
        $('.first-menu').slideDown(500);

    });
    // for first tab hide
    $('.clr_cross').click(function () {
        $('.color-tab').fadeOut(500);
        $('.select-parts').slideDown(1000);
        $('.sec-tab').fadeOut(500);
        $('.nav-main').slideDown(500);
    });

    //for show third-menu 
    $('.third-tab-btn').click(function () {
        $('.nav-main').slideUp(500);
        $('.third-tab').slideDown(500);

    });

    // for third tab hide
    $('.story-menu-cross').click(function () {
        $('.third-tab').slideUp(500);
        $('.nav-main').slideDown(500);
    });

    //for show four-menu 
    $('.four-tab-btn').click(function () {
        $('.nav-main').slideUp(500);
        $('.four-tab').slideDown(500);

    });

    // for four tab hide
    $('.ad-menu-cross').click(function () {
        $('.four-tab').slideUp(500);
        $('.nav-main').slideDown(500);
    });

    //for show four-menu 
    $('.five-tab-btn').click(function () {
        $('.nav-main').slideUp(500);
        $('.five-tab').slideDown(500);

    });

    // for four tab hide
    $('.instal-menu-cross').click(function () {
        $('.five-tab').slideUp(500);
        $('.nav-main').slideDown(500);
    });



    //model sizing

    // $(document).on("click", ".selectModel", function () {
    //     // $(".loadingDiv").removeClass("d-none");
    //     // $("#clara-embed canvas").html(null);
    //     $("#clara-embed canvas").remove();
    //     // console.log($(this));
    //     let modelId = $(this).data('modelid');
    //     // alert(modelId);
    //     console.log(modelId);

    //     // $('.model_id').val(modelId);
    //     // setTimeout(() => {
    //         // $("#clara-embed .claraplayer div").append('<canvas width="1366" height="356" style="width: 1366px; height: 356px;"></canvas>');
    //     // }, 500);
    //     clara.sceneIO.fetchAndUse(modelId);

    //     // $(".selectModel").find("input[type='radio']").removeAttr("checked");
    //     // $('.total-price').val($(this).data('price'));


    // });










    // $(".fmenu_tick").click(function(){
    //     var rad = $(".abc:checked").val();

    //     // alert(rad);
    //     // var r2 = $("#r2:checked").val();
    //     // var r3 = $("#r3:checked").val();
    //     if(rad == '7a0c946c-5406-43cc-b38f-31b279307a0b'){
    //         alert('first radio' + r1);
    // //  clara.sceneIO.fetchAndUse('7a0c946c-5406-43cc-b38f-31b279307a0b');
    //     }else if(rad == '6147cb25-e665-4558-923b-e98343f138aa'){
    //         alert("sec radio" +  r2);
    // //  clara.sceneIO.fetchAndUse('6147cb25-e665-4558-923b-e98343f138aa');

    //     }else{
    //         alert('nooooooooooo');
    //     }
    // });

    // //for color bar show
    // $('.sec-tab-btn').click(function () {
    //     $('.nav-main, .tabs-style').slideUp(100);
    //     $('.sec-tab').slideDown(500);
    // });
    //for color bar hide
    // $('.color_cross').click(function () {
    //     $('.color_bar').fadeOut(500);
    //     $('.footer').slideDown(500);
    // });



    // ---------------------  REGISTRATION FORM THROUGH AJAX ---------------------//

    $(".signup-btn").on("click", function (e) {
        e.preventDefault();

        var fname = $(".fname").val();
        var lname = $(".lname").val();
        var email = $(".email").val();
        var pass = $(".pass").val();
        var phone = $(".phone").val();
        var error = $('.error-message');

        $.ajax({
            url: "signup.php",
            type: "POST",
            data: { f_name: fname, l_name: lname, u_email: email, u_pass: pass, u_number: phone },
            success: function (data) {
                if (data == 1) {
                    $('.reg_modal').modal('hide');
                    $('.h1').html("Signup SuccesFully!");
                    $(".form-inp").val(null);
                    alert("signUp Success");
                } else {
                    // error.css("display", "flex");
                    error.html(data);
                    console.log(data);
                    // alert("Can't be Saved");
                }
            }
        });
    });
    $(".login-btn").on("click", function (e) {
        e.preventDefault();

        var email = $(".log_email").val();
        var pass = $(".log_pass").val();
        // var error = $('.error-message');

        $.ajax({
            url: "login.php",
            type: "POST",
            data: { u_email: email, u_pass: pass },
            success: function (data) {
                if (data == 1) {
                    $('.reg_modal').modal('hide');

                    $('.h1').html("Login SuccesFully!");
                    $(".form-inp").val(null);
                    // alert("login SuccesFully!");
                } else {
                    // error.css("display", "flex");
                    // error.html(data); 
                    console.log(data);
                    // alert("Can't be Saved");
                }
            }
        });
    });

});