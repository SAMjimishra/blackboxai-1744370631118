<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$username = htmlspecialchars($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100 min-h-screen font-[Poppins]">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <i class="fas fa-user-circle text-2xl text-blue-500 mr-2"></i>
                    <span class="text-xl font-semibold text-gray-800">Welcome, <?php echo $username; ?></span>
                </div>
                <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md transition duration-300 flex items-center">
                    <i class="fas fa-sign-out-alt mr-2"></i>Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-lg p-6 animate-fade-in">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">
                <i class="fas fa-tachometer-alt mr-2 text-blue-500"></i>Dashboard
            </h2>
            <p class="text-gray-600 mb-4">
                You have successfully logged in to your account. This is a simple dashboard page.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
                <!-- Sample Dashboard Cards -->
                <div class="bg-blue-50 p-4 rounded-lg border border-blue-100">
                    <i class="fas fa-chart-line text-2xl text-blue-500 mb-2"></i>
                    <h3 class="font-semibold text-gray-800">Statistics</h3>
                    <p class="text-sm text-gray-600">View your activity statistics</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg border border-green-100">
                    <i class="fas fa-tasks text-2xl text-green-500 mb-2"></i>
                    <h3 class="font-semibold text-gray-800">Tasks</h3>
                    <p class="text-sm text-gray-600">Manage your daily tasks</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg border border-purple-100">
                    <i class="fas fa-bell text-2xl text-purple-500 mb-2"></i>
                    <h3 class="font-semibold text-gray-800">Notifications</h3>
                    <p class="text-sm text-gray-600">Check your notifications</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
