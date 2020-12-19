$(document).ready(function () {

    //FUNCTIONS
    function showMessage(message) {
        $('.form_message').text(message);
        $('.form_message').addClass('form_message_visible');
        setTimeout(function () {
            $('.form_message').removeClass('form_message_visible');
        }, 6000);
    }

    function adjustNavBackground() {
        let isMobile = $(window).width() < 960;
        //make nav smaller when scrolling down
        if (!isMobile) {
            if ($(window).scrollTop() > 25) { $(".nav").css("height", "6vh"); }
            else { $(".nav").css("height", "7vh"); }
        }
        //scroll indicator under nav
        let startingWidth = 0;
        if (isMobile) { startingWidth = 0 * window.innerWidth; }
        let expandableWidth = window.innerWidth - startingWidth;//val px
        let scrollPercentage = ($(window).scrollTop()) / ($(document).height() - window.innerHeight);//0 .. 1
        let width = scrollPercentage * expandableWidth; // max 80% of width

        $(".scrollborderbottom").width(startingWidth + width);
    }

    //EVENT LISTENERS

    $(document).on('scroll', adjustNavBackground);

    //submit email
    $(".submit_button").on('click', function (event) {
        console.log(grecaptcha.getResponse());
        $.ajax({
            type: "post",
            url: "sendEmail.php",
            data: {
                name: $(".send_message input[name='name']").val(),
                email: $(".send_message input[name='email']").val(),
                message: $(".send_message textarea[name='message']").val(),
                recaptcha_response: grecaptcha.getResponse(),
            },
            success: function () {
                showMessage("Email has been sent, I will be in touch soon!");
                window.scrollTo(0, 0); //scroll to top
                $(".send_message").trigger("reset"); //empty form
            },
            error: function (xhr, ajaxOptions, thrownError) {
                if (xhr.status == 403) {
                    showMessage("Captcha Failed, mail not sent, try again!");
                } else if (xhr.status == 500) {
                    showMessage("Couldn't send mail, possible mail server error! Please try again later or email me with your own client at goras.francesco@gmail.com");
                }
            }
        });
        event.preventDefault();
    });

    //any link with # in its href attr will scroll page to class with name after #
    $('a[href^="#"]').click(function (e) {
        e.preventDefault();
        let value = $("." + ($(this).attr('href').substr(1))).offset().top - $('.nav').height();//minus height of nav
        $('html,body').animate({ scrollTop: value }, 1000);
        if ($('.menu_button').hasClass("change")) { $(".change").click(); }
    });

    //toggle menu
    $(".menu_button").on('click', function () {
        $(".menu_button").toggleClass("change");
        $(".side_menu").toggleClass("open");
    });
});
