
<html>
<link href="css/bulma.css" rel="stylesheet" />
<body>

<p class="control">
<table class="table">
  <thead>
    <tr>
      <th><abbr title="Position">FileName</abbr></th>
      <th><abbr title="Pic">Picture</abbr></th>
      <th><abbr title="Price">Price</abbr></th>
      <th><abbr title="Edit">Update</abbr></th>
      <th><abbr title="delete">Delete</abbr></th>


@foreach($uploads as $upload)

 </tr>
  </thead>
      <tbody>
<th titile="Position">{{$upload->itemname}}</th>
<th title="Pic">
<figure class="image is-128x128">
  <img <img src="{{url('/filePicUpload')}}/{{$upload->photo}}">
</figure>
</th>
<th title="Price">{{$upload->prize}} Bath</th>

<th><a class="button is-warning is-outlined" href="Edit&<?php echo $upload->id?>" >Edit</a></th>
<th><a class="button is-warning is-danger" href="delete&<?php echo $upload->id?>">Delete</a></th>
@endforeach

</body>
</html>
