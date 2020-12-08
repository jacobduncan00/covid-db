$(document).ready(() => {
	 $('.student-show').show();
	 $(".faculty-show").hide();
	 $(".staff-show").hide();	
});

/* Function that when called hides and shows certain elements in the DOM based off the result of the select tag */
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
	let resultDate = document.getElementById('test_date');
	let result = document.getElementById('test_result');
	let fullName = `${fname.value} ${lname.value}`;
	let info = [id.value, fullName, email.value, birthdate.value, resultDate.value, result.value];
	return info;
}

function resetForm() {
	let form = document.getElementById('login-form');
	form.reset();
}

function sendToInsertPHP(info, x){
		let data = {};
		switch(x) {
			case "student":
				data = {type: "student", id: info[0], name: info[1], email: info[2], birthdate: info[3], resultDate: info[4], result: info[5], grade: info[6]};
				break;
			case "faculty":
				data = {type: "faculty", id: info[0], name: info[1], email: info[2], birthdate: info[3], resultDate: info[4], result: info[5], officeBuilding: info[6], numOfClasses: info[7]};
				break;
			case "staff": 
				data = {type: "staff", id: info[0], name: info[1], email: info[2], birthdate: info[3], resultDate: info[4], result: info[5], supervisor: info[6], buildingOfWork: info[7]};
				break;

		}
	console.log(info, x, data);
		$.ajax({
			url: "insert.php",
			method: "POST",
			dataType: "json",
			data: data,
			success:function(msg){
				alert(`${x}'s information was successfully added to the database!`);
				resetForm();
				console.log(msg.student);
				console.log(msg.faculty);
				console.log(msg.staff);
			}
		});
}

/* Not functional right now, still in development */
/* There is a much easier way of doing this but just needed to test to see if a POST would work in the first place */

function submit() {
	console.log("clicked");
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
			let info = getUniversalData();
			let supervisor = document.getElementById('supervisor');
			let buildingOfWork = document.getElementById('building');
			info.push(supervisor.value);
			info.push(buildingOfWork.value);
			JSON.stringify(info);
			sendToInsertPHP(info, x);
			return;
		}
	});
}

