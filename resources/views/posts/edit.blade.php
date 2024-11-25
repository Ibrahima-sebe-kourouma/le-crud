<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
        crossorigin="anonymous">
  <title>Update Post</title>
</head>
<body>

<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3 class="mb-4">Update Post</h3>
      <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf <!-- Correction de @rf -->
        @method('PUT')
        <div class="form-group mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="title" name="title"
                 value="{{ $post->title }}" required>
        </div>
        <div class="form-group mb-3">
          <label for="body" class="form-label">Body</label>
          <textarea class="form-control" id="body" name="body" rows="3" required>{{ $post->body }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76A0rAHcQbuhbK6KFDG2DgFtZd3a6mNLe4VV5HqT9eXDZ4wL8NfwpU3gT4B6dgn"
        crossorigin="anonymous"></script>
</body>
</html>