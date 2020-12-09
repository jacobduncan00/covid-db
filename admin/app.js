$(document).ready(() => {
	$('.update').hide();
	$('.delete').hide();
	$('.updateForm').hide();
	$('.deleteForm').hide();
});

function load_data(query, x) {
	$('.updateForm').hide();
	$('.deleteForm').hide();
	$.ajax({
		url: "display.php",
		method: "POST",
		data: {query:query, type:x},
		success:function(data) {
			$('.result').html(data);
		}
	});
}

function filter() {
	$(document).ready(() => {
		$('#search_text').val('');
		$('#search_text2').val('');
		let z = $("select")[0].value;
		if (z == "Update") {
			$('.update').show();
			$('.delete').hide();
			$('.deleteForm').hide();
			$('#search_text').keyup(() => {
				let x = $("select")[0].value;
				let search = $("#search_text").val();
				if (search != '') {
					load_data(search, x);
				} else {
					load_data("");
				}
			});
		} else if (z == "Delete") {
			$('.update').hide();
			$('.delete').show();
			$('.updateForm').hide();
			$('#search_text2').keyup(() => {
				let x = $("select")[0].value;
				let search = $("#search_text2").val();
				if (search != '') {
					load_data(search, x);
				} else {
					load_data("");
				}
			});
		}
	});
}

function getUniversalData() {
	let id = document.getElementById('search_text');
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
	let id = document.getElementById('search_text');
	id.value = '';
	let fname = document.getElementById('first_name');
	fname.value = '';
	let lname = document.getElementById('last_name');
	lname.value = '';
	let email = document.getElementById('email_addr');
	email.value = '';
	let birthdate = document.getElementById('birth_date');
	birthdate.value = '';
	let resultDate = document.getElementById('test_date');
	resultDate.value = '';
	let result = document.getElementById('test_result');
	result.value = '';
}

function sendToInsertPHP(info) {
	data = {id: info[0], name: info[1], email: info[2], birthdate: info[3], resultDate: info[4], result: info[5]};
	console.log(data);
	$.ajax({
		url: "toDB.php",
		method: "POST",
		dataType: "json",
		data: data,
		success:function(msg) {
			console.log(msg.returnMessage);
			alert(`${msg.returnMessage}`);
			resetForm();
		}
	});
}

function submit() {
	let info = getUniversalData();
	JSON.stringify(info);
	console.log(info);
	sendToInsertPHP(info);
}
