<html>
<head>
<title>P'Air Shopping</title>
 <link href="css/vendors.min.css" rel="stylesheet" />
    <link href="css/styles.min.css" rel="stylesheet" />

    <link href="css/bulma.css" rel="stylesheet" />
</head>
<body>
 <section class="hero is-alt is-fullheight">
<div class="hero-body">

   <center>
      <div class="container">
       <div class="columns is-vcentered">
          <div class="column is-6 is-offset-6">
<form class="well white" method="post" action="{{url('/login')}}">
{{ csrf_field() }}
  <label class="title is-1">Login</label>
  <br>


        <p class="control">
          <input class="input is-success" placeholder="Username" name="username" type="text" >
          <i class="fa fa-envelope"></i>
          </p>
      </tr>
      <tr>
      <p class="control">
        <input class="input is-success" placeholder="Password" name="password" type="password" i>
         <i class="fa fa-lock"></i>

      </p>
</tr>
      <p class="control">
                <label class="checkbox">
                  <input type="checkbox">
                  Remember me
                </label>
              </p>

  <hr>
  <div class="control">
  <button type="submit" class="button is-primary is-medium is-fullwidth" name="login" value="Login">  <i class="fa fa-user"></i>
  Login
  </button>

</div>
</form>

</div>
</div>
</div>
</div>
</body>
</section>
</html>
