$(document).ready(function(){
	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop();
		if(scroll > 60){
			$('.tataboghTopHeaderBorder').css('padding-bottom','0px');
		}else{
			$('.tataboghTopHeaderBorder').css('padding-bottom','10px');
			$('#header .header-search .form-control').css('padding-bottom','10px');
		}
	});
	
	//Register & Login Modal Scripts
	$("#registerBtn").on('click',function(){
       $('.loginModalTatabogh').hide(); 
       $('.registerModalTatabogh').show(); 
       $('#loginModalTitle').html('ثبت نام تطابق')
    });
    $("#loginBtn").on('click',function(){
       $('.loginModalTatabogh').show(); 
       $('.registerModalTatabogh').hide(); 
       $('#loginModalTitle').html('ورود به ناحیه کاربری')
	});
	
	$('input[name=companyName]').change(function(){
		var valueInput = $('input[name=companyName]').val();
		var trimValue = valueInput.trim();
		if(trimValue !== ''){
			$('textarea[name=sector]').removeAttr('disabled');
		}else{
			$('textarea[name=sector]').attr("disabled","disabled");
			$('textarea[name=sector]').val("");
		}
	});
});