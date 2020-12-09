 function load_data(query, x)
 {
	 console.log(query, x);
	  $.ajax({
	   url:"fetch.php",
	   method:"POST",
	   data:{query:query, type: x},
	  success: function(data) {
		$('#result').html(data); 
	  }
	  });
 }

function filter() {
		 let z = $("select")[0].value;
		$("input").attr("placeholder",`Enter ${z}`);
		$("input").val("");
		 $('#search_text').keyup(() => {
		  let x = $("select")[0].value;
		  let search = $('#search_text').val();
		  if(search != '')
		  {
		   load_data(search, x);
		  }else {
		   load_data("");
		  }
		 });
}
