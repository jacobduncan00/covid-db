$(document).ready(() => {
	 $('.student-show').show();
	 $(".faculty-show").hide();
	 $(".staff-show").hide();	
});

/* Function that when called hides and shows certain elements in the DOM based off the result of the select teg */
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

/* Not functional right now, still in development */
/* There is a much easier way of doing this but just needed to test to see if a POST would work in the first place */

function submit() {
$(document).ready(() => {
let x = $("select")[0].value;
	if (x == "student") {
		let id = document.getElementById('uni_id');
		let fname = document.getElementById('first_name');
		let lname = document.getElementById('last_name');
		let email = document.getElementById('email_addr');
		let birthdate = document.getElementById('birth_date');
		let grade = document.getElementById('grade');
		let info = [id.value, fname.value, lname.value, email.value, birthdate.value, grade.value];
		JSON.stringify(info);
		$.ajax({
			url: "insert.php",
			method: "POST",
			data: {data:info},
			success:function(data){
				alert(data);
				id.value = ""; 
				fname.value = "";
				lname.value = "";
				email.value = "";
				birthdate.value = "";
				grade.value = "";
			}
		});
		return;
	} else if (x == "faculty") {
	} else if (x == "staff") {
	}
});
}

