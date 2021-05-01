jQuery(document).ready(function( $ ) {

	const circle = document.querySelector('.progress__ring-circle');
	const radius = circle.r.baseVal.value;
	const circumference = 2 * Math.PI * radius;
	circle.style.strokeDasharray = `${circumference} ${circumference}`;
	var counter = Number.parseInt(document.querySelector('.conscription__counter-number').textContent);
	let percents = (Math.round(counter) / Math.round(counter+20)) * 100;
	function setProgress(percent) {
		const offset = circumference - percent / 100 * circumference;
		circle.style.strokeDashoffset = offset;
	}
	setProgress(percents);

// Меню

	const burger = document.querySelector('.header__top-burger');
	const menu = document.querySelector('.header__menu');
	const close = document.querySelector('.header__menu-img-close');

	burger.addEventListener("click", function() {
		if (window.innerWidth < 992) {
			menu.style.display = "block";
		}
	});
	close.onclick = () => {
		if (window.innerWidth < 992) {
			menu.style.display = "none";
		}
	};

// Колокольчик

	const bell = document.querySelector('.header__notifications-img');
	const bell_counter = document.querySelector('.header__notifications-counter');
	const small_menu_counter = document.querySelector('.header__menu-list__counter');
	if (bell_counter) {
		small_menu_counter.textContent = bell_counter.textContent;
		if ((bell_counter.textContent).trim() != "") {
			bell.setAttribute('src', "https://povestka.by/wp-content/themes/stable/img/header/bell-active.svg");
			bell_counter.style.display = "block";
			small_menu_counter.style.display = "block";
		} else if ((bell_counter.textContent).trim() == "") {
			bell.setAttribute('src', "https://povestka.by/wp-content/themes/stable/img/header/bell.svg");
			bell_counter.style.display = "none";
			small_menu_counter.style.display = "none";
		}
	}

	// Слайдер
	$('.advantages__slider').slick({
		mobileFirst: true,
		arrows: false,
		dots: true,
		slidesToShow: 3,
		infinite: false,
		responsive: [{
			breakpoint: 568,
			settings: 'unslick'
		}]
	});

	$(window).resize(function () {
		if (window.innerWidth > 992) {
			burger.style.display = "none";
		} else {
			burger.style.display = "block";
		}
	});

    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $formLoading = $('#login-modal .loading-block');
    var $formSuccess = $('#login-modal .success-block');
    var $formError = $('#login-modal .error-block');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $("#login-modal form").submit(function (e) {
        switch(this.id) {
            case "login-form":
				e.preventDefault();
				var height = $('#login-form').height();
				
				$formLoading.height(height);
				$formSuccess.height(height);
				$formError.height(height);
				
				$formLogin.hide();
				$formLoading.show();
		
				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: ajaxurl,
					data: { 
						'action': 'ajaxlogin',
						'username': $('#login-modal form input[name="email"]').val(),
						'password': $('#login-modal form input[name="password"]').val(),
						'remember': $('#login-modal form input[name="remember"]').is(":checked"),
						'security': $('#login-modal form input[name="security"]').val()
					},
					success: function(data){
						console.log(data);
						if(data['success']){
							$formLoading.hide();
							$formSuccess.show();
							setTimeout(function() {
								document.location.reload();
							}, 3000); 							
						}else{
							$formLoading.hide();
							$('#login-modal .error-block .text').html(data['data']);
							$formError.show();
							setTimeout(function() {
    							$formError.hide();
								$formLogin.show();
							}, 3000); 
						}
					}
				});
                return false;
                break;
            case "lost-form":
				e.preventDefault();
				var height = $('#lost-form').height();
				console.log(height);
				
				$formLoading.height(height);
				$formSuccess.height(height);
				
				$formLost.hide();
				$formLoading.show();
				$.ajax({
					type: 'POST',
					dataType: 'json',
					url: ajaxurl,
					data: { 
						'action': 'ajaxlost',
						'username': $('#login-modal form#lost-form input[name="email"]').val(),
						'security': $('#login-modal form#lost-form input[name="security"]').val()
					},
					success: function(data){
						console.log(data);
						$formLoading.hide();
						$('#login-modal .success-block .text').html("Проверьте свой email");
						$formSuccess.show();
						setTimeout(function() {
							document.location.reload();
						}, 5000); 							
					}
				});			
                return false;
                break;
            case "register-form":

                return false;
                break;
            default:
                return false;
        }
        return false;
    });
    
    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });
    
    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }

});