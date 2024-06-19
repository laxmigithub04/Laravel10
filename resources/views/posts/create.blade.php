<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>

    <div class="card">
        <div class="card-header">Create Form</div>
        <div class="card-body">
            
            <form method="post" action="{{route('post.store')}}">
                @csrf
                @method('post')
              <label>Name</label></br>
              <input type="text" name="name" id="name" class="form-control"></br>
              <label>Email</label></br>
              <input type="email" name="email" id="email" class="form-control"></br>
              <label>Password</label></br>
              <input type="text" name="password" id="password" class="form-control"></br>
              <label>DOB</label></br>
              <input type="date" name="dob" id="dob" class="form-control"></br>
              <label>Address</label></br>
              <input type="text" name="address" id="address" class="form-control"></br>
              <label>Contact</label></br>
              <input type="text" name="contact" id="contact" class="form-control"></br>
              <input type="submit" value="Save" class="btn btn-success"></br>
          </form>
         
        </div>
      </div>
</body>
</html>