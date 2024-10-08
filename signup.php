<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('assets/pic1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen font-mono">
    <div class="bg-white bg-opacity-80 rounded-lg shadow-lg w-full max-w-xl p-8">
        <h2 class="text-center mb-8 text-3xl font-bold text-gray-800">Welcome Back</h2>
        <form action="includes/signupinc.php" method="post" id="ValidationForm" class="space-y-6">
           <!-- Applicant's Name -->
  <div class="flex space-x-4">
                <div class="w-1/2">
                    <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="First Name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="w-1/2">
                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Last Name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
            </div>

            <!-- Address -->
            <div>
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" id="address" name="address" placeholder="Address" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Gender -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Gender</label>
                <div class="flex items-center mt-2 space-x-10">
                    <div class="flex items-center">
                        <input type="radio" id="male" name="gender" value="male" required class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300">
                        <label for="male" class="ml-2 block text-sm font-medium text-gray-700">Male</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" id="female" name="gender" value="female" required class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300">
                        <label for="female" class="ml-2 block text-sm font-medium text-gray-700">Female</label>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required minlength="8" placeholder="Password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required minlength="8" placeholder="Confirm Password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>

            <!-- Submit Button -->
            <div>
              
                <button id="navigateButton" type="submit"  class= "w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
         
            </div>

            <!-- Link to Sign In -->
            <div class="text-center mt-4">
                <a href="login.php" class="text-blue-600 hover:underline text-sm">Already have an account? Sign in</a>
            </div>
        </form>
    </div>


    <script>
        document.getElementById('navigateButton').onclick = function(event) {
            event.preventDefault(); 
            console.log('Button clicked, navigating to Page 2');
            window.location.href = 'courseregister.php'; 
        }
    </script>
<?php







?>
</body>
</html>
