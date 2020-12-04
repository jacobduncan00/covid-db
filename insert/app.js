$(document).ready(() => {
	 $('.student-show').show();
	 $(".faculty-show").hide();
	 $(".staff-show").hide();	
});

/* Function that when called hides and shows certain elements in the DOM based off the result of the select teg */
function show() {
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


function getUniversalData() {
	let id = document.getElementById('uni_id');
	let fname = document.getElementById('first_name');
	let lname = document.getElementById('last_name');
	let email = document.getElementById('email_addr');
	let birthdate = document.getElementById('birth_date');
	let fullName = `${fname.value} ${lname.value}`;
	let info = [id.value, fullName, email.value, birthdate.value];
	return info;
}

function resetForm() {
	let form = document.getElementById('login-form');
	form.reset();
	return;
}

function sendToInsertPHP(info, x){
		let form = document.getElementById('login-form');
		console.log(form.serialize());
		$.ajax({
			url: "insert.php",
			method: "POST",
			data: form.serialize(),
			success:function(data){
				alert(`${x}'s information was successfully added to the database!`);
				resetForm();
			}
		});
}
/* Not functional right now, still in development */
/* There is a much easier way of doing this but just needed to test to see if a POST would work in the first place */

function submit() {
	$(document).ready(() => {
	let x = $("select")[0].value;
		if (x == "student") {
			let info = getUniversalData();
			let grade = document.getElementById('grade');
			info.push(grade.value);
			JSON.stringify(info);
			sendToInsertPHP(info, x);
			return;
		} else if (x == "faculty") {
			let info = getUniversalData();
			let officeBuilding = document.getElementById('office_building');
			let numClasses = document.getElementById('num_classes_teaching');
			info.push(officeBuilding.value);
			info.push(numClasses.value);
			JSON.stringify(info);
			sendToInsertPHP(info, x);
			return;
		} else if (x == "staff") {
			let supervisor = document.getElementById('supervisor');
			let buildingOfWork = document.getElementById('office_building');
			info.push(supervisor);
			info.push(buildingOfWork);
			JSON.stringify(info);
			sendToInsertPHP(info, x);
			return;
		}
	});
}

