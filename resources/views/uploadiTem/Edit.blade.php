
<html>
<head>
<title>แก้ไขข้อมุล</title>
    @yield('content')
<link href="css/bulma.css" rel="stylesheet" />
</head>
<body>

<section class="hero is-alt is-fullheight">
<div class="hero-body">
      <div class="container">
       <div class="columns is-vcentered">
          <div class="column is-6 is-offset-4">
<h1 class="title is-1">Edit Picture </h1>
<br>
<br>
	<form method="post" action="update&<?php echo $uploads->id?>" enctype="multipart/form-data">
      {{ csrf_field() }}
<p class="control">
<label class="title is-2 is-medium">	Name  </label><input class="input is-warning" type="text" name="name" value="<?php echo $uploads->itemname ?>">
</p><br>
<label class="title is-2 is-medium">	Price  </label><input class="input is-danger" type="text" name="prize" value="<?php echo $uploads->prize ?> ">
</p><br>
<p class="control">
	<input class="button is-primary is-medium is-fullwidth" name="Update" type="submit" value="Update">
	</form>
	</div>
	</div>
	</div>
	</div>
	</section>
</body>
</html>
