$("#sendMail").on("click", function() {
	var name = $("#name").val().trim();
	var phone = $("#phone").val().trim();
	var email = $("#email").val().trim();

	if(name == "") {
		$("#errorMess").text("Введите Имя")
		return false;
	}
	if(phone == "") {
		$("#errorMess").text("Введите Телефон")
		return false;
	}
	if(email == "") {
		$("#errorMess").text("Введите email")
		return false;
	}

	$("errorMess").text("");

	$.ajax({
		url: '/mail.php',
		type: 'GET',
		cache: false,
		data: { 'name': name, 'phone': phone, 'email': email },
		dataType: 'html',
		beforeSend: function() {
			$("#sendMail").prop("disabled", true);
		},
		success: function(data) {
			if(!data)
				alert("Были ошибки, сообщение не отправлено!");
			else
				$("#mailForm").trigger("reset");


			$("#sendMail").prop("disabled", false);
		}
	});
});