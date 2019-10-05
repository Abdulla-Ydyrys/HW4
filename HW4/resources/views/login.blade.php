<!--Name and Surname: Abdulla Ydyrys;
  Date end: 04.10.2019;
  Email: 170103125@stu.sdu.edu.kz;
  Description: login.blade.php
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>HW4</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="margin-top: 50px;">
<div class="col-md-5">
  <form action="login_action" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
    <div class="form-group">
      <label for="surname">Surname:</label>
      <input type="name" class="form-control" id="surname" placeholder="Enter your surname" name="surname">
    </div>
    <button type="submit" class="btn btn-outline-info btn-lg btn-block">Click me!</button> 
  </form>
</div>
</div>


</body>
</html>
