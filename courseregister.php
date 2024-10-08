<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <div class="bg-white bg-opacity-80 rounded-lg shadow-lg w-full max-w-sm p-8">
        <h2 class="text-center mb-8 text-3xl font-bold text-gray-800">Course Registration</h2>
        <form action="#" method="post" id="CourseRegistrationForm" class="space-y-6">
            <!-- Select Course Category -->
            <div>
                <label for="coursecategory" class="block text-sm font-medium text-gray-700">Course Category</label>
                <select id="coursecategory" name="coursecategory" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option selected>Select Course Category</option>
                    <option value="it">Information Technology</option>
                    <option value="bio">Biology</option>
                </select>
            </div>

            <!-- Select Course -->
            <div>
                <label for="course" class="block text-sm font-medium text-gray-700">Course</label>
                <select id="course" name="course" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option selected>Select Course</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Register</button>
            </div>

            <!-- Link to Sign In -->
            <div class="text-center mt-4">
                <a href="login.php" class="text-blue-600 hover:underline text-sm">Already have an account? Sign in</a>
            </div>
        </form>
    </div>

    <!-- jQuery Script to dynamically change courses -->
    <script>
        $(document).ready(function() {
            $('#coursecategory').change(function() {  // Corrected the ID here
                var category = $(this).val();
                var courses = [];

                if (category === 'it') {
                    courses = ['Web Development', 'Data Science', 'Cyber Security'];
                } else if (category === 'bio') {
                    courses = ['Molecular Biology', 'Genetics', 'Microbiology'];
                }

                var courseDropdown = $('#course');
                courseDropdown.empty(); // Clear the current options
                courseDropdown.append('<option selected>Select Course</option>');

                // Append new options
                $.each(courses, function(index, value) {
                    courseDropdown.append('<option value="' + value.toLowerCase().replace(/\s+/g, '-') + '">' + value + '</option>');
                });
            });
        });
    </script>
</body>
</html>
