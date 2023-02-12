<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1>Cek Id Free Fire</h1>
    <input class="form-control" type="number" id="playId" name="playId" placeholder="User ID">
    <input type="text" class="form-control" name="nick" id="getNickId" placeholder="Nickname" onclick="return checkId();" onmousedown="buka.play();" readonly>
    <script>
// tombol untuk memunculkan popup
function checkId() {
	var playId = $("#playId").val();
	
	if(playId == "") {
		Swal.fire({
  icon: 'error',
  title: 'ID Tidak Boleh Kosong!',
  confirmButtonColor : 'primary',
  
  
});
	} else {
		$.ajax({
			url: 'ffid.php',
			type: 'POST',
			data: 'playId='+playId,
			beforeSend: function() {
			Swal.fire({

  title: 'Tunggu Sebentar',
  confirmButtonColor : 'primary',
  
  
})
Swal.showLoading();
			},
			success: function(response) {
				if(response == "") {
					Swal.fire({
  icon: 'error',
  title: 'ID Tidak Ditemukan!',
  confirmButtonColor : 'primary',
  
  
});
				} else {
				Swal.fire({
  icon: 'success',
  title: 'ID Ditemukan',
  confirmButtonColor : 'primary',
  
  
});
					$("#setNick").html(response);
					$("input#getUId").val(playId);
					$("input#getNickId").val(response);
					$(".welcome").hide();
					
				}
			}
		});
	}
}
</script>
<!--- fieldset content --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--- /fieldset content --->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>        
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>