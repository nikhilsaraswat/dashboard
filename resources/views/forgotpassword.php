<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center font-sans">
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
    <h1 class="text-2xl font-bold text-center mb-6">Forgot Password</h1>
    <form action="forgot_password.php" method="post">
      <div class="mb-4">
        <label for="email" class="block text-gray-700 mb-2 font-medium">Email Address</label>
        <input type="email" id="email" class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500" name="email" required>
      </div>
      <div class="flex items-center justify-between mb-6">
        <a href="/" class="text-blue-500 hover:underline text-sm font-medium">Back to Login</a>
      </div>
      <button type="submit" class="w-full py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">Send Reset Link</button>
    </form>
  </div>
</body>
</html>
<?php

// Replace with your actual logic to send a password reset link via email
// This is a placeholder for demonstration purposes

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  
  // Simulate sending a reset link email
  echo "A password reset link has been sent to your email address: $email (placeholder)";
} else {
  echo "";
}

?>

<!-- CREATE USER 'nikhil'@'localhost' IDENTIFIED BY 'nikhil@2890';
Query OK, 0 rows affected (0.001 sec) -->