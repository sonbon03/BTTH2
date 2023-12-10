<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <title>Document</title>
</head>
<body>
<div class="container">
  <h2>Example: Comment System with Ajax, PHP & MySQL</h2>
  <form id="commentForm" class="d-flex flex-column gap-5 mt-3">
    <div class="form-group">
      <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required/>
    </div>
    <div class="form-group">
            <textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5"
                      required></textarea>
    </div>
    <span id="message"></span>
    <div class="form-group d-flex justify-content-end">
      <input type="hidden" name="commentId" id="commentId" value="0"/>
      <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment"/>
    </div>
  </form>
  <div id="showComments"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="comments.js"></script>
</body>
</html>