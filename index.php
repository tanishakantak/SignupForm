<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>SignUp_Form</title>
  </head>
  <body>
    <form method="post" class="min-h-screen" name="signup" action="insert.php" onsubmit="return formValidator()">
     <div class="min-h-screen py-20 " style="background-image: url('pexels-catiamatos-1072179.jpg')">
      <div class="container mx-auto w-3/5">
        <div class="flex flex-col w-3/5 backdrop-blur-sm bg-opacity-30 bg-slate-300 shadow-lg rounded-xl mx-auto overflow-hidden">
          <div class="text-center w-full my-4">
           <h2 class="text-2xl text-black font-bold">Register</h2>
        </div>
        
          <div class="flex border-spacing-2 border-b-gray-500 mx-3 my-5 py-1 justify-center">
          <label for="lastname" class="text-bold text-green-400 text-1xl">FirstName:</label>
            <input type="text" class="w-3/4 rounded-md bg-slate-100 placeholder-gray-700 mx-4" placeholder="Enter First Name" id="fname" name="fname">
          </div>
          <div class="flex border-spacing-2 border-b-gray-500 mx-3 my-5 py-1 justify-center">
            <label for="lastname" class="text-bold text-green-400 text-1xl">LastName:</label>
            <input type="text" class="w-3/4 rounded-md bg-slate-100 placeholder-gray-700 mx-4" placeholder="Enter Last Name" id="lname" name="lname">
          </div>
          <div class="flex border-spacing-2 border-b-gray-500 mx-3 my-5 py-1 justify-center">
          <label for="lastname" class="text-bold text-green-400 text-1xl">Email:  </label>
            <input type="email" class="w-3/4 rounded-md bg-slate-100 placeholder-gray-700 mx-4" placeholder="Enter Email id" id="email" name="email">
          </div>
          <div class="flex border-spacing-2 border-b-gray-500 mx-3 my-5 py-1 justify-center">
          <label for="lastname" class="text-bold text-green-400 text-1xl">Phone:</label>
            <input type="number" class="w-3/4 rounded-md bg-slate-100 placeholder-gray-700 mx-4" placeholder="Enter Phonenumber" id="phone" name="phone">
          </div>
          <div class="flex border-spacing-2 border-b-gray-500 mx-3 my-5 py-1 justify-center">
          <label for="lastname" class="text-bold text-green-400 text-1xl">Password:</label>
            <input type="password" class="w-3/4 rounded-md bg-slate-100 placeholder-gray-700 mx-4" placeholder="Enter Password" id="password" name="password">
          </div>
          <div class="flex border-spacing-2 border-b-gray-500 mx-3 my-5 py-1 justify-center">
          <label for="lastname" class="text-bold text-green-400 text-1xl">Confirm:</label>
            <input type="password" class="w-3/4 rounded-md bg-slate-100 placeholder-gray-700 mx-4" placeholder="Confirm Password" id="cpassword" name="cpassword">
          </div>
          <div class="mt-5">
            <button class="w-full bg-red-600 py-3 text-center text-white hover:bg-lime-700" id="submit" type="submit" value="submit" name="submit">Register Now</button>
          </div>
       
      </div>
    </div>
</form>
    <script src="script.js"></script>
  </body>
</html>
