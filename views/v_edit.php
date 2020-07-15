<!DOCTYPE html>
<html>
<head>
	<title>Membuat Aplikasi CRUD</title>
	<meta charset="UTF-8">
<style src="text/css">
   body {
    background-color:#171735;
    font: 400 15px Lato, sans-serif;
    line-height: 1;
    color: white;
    position: relative;
  }

  .container {
    padding: 20px 500px 75px;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
  
button {
  background-color: #171735;
  border: 2px outset grey;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border-radius: 12px;
  cursor: pointer;
  width: 20px 20px;
}

button:hover {
  color: white;
  background-color: #36efe5;
  opacity: 0.8;
}

</style>
</head>
<body>
<div class="container">
	<center>
		<h1>Membuat Aplikasi CRUD</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
		<p>
			<label for="uname"><b>Nama</b></label><br><br>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>"> </p>

		<p> 
			<label for="uname"><b>E-mail</b></label><br><br>
				<input type="text" name="email" value="<?php echo $u->email ?>"></p>	
				<button type="submit">Update</button>
		</table>
	</form>	
	<?php } ?>
	</div>
</body>
</html>