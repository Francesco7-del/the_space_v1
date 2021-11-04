var messages_content = $('.messages-content');
var greeting_intro = 0;
var response;
var main_data;

$(document).ready(function() {

	$.getJSON("https://api.countapi.xyz/hit/eni4sure.github.io/hngi-chatbot", function(view) {
		$("#page_view_no").html( view.value );
	});

	$.getJSON("https://disease.sh/v2/countries/NG", function(response) {
		main_data = response;
	});

});

$(window).load(function() {
	messages_content.mCustomScrollbar();
	setTimeout(function() {
		output_message();
	}, 100);
});

function updateScrollbar() {
	messages_content.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
		scrollInertia: 10,
		timeout: 0
	});
}

function insert_my_message() {
	msg = $('.message-input').val();
	if ($.trim(msg) == '') {
		return false;
	}
	$('<div class="message message-me">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');
	updateScrollbar();
	setTimeout(function() {
		output_message();
	}, 1000 + (Math.random() * 20) * 100);
}

// On submit message
$('.message-submit').click(function() {
	insert_my_message();
});
$(window).on('keydown', function(e) {
	if (e.which == 13) {
		insert_my_message();
		return false;
	}
});

function output_message() {
	$('<div class="message loading new"><div class="avatar"><img src="assets/img/bot-mini.png" /></div><span></span></div>').appendTo($('.mCSB_container'));
	updateScrollbar();

	response = null;
	message_react_value = null;
	message_react_value = $('.message-input').val();
	$('.message-input').val(null);

	if ( greeting_intro == 0 ) {

		response = '<b>Hi</b> there, I\'m <b>IRONBOT</b> and you are?';
	}

	if ( greeting_intro == 1 ) {

		response = 'Nice to meet you <br> So here\'s the thing I work with codes <br><br> Here they are: <br> <b>0</b>: for VR info <br> <b>1</b>: for system solar <br> <b>2</b>: open description planets <br> <b>3</b>: : tour in  vr <br><br> I was ma';
	}
	if ( greeting_intro == 0 ) {

			response = '<b>Hi</b> there, I\'m <b>IRONBOT</b> and you are?';
		}

		if ( greeting_intro == 1 ) {

			response = 'Nice to meet you <br> So here\'s the thing I work with codes <br><br> Here they are: <br> <b>0</b>: for VR info <br> <b>1</b>: for system solar info<br> <b>2</b>: open description planet <br> <b>3</b>: open tour in VR<br><br> I was made by: <a href="https://linkedin.com/in/eniola-osabiya" target="_blank">Eniola Osabiya</a>';
		}

		if ( greeting_intro > 1) {

			if ( message_react_value == "0" || message_react_value == "1" || message_react_value == "2" || message_react_value == "3" ) {

				if ( message_react_value == "0") {

					response = ` Virtual Reality (VR) is a computer-generated environment with scenes and objects that appear to be real, making the user feel they are immersed in their surroundings. This environment is perceived through a device known as a Virtual Reality headset or helmet. VR allows us to immerse ourselves in video games as if we were one of the characters, learn how to perform heart surgery or improve the quality of sports training to maximise performance.

Although this may seem extremely futuristic, its origins are not as recent as we might think. In fact, many people consider that one of the first Virtual Reality devices was called Sensorama, a machine with a built-in seat that played 3D movies, gave off odours and generated vibrations to make the experience as vivid as possible. The invention dates back as far as the mid-1950s. Subsequent technological and software developments over the following years brought with them a progressive evolution both in devices and in interface design`;
				}

				if ( message_react_value == "1") {

					response = `Our solar system consists of our star, the Sun, and everything bound to it by gravity – the planets Mercury, Venus, Earth, Mars, Jupiter, Saturn, Uranus, and Neptune; dwarf planets such as Pluto; dozens of moons; and millions of asteroids, comets, and meteoroids. Beyond our own solar system `;
				}

				if ( message_react_value == "2") {

					response = location.href= '../pages/desc_planet.php';//desc
				}

				if ( message_react_value == "3") {

					response = location.href='../sistm_sol/tour.html';
				}



		} else {

			response = 'I don\'t understand that! <br> Like I said before, I work with codes <br><br> Here they are again: <br> <b>0</b>: for VR info <br> <b>1</b>: for system solar info<br> <b>2</b>: foropen description planets<br> <b>3</b>: tour in  vr';
		}
	}

	if ( response == null ) {

		response = 'Nice to meet you <br> So here\'s the thing I work with codes <br><br> Here they are: <br> <b>0</b>: for VR info <br> <b>1</b>: for system solar info <br> <b>2</b>: open description planets <br> <b>3</b>:: tour in  vr<br><br> I was made by';
	}

	greeting_intro++;

	setTimeout(function() {
		$('.message.loading').remove();
		$('<div class="message new"><div class="avatar"><img src="assets/img/bot-mini.png" /></div>' + response + '</div>').appendTo($('.mCSB_container')).addClass('new');
		updateScrollbar();
	}, 1000 + (Math.random() * 20) * 100);

}
