<?php

include'config.php';
error_reporting(0);

if(isset($_POST['submit'])) {
   $username =$_POST['username'];
   $email =$_POST['email'];
   $password =md5($_POST['password']);
   $cpassword =md5($_POST['cpassword']);

   if($password== $cpassword){ 
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
    $result = mysqli_query($conn, $sql);

    if($result){
      echo "<script>alert('Sign Up Successfully')</script>";
    }else{
      echo "<script>alert('Oh no..! Something is wrong.')</script>";
    }

   }else{
    echo "<script>alert('Password Not Matched.')</script>";
   }
}
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.class">
    <link rel="stylesheet" href="shruti.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> <link rel="stylesheet" type="text/css" href="https://fonts.google.com/specimen/Josefin+Sans?query=josefin">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
    <title>ys</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <i class='bx bxs-pyramid bx-flip-horizontal bx-tada' style='color:rgba(199,17,232,0.97)'></i>
    <!-- <i class='bx bx-pyramid'></i> -->
    <a class="navbar-brand" href="#">YourSpace</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
         <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
       
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0"> -->
       <!--  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
           <!-- <a href="inlog.php" class="btn btn-outline-success">Log In</a>
       <hr>
           <a href="signup.php" class="btn btn-outline-success">Sign Up</a>
      </form> -->
    </div>
  </div>
</nav>

<section class="bg-img/cb.png">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray"></h1>
      <p class="leading-relaxed mt-4"></p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-white text-lg font-medium title-font mb-5">Sign Up</h2>
    
      <form action="config.php" method="POST">
        <div class="input-group">
         <label for="name" class="leading-7 text-sm text-gray-400">Full Name</label>
        <input type="text"name="username" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $username; ?>"required>
      </div>
      <div class="input-group">
       <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
        <input type="email"name="email"class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $email; ?>"required>
      </div>
      <div class="input-group">
       <label for="password" class="leading-7 text-sm text-gray-400">Password</label>
        <input type="password" name="password" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $_POST['password']; ?>"required>
      </div>
      <div class="input-group">
       <label for="password" class="leading-7 text-sm text-gray-400">Confirm Password</label>
        <input type="password" name="cpassword" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $_POST['cpassword']; ?>"required>
      </div>

      <div class="input-group">
      <button  name="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"type="submit">Sign Up</button>
           <!-- <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit">Button</button> -->
</div>
           




      <p class="">Already have an acccount?<a href="login.php">Log In here</a></p>
    </form>
  </div>
</div>


<hr>

<footer class="text-gray-400 bg-gray-900 body-font">
  <div class="container px-1 py-1 mx-auto flex items-center sm:flex-row flex-col">
     <i class='bx bxs-pyramid bx-flip-horizontal bx-tada' style='color:rgba(199,17,232,0.97)'></i>
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
      <span class="ml-3 text-xl">YourSpace</span>
    </a>

    <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">letsLearn—
      <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@Codefrenzyy</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-400">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>

</section>
<!-- <hr>

<footer>
    <p class="p-3 bg-dark text-white text-center">@YourSpace</p>
</footer>
 -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
</body>

</html>