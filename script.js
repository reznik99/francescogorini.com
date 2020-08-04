$(document).ready(function () {
	/*var bar = new ProgressBar.Circle(".skill_level", {
		color: '#aaa',
		// This has to be the same size as the maximum width to
		// prevent clipping
		strokeWidth: 4,
		trailWidth: 1,
		easing: 'easeInOut',
		duration: 1000,
		text: {
			autoStyleContainer: false
		},
		from: { color: '#ff0000', width: 1 },
		to: { color: '#14a2d8', width: 4 },
		// Set default step function for all animate calls
		step: function(state, circle) {
			circle.path.setAttribute('stroke', state.color);
			circle.path.setAttribute('stroke-width', state.width);

			var value = Math.round(circle.value() * 100);
			if (value === 0) {
				circle.setText('');
			} else {
				circle.setText(value);
			}
		}
	});
	bar.text.style.fontFamily = '"Raleway", Helvetica, sans-serif';
	bar.text.style.fontSize = '2rem';
	*/
    //FUNCTIONS
    function showSkillDesc($this) {
        //variables
        let $arrow = $(".skills_description_arrow");
        let visible_description = "." + $this.text();
        //move skill level display to new div
        $(".skill_level").prependTo(visible_description);
        //remove previous hover and description
        $(".skills_list_item_hovered").removeClass("skills_list_item_hovered");
        $(".visible_description").removeClass("visible_description");
        //hover effect
        $this.addClass("skills_list_item_hovered");
        //move arrow (pos + halfwhidthButton - halfwidthArrow) (innerwidth incldues padding not margin||border)
        let leftVal = $this.position().left + $this.width() / 2;
        $arrow.css("margin-left", leftVal);
        //show new description
        $(visible_description).addClass("visible_description");
        //animate skill level bar (get value from html attribute)
        $(visible_description + " .language_grade_value").width($(visible_description + " .language_grade_value").attr("width"));
        bar.animate($(visible_description).attr("width") / 100);
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
    window.addEventListener('resize', function () {
        $('.skills_list_item_hovered').click();
        adjustNavBackground();
    }, true);

    $(document).on('scroll', adjustNavBackground);

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
    //handle click on skills
    $(".skills_list_item").on('click', () => showSkillDesc($(this)));

    //temporary UnderConstruction close
	/*$(".under_construction a").on("click", function(){
		$(".under_construction").fadeOut();
	});*/

    //RUN ONCE

    //Select HTML5 as default selected skill
    $(".skills_list_item:first-child").trigger("click");
});
