<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    body{
        font-family: 'Dancing Script', cursive!important;
    background-image:linear-gradient(to right,rgb(250, 7, 120),rgba(26, 155, 241, 0.973),rgb(7, 31, 247)) ;
    
}
</style>
</head>
<body>
    <div class="d-flex justify-content-center">
        <div>
            <h1> Registation form </h1>
            <form action="pdoi.php" method="post" >
  <div class="form-group">
    <label for="firstname">FirstName</label>
    <input type="text" class="form-control" name="fname" placeholder="FirstName">
  </div>
  <div class="form-group">
    <label for="lastname">lastname</label>
    <input type="text" class="form-control" name="lname"  placeholder="lastname">
  </div>
  <div class="form-group">
    <label for="bod">Date of birth</label>
    <input type="date" class="form-control" name="bod"  placeholder="date of birth">
  </div>
  <div>
  <lable>Gender</lable>
</div>
  <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gen"  value="female" checked />
        <label class="form-check-label" for="femaleGender">Female</label>
    </div>
  
  <div class="form-check form-check-inline">
  
    <input class="form-check-input" type="radio" name="gen" value="male" />
    <label class="form-check-label" for="maleGender">Male</label>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp"  placeholder="example@email.com">
  </div>
  <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" class="form-control" name="pwd"  placeholder="password" required>
  </div>
  <div class="form-group">
    <label for="cpwd">Confirm Password</label>
    <input type="password" class="form-control" name="cpwd"  placeholder="Confirm password" required>
  </div>
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="tel" class="form-control" name="phone"  placeholder="1234567890">
  </div>
  <div class="form-group">
    <label for="phone">Address</label><br>
    <textarea row="8" name="addr" ></textarea>
  </div>
  <!-- <div>
  <label for="file">File upload</label>
    <input type="file" class="form-control" name="att"  >
 </div> -->
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input"  required>
    <label class="form-check-label" for="accept">agree the terms and conditions</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        
    </div>


    
</body>
</html>