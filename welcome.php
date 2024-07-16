<?php
$firstName = $_GET['fname'];
$lastName = $_GET['lname'];
$email = $_GET['email'];
$phoneNumber = $_GET['phone'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Welcome</title>
</head>
<body class="font-sans" style="background-image: url('bg.jpg')">
  <div class="container mx-auto max-w-md py-10">
    <h1 class="text-3xl font-bold mb-4 text-blue-800">Welcome <?php echo $firstName; ?>!</h1>
    <p class="text-green-700">Following are your details.</p>
    <ul class="list-disc pl-4 space-y-2">
      <li>First Name: <?php echo $firstName; ?></li>
      <li>Last Name: <?php echo $lastName; ?></li>
      <li>Email: <?php echo $email; ?></li>
      <li>Phone Number: <?php echo $phoneNumber; ?></li>
    </ul>
  </div>
</body>
</html>