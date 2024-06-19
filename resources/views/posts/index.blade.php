<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <h1>Form</h1>
    <div>
        @if (session()->has('success'))
          <div>
            {{session('success')}}
            </div>  
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($posts as $post)
               <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->password}}</td>
                <td>{{$post->dob}}</td>
                <td>{{$post->address}}</td>
                <td>{{$post->contact}}</td>
                <td>
                    <a href="{{route('post.edit',['post' => $post])}}">Edit</a>
                    
                </td>
                <td>
                    <form method="post" action="{{route('post.destroy',['post' => $post])}}">
                        @csrf
                        @method('delete')
                    <input type="submit" value="Delete" />
                    </form>
                </td>
               </tr>
                
            @endforeach

        </table>
    </div>
</head>
<body>
    
</body>
</html>