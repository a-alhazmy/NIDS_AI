<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <nav class="flex justify-between items-center p-5">
        <div class="flex items-center space-x-4">
            <img src="../images/xdef.png" alt="XDEFENSE logo" class="h-12">
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-blue-300">Home</a></li>
                <li><a href="#" class="hover:text-blue-300">Try now</a></li>
            </ul>
        </div>
        <div>
            <a href="/profile" class="flex items-center space-x-2">
                <i class="fas fa-user-circle text-3xl"></i>
                <span class="hidden sm:inline">Profile</span>
            </a>
        </div>
    </nav>
    <div class="container mx-auto px-4">
        <!-- Header -->
        <header class="flex justify-between items-center py-4">
            <div class="text-left">
                <h1 class="text-3xl font-bold">Main Dashboard</h1>
            </div>
            <div class="text-right">
                <div class="relative">
                    <input type="search" placeholder="Search..." class="bg-gray-800 text-sm rounded-full pl-8 pr-3 py-1 focus:outline-none">
                    <i class="fas fa-search absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                </div>
            </div>
        </header>

        <!-- Stats Row -->
        <div class="grid grid-cols-4 gap-4">
            <!-- Repeat this block for each stat -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs">Alerts</p>
                        <p class="text-xl font-semibold">350</p>
                    </div>
                    <div class="text-red-500">
                        <i class="fas fa-exclamation-triangle fa-2x"></i>
                    </div>
                    
                </div>
            </div>
            
            <!-- ... other stats ... -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs">All Devices</p>
                        <p class="text-xl font-semibold">32</p>
                    </div>
                    <div class="text-red-500">
                        <i class="fas fa-exclamation-triangle fa-2x"></i>
                    </div>
                    
                </div>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs">Errors</p>
                        <p class="text-xl font-semibold">350</p>
                    </div>
                    <div class="text-red-500">
                        <i class="fas fa-exclamation-triangle fa-2x"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs">Incident History</p>
                        <p class="text-xl font-semibold">831</p>
                    </div>
                    <div class="text-red-500">
                        <i class="fas fa-exclamation-triangle fa-2x"></i>
                    </div>
                    
                </div>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs">Check</p>
                        <p class="text-xl font-semibold">2784</p>
                    </div>
                    <div class="text-red-500">
                        <i class="fas fa-exclamation-triangle fa-2x"></i>
                    </div>
                    
                </div>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs">Total Documents</p>
                        <p class="text-xl font-semibold">2935</p>
                    </div>
                    <div class="text-red-500">
                        <i class="fas fa-exclamation-triangle fa-2x"></i>
                    </div>  
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid grid-cols-2 gap-4 my-4">
            <!-- Line Chart Placeholder -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Total Documents</h3>
                <div class="h-40 bg-gray-700 rounded-lg text-center pt-16">
                    <!-- Replace with actual chart -->
                    Line Chart Placeholder
                </div>
            </div>

            <!-- Bar Chart Placeholder -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Weekly Data</h3>
                <div class="h-40 bg-gray-700 rounded-lg text-center pt-16">
                    <!-- Replace with actual chart -->
                    Bar Chart Placeholder
                </div>
            </div>
        </div>

        <!-- Tables Row -->
        <div class="grid grid-cols-2 gap-4 my-4">
            <!-- Check Table -->
            <div class="bg-gray-800 p-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Check Table</h3>
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="text-left text-xs font-medium uppercase tracking-wider">Name</th>
                                <th class="text-left text-xs font-medium uppercase tracking-wider">Progress</th>
                                <th class="text-left text-xs font-medium uppercase tracking-wider">Quantity</th>
                                <th class="text-left text-xs font-medium uppercase tracking-wider">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Repeat this row for each table item -->
                            <tr>
                                <td class="py-1">user 1</td>
                                <td class="py-1">75%</td>
                                <td class="py-1">2,450</td>
                                <td class="py-1">21-Jun-2021</td>
                            </tr>
                            <!-- ... other table rows ... -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg">
                <h3 class="text-lg font-semibold mb-2">Monthly Data</h3>
                <div class="h-40 bg-gray-700 rounded-lg text-center pt-16">
                    <!-- Replace with actual chart -->
                    Bar Chart Placeholder
                </div>
            </div>
            <!-- Complex Table -->
            <!-- ... similar structure to the Check Table ... -->
        </div>

        <!-- Footer -->
        <footer class="bg-black bg-opacity-25 py-10">
            <div class="flex justify-between items-center p-5">
                <div>
                    <img src="..\images\xdef.png" alt="XDEFENSE logo placeholder" class="h-12">
                </div>
                
                <div>
                    <p class="text-sm">info@xdefense.com</p>
                    <p class="text-sm">+990 0171245342</p>
                    <p class="text-sm">ABHA</p>
                </div>
            </div>
            <div class="text-center p-5">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p class="text-xs">XDEFENSE All Rights Reserved</p>
                <p class="text-xs"><a href="#" class="hover:text-blue-300">Privacy Policy</a> | <a href="#" class="hover:text-blue-300">Terms of Service</a></p>
            </div>
        </footer>
    </div>
</body>

</html>

@foreach ($userFiles as $file)
    <h3>{{ $file['filename'] }}</h3>
    <pre>{{ json_encode($file['data'], JSON_PRETTY_PRINT) }}</pre>
@endforeach