
<html>
<head>
<title>อัพโหลดรุปภาพ</title>
<link href="css/bulma.css" rel="stylesheet" />
<link href="css/css/picnic.css" rel="stylesheet"/>
</head>
<body>

<section class="hero is-alt is-fullheight">
<div class="hero-body">
      <div class="container">
       <div class="columns is-vcentered">
          <div class="column is-6 is-offset-4">

<h1 class="title is-1">UpLoad Picture </h1>
<br>
<br>
	<form name="form1" method="post" action="{{url('/uploadpic')}}" enctype="multipart/form-data">
      {{ csrf_field() }}
<p class="control">
<label class="title is-2 is-medium">	Name  </label><input class="input {{ $errors->has('name')?'is-danger':'' }}" type="text" name="name">
@if($errors->has('name'))
  <p class="help is-danger">{{ $errors->first('name') }}</p>
@endif
</p><br>
<p class="control">
<label class="title is-2 is-medium">	Price  </label><input class="input {{ $errors->has('Price')?'is-danger':'' }}" type="text" name="Price">
@if($errors->has('Price'))
  <p class="help is-danger">{{ $errors->first('Price') }}</p>
@endif
</p><br>
<p class="control">
  <center>
	<!-- this div just for demo display -->
    <label class="dropimage">
      <input title="Drop image or click me" type="file" name="filUpload">
    </label>

</center>
	<input class="button is-primary is-medium is-fullwidth" name="btnSubmit" type="submit" value="Upload">

	</form>
	</div>
	</div>
	</div>
	</div>
	</section>
  <script>
      window.onload = function() {

          // Dropimage handler
          [].forEach.call(document.querySelectorAll('.dropimage'), function(img) {
              img.onchange = function(e) {
                  var inputfile = this,
                      reader = new FileReader();
                  reader.onloadend = function() {
                      inputfile.style['background-image'] = 'url(' + reader.result + ')';
                  }
                  reader.readAsDataURL(e.target.files[0]);
              }
          });
      };
  </script>
</body>

</html>
