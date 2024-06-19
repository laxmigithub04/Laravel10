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
        <div class="card-header">Edit Form</div>
        <div class="card-body">
            
            <form method="post" action="{{route('post.update', ['post' => $post ])}}">
                @csrf
                @method('put')
              <label>Name</label></br>
              <input type="text" name="name" id="name" class="form-control" value="{{$post->name}}"></br>
              <label>Email</label></br>
              <input type="email" name="email" id="email" class="form-control" value="{{$post->email}}"></br>
              <label>Password</label></br>
              <input type="text" name="password" id="password" class="form-control" value="{{$post->password}}"></br>
              <label>DOB</label></br>
              <input type="date" name="dob" id="dob" class="form-control" value="{{$post->dob}}"></br>
              <label>Address</label></br>
              <input type="text" name="address" id="address" class="form-control" value="{{$post->address}}"></br>
              <label>Contact</label></br>
              <input type="text" name="contact" id="contact" class="form-control" value="{{$post->contact}}"></br>
              <input type="submit" value="Update" class="btn btn-success"></br>
          </form>
         
        </div>
      </div>
</body>
</html>