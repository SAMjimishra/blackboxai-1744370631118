<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center font-[Poppins]">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-center mb-6 text-gray-800">Login</h2>
        
        <?php if(isset($_GET['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline"><?php echo htmlspecialchars($_GET['error']); ?></span>
            </div>
        <?php endif; ?>

        <form action="validate.php" method="POST" class="space-y-4">
            <div>
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                    <i class="fas fa-user mr-2"></i>Username
                </label>
                <input type="text" 
                       id="username" 
                       name="username" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       placeholder="Enter your username">
            </div>
            
            <div>
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                    <i class="fas fa-lock mr-2"></i>Password
                </label>
                <input type="password" 
                       id="password" 
                       name="password" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       placeholder="Enter your password">
            </div>
            
            <button type="submit" 
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300 flex items-center justify-center">
                <i class="fas fa-sign-in-alt mr-2"></i>Login
            </button>
        </form>
    </div>
</body>
</html>
