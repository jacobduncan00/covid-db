$(document).ready(() => {
	 $('.student-show').show();
	 $(".faculty-show").hide();
	 $(".staff-show").hide();	
});

function s() {
$(document).ready(() => {
let x = $("select")[0].value;
	if (x == "student") {
	 $('.student-show').show();
	 $(".faculty-show").hide();
	 $(".staff-show").hide();	
	} else if (x == "faculty") {
	 $('.faculty-show').show();
	 $(".staff-show").hide();
	 $(".student-show").hide();
	} else if (x == "staff") {
	 $('.staff-show').show();
	 $(".faculty-show").hide();
	 $(".student-show").hide();
	}
});
}
