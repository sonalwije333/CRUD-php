<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    
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

    <div class="w-full max-w-sm p-8 bg-white bg-opacity-70 rounded-lg shadow-lg" id="card">
        <h2 class="mb-6 text-3xl font-bold text-center text-gray-800">Welcome</h2>
        
        <form id="ValidationForm" action="includes/logininc.php">
            
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" minlength="5" required
                    class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Email address">
                <p class="error text-red-600 text-sm mt-1"></p>
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" name="password" type="password" minlength="8" pattern=".{6,}" required
                    class="appearance-none rounded-md relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Password">
                <p class="error text-red-600 text-sm mt-1"></p>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Sign In
            </button>
                
            <p class="mt-4 text-sm text-center text-gray-700">Don't have an account? <a href="signup.php"
                    class="text-indigo-600 hover:underline">Sign up</a></p>
        </form>
    </div>
    <script src="validation.js"></script>
</body>

</html>
