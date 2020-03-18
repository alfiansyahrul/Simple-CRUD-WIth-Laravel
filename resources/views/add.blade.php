<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        
	<title>ADD Course</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h3>Add Course</h3>
            </div>
            <div class="card-body">

	        <a href="/create-course" class="btn btn-primary"> Back </a>
	
	<br/>
	<br/>

	            <form action="/course/store" method="post">

	            	{{ csrf_field() }}
        
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" required="required" class="form-control"> <br/>
                        <label >Note</label>
                        <input type="text" name="note" required="required" class="form-control"> <br/>
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                    </div>
	            </form>
            </div>
        </div>
    </div>
</body>
</html>