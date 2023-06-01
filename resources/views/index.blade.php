<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Articles</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Test</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" href="/">Home</a>
        <a class="p-2 text-white" href="/articles">Articles</a>
    </nav>
</div>

<h1 style="text-align: center;">Articles</h1>

<div  class="album py-5 bg-dark">
        <div class="container">
            <div class=" card-deck mb-3 text-center">
            @foreach ($articles as $article)
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <p  class=" text-muted"> {{ $article->name }}</p>
                  <p class="text-muted"> {{ $article->description }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="/article/{{ $article->id }}">
                           <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                        </a>
                    </div>
                    <small class="text-muted">{{ $article->price }} ₸</small>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          
        </div>
      </div>
                    

</body>
</html>