<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>{{ $article->name }}</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white" style="text-align: center;">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
    < h5 class="my-0 mr-md-auto font-weight-normal">Test</h5>
      <nav class="my-2 my-md-0 mr-md-3">
         <a class="p-2 text-white" href="/">Home</a>
         <a class="p-2 text-white" href="/articles">Articles</a>
      </nav>
</div>
<h1>{{ $article->name }}</h1>

<p>{{ $article->description }}</p>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

@if (Auth::check())

   <form class="mx-auto col-10 col-md-8 col-lg-6"  action="/article/{{ $article->id }}/comment" method="POST">
         @csrf
         <div class="form-group">
            <label >Your Name:</label><br/>
            <input class="form-control" type="text" name="userName" >
         </div>
         <div class="form-group">
            <label >Your surName:</label><br/>
            <input class="form-control" type="text" name="userSurname" >
         </div>
         <div class="form-group">
            <label >Comment:</label><br/>
            <textarea class="form-control" type="text" name="comment"></textarea>
         </div>
        
         <div class="btn-group">
            <button class="btn btn-primary mb-2" type="submit">Submit Comment</button>
         </div>
   </form>

@else
    <h1>Please <a href="/login">login</a> to leave a comment.</h1>
@endif

      <div class="mx-auto col-10 col-md-8 col-lg-6 fixed-bottom">
         <h4 class="text-white mb-0 text-white">Comments</h4><br/>
         @foreach ($article->comments as $comment)
         <div class="card mb-3">
            <div class="card-body">
                  <h6 class="text-primary fw-bold mb-0">
                  {{ $comment->userName }}
                     <span class="text-dark ms-2"><span class="text-primary">{{ $comment->userSurname }}</span>
                        <span class="text-primary"></span> 
                        {{ $comment->comment }}
                     </span>
                  </h6>
                  <p class="mb-0 text-dark">{{ $comment->created_at }}</p>
            </div>
         </div>
         @endforeach
      </div>
</body>
</html>