<!DOCTYPE html>
<html>
<head>
	<title>Membuat Aplikasi CRUD </title>
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
  padding: 20px;
}

a:link, a:visited {
  background-color: #171735;
  color: #0ff0f0;
  border: 2px outset grey;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  color: white;
  background-color: #36efe5;
  
}
  
</style>
</head>
<body>
<div class="container">
	<center><h1>Membuat Aplikasi CRUD </h1></center>
	<center><a href="<?php echo base_url('index.php/crud/tambah'); ?>">Add User</a>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>User ID</th>
			<th>Nama</th>
			<th>E-mail</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->email ?></td>
			<td>
				<a href="<?php echo base_url('index.php/crud/edit/'.$u->id); ?>">Edit</a>
				<a onclick="return konfirmasi()" href="<?php echo base_url('index.php/crud/delete/'.$u->id); ?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	</div>
	<script type="text/javascript" language="Javascript">
	function konfirmasi(id) {
		tanya = confirm("Apakah Anda Yakin Akan Menghapus ?");
		if (tanya == true) return true;
		else return false;
	}
	</script>
</body>
</html>