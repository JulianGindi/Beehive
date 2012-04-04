// global vars

var name = $("#name");


function validateName() {

	if(name.val().length < 4) {
		name.addClass("error");
		nameInfo.text("We want names with more than 3 characters");
		nameInfo.addClass("error");
		return false;
	}

	else {
		name.removeClass("error");
		nameInfo.text("What's your name?");
		nameInfo.removeClass("error");
		return true;
	}
}