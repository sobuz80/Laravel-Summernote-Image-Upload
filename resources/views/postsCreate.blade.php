<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

  

<title>Laravel Summernote Editor Image Upload Example</title>

  

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

</head>

  

<body>

    <div class="container mt-5">

        <h1>Laravel Summernote Editor Image Upload Example - ItSolutionStuff.com</h1>

        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">

                <label>Title</label>

                <input type="text" name="title" class="form-control" />

            </div>

            <div class="form-group">

                <label>Description</label>

                <textarea id="summernote" name="body"></textarea>

            </div>

            <div class="form-group text-center">

                <button type="submit" class="btn btn-success btn-block">Publish</button>

            </div>

        </form>

    </div>

  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {

            $('#summernote').summernote({

                height: 450,

            });

        });

  

    </script>

</body>

</html>