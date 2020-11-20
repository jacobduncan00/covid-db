$(document).ready(() => {
 $('#search_text').change(load_data);
 load_data.bind($('#search_text'));

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
  success: function(data) {
	$('#result').html(data); 
  }
  });
 }
 $('#search_text').keyup(() => {
  let search = $('#search_text').val();
  if(search != '')
  {
   load_data(search);
  } else {
   load_data();
  } 
 });
});
