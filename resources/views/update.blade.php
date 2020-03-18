<!DOCTYPE html>
<html>
<head>
	<title>Update Course</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h3>Update Course</h3>
            </div>
            <div class="card-body">

	<a href="/create-course" class="btn btn-primary"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($courses as $C)
	<form action="/course/ubah" method="post">

		{{ csrf_field() }}
	
        <div class="form-group">
    	<input type="hidden" class="form-control" name="id" value="{{ $C->id }}"> <br/>
		<label>Name</label>
        <input type="text" class="form-control" required="required" name="name" value="{{ $C->name }}"> <br/>
		<label >Note</label>
        <input type="text" class="form-control" required="required" name="note" value="{{ $C->note }}"> <br/>
		<input type="submit" value="Update" class="btn btn-success">
        </div>
	</form>
	@endforeach
	</div>
    </div>
    </div>

</body>
</html>