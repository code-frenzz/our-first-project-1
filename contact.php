


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.class"> -->
    <!-- <link rel="stylesheet" href="shine.css"> -->
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
        
       <!--   <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li> -->
         <li class="nav-item">
          <a class="nav-link" href="about1.php">About</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li> -->
       <!--  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>




       <!-- <form class="form-inline my-2 my-lg-0"> -->
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">  -->
           <!-- <a href="login.php" class="btn btn-outline-success">Log In</a>
           <hr>
           <a href="signup.php" class="btn btn-outline-success">Sign Up</a>
      </form> -->




    </div>
  </div>
</nav>
<section>
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-white"></h1>
      <p class="leading-relaxed mt-4"></p>
    </div>
    <div class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-white text-lg font-medium title-font mb-5">Contact Us</h2>
      
       <form action="call.php" method="POST">
      <div class="relative mb-4" class="form-group">
        <label for="full-name" class="leading-7 text-sm text-gray-400">Name</label>
        <input type="text" id="full-name" name="name" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" class="form-control">
      </div>
      
      <div class="relative mb-4" class="form-group">
        <label for="mobile" class="leading-7 text-sm text-gray-400">Email</label>
        <input type="text" id="mobile" name="email" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" class="form-control">
      </div>
      <div class="relative mb-4" class="form-group">
        <label for="email" class="leading-7 text-sm text-gray-400">Message</label>
        <textarea type="text" name="message" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-indigo-900 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" class="form-control"></textarea>
      </div>
      <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit">Submit</button>

      <!-- <p class="text-xs mt-3"></p> -->
    </div>
  </form>
</section>
<hr>


<footer>
    <p class="p-3 bg-dark text-white text-center">@YourSpace</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>