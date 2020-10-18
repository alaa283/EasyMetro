// Programming by : Tatwerat Team
// www.tatwerat.com
/*------------------------*/
//.Menu
$(document).ready(function() {
	 $('.Menu ul li').hover(function() {
		  $(this).find('ul:first').css({"display":"none","visibility":"visible"}).slideDown(350);
	 },function(){
		  $(this).find('ul:first').css({"display":"none","visibility":"visible"}).slideUp(350);
	 });    
});
//.Widget Toggle 
$(document).ready(function() {
    $('.Widget h2 span').click(function() {
		var class_name = $(this).parent().next('div').attr('class');
        if($(this).parent().next('div').is(':hidden')){
			$(this).parent().next('div').slideDown(400);
			$(this).text('-');
		}
		else{
			$(this).parent().next('div').slideUp(400);
			$(this).text('+');
		}
    });
});
//#Login_Form
$(document).ready(function() {
    $('#Login_Form').submit(function() {
        var name = $('.login_email',this).val();
		var pass = $('.login_pass',this).val();
		var emailfilter = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if(name == ''){
			$('.login_email',this).focus();
			return false;
		}
		else if (!emailfilter.test(name)) {
			$('.login_email',this).focus();
			return false;
		}
		else if(pass == ''){
			$('.login_pass',this).focus();
			return false;
		}
    });
});
//Form checkbox , radio
$(document).ready(function() {
    $('.radio,.checkbox').iCheck();
});
//Clients_Slider
$(document).ready(function() {
    $("#Our_Clients .Clients_Slider").jCarouselLite({
		btnNext: "#Our_Clients .next",
		btnPrev: "#Our_Clients .back",
		visible: 4,
		speed: 400,
		auto: 0,
		//easing: "elasinout",
		//vertical: true,
	});
});
//Services_Slider
$(document).ready(function() {
    $("#Services .Services_Slider").jCarouselLite({
		btnNext: "#Services .next",
		btnPrev: "#Services .back",
		visible: 1,
		speed: 800,
		auto: 0,
		//easing: "elasinout",
		//vertical: true,
	});
});
