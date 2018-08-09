var baseUrl = $('head base').attr('href');

// AJAX
function sendPostData(data, url, onSuccess, onError) {
	$.ajax({
		url: baseUrl + url,
		type: 'POST',
		data: data,
		success: serverResponse => (serverResponse==="success") ? onSuccess() : onError(),
		error: onError
	});
}
function sendPostDataOnSubmit(handler, url, onSuccess, onError) {
	$(document).on("submit", handler, function(e) {
		e.preventDefault();
		var data = $(this).serialize();
		sendPostData(data, url, onSuccess, onError);
	});
}

function createShowResponseFunction(target, response) {
	return () => $(target).html(response);
}
sendPostDataOnSubmit('.register_form', 'User/ajax_register',
 createShowResponseFunction('.register_form .response', '<div class="correct">Pomyślnie zarejestrowano.<br>Możesz się zalogować.</div>'),
 createShowResponseFunction('.register_form .response', '<div class="wrong">Nie udało się zarejestrować.<br>Sprawdź czy wszystkie pola są poprawnie wypełnione i swoje połączenie internetowe.</div>'));
sendPostDataOnSubmit('.login_form', 'User/ajax_login',
 createShowResponseFunction('.login_form .response', '<div class="correct">Pomyślnie zalogowano</div>'),
 createShowResponseFunction('.login_form .response', '<div class="wrong">Nie udało się zalogować.</div>'));
