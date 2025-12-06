<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamboanga City OSCA Dashboard</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        // I mapped your class name 'dashboardBlue' to the OSCA color
                        dashboardBlue: '#1a008e', 
                        'osca-text': '#1a008e',
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #ccc; border-radius: 4px; }
    </style>
</head>
<body class="bg-gray-100 font-sans flex text-gray-800">

    <?php
    // Get the current page name to set the active state
    // Note: Since this file is dashboard.php, the Dashboard link will automatically bold itself
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    <aside class="w-64 bg-dashboardBlue text-white fixed h-full left-0 top-0 flex flex-col z-50 shadow-2xl font-sans">
        
        <div class="px-6 py-6 flex items-center gap-3">
            <div class="h-12 w-12 bg-yellow-400 rounded-full flex items-center justify-center border-2 border-white overflow-hidden shrink-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Ph_seal_zamboanga_city.png/1200px-Ph_seal_zamboanga_city.png" alt="Logo" class="w-full h-full object-cover">
            </div>
            <h1 class="font-bold text-xl tracking-wide uppercase">OSCA</h1>
        </div>

        <div class="px-4">
            <hr class="border-white/50">
        </div>

        <?php include 'sidebar.php'; ?>

        <div class="px-4">
            <hr class="border-white/50">
        </div>

        <div class="p-6">
            <a href="#" class="block font-bold text-center text-white hover:text-gray-200 transition">Settings</a>
        </div>

    </aside>
    <div class="ml-64 w-full min-h-screen flex flex-col">
        
        <?php include 'header.php'; ?>

        <main class="flex-1 p-8 overflow-y-auto">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                
                <div class="bg-white rounded-xl shadow-md p-6 flex items-center h-40 relative overflow-hidden group hover:shadow-lg transition">
                    <div class="absolute left-6 top-1/2 transform -translate-y-1/2 h-24 w-2.5 bg-dashboardBlue rounded-full"></div>
                    <div class="ml-8">
                        <h2 class="text-5xl font-bold text-osca-text mb-2">4720</h2>
                        <p class="text-gray-800 font-medium text-lg leading-tight">Registered Active Senior Citizen<br>as of Today</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex items-center h-40 relative overflow-hidden group hover:shadow-lg transition">
                    <div class="absolute left-6 top-1/2 transform -translate-y-1/2 h-24 w-2.5 bg-dashboardBlue rounded-full"></div>
                    <div class="ml-8">
                        <h2 class="text-5xl font-bold text-osca-text mb-2">200</h2>
                        <p class="text-gray-800 font-medium text-lg">Pending Applications</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex items-center h-40 relative overflow-hidden group hover:shadow-lg transition">
                    <div class="absolute left-6 top-1/2 transform -translate-y-1/2 h-24 w-2.5 bg-dashboardBlue rounded-full"></div>
                    <div class="ml-8">
                        <h2 class="text-5xl font-bold text-osca-text mb-2">47</h2>
                        <p class="text-gray-800 font-medium text-lg">ID Claimable as of Today</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-md p-6 flex items-center h-40 relative overflow-hidden group hover:shadow-lg transition">
                    <div class="absolute left-6 top-1/2 transform -translate-y-1/2 h-24 w-2.5 bg-dashboardBlue rounded-full"></div>
                    <div class="ml-8">
                        <h2 class="text-5xl font-bold text-osca-text mb-2">5725</h2>
                        <p class="text-gray-800 font-medium text-lg">Released ID's to Seniors</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="text-lg font-bold text-black mb-6">Upcoming Events</h3>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-black font-bold text-sm border-b border-gray-200">
                                <th class="pb-4 pl-2">Event Name</th>
                                <th class="pb-4">
                                    Target Audience <i class="fa-solid fa-sort text-gray-400 ml-1 cursor-pointer hover:text-gray-600"></i>
                                </th>
                                <th class="pb-4">
                                    Date Event <i class="fa-solid fa-sort text-gray-400 ml-1 cursor-pointer hover:text-gray-600"></i>
                                </th>
                                <th class="pb-4">
                                    Location <i class="fa-solid fa-sort text-gray-400 ml-1 cursor-pointer hover:text-gray-600"></i>
                                </th>
                                <th class="pb-4 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800 text-sm">
                            
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                <td class="py-4 pl-2 font-medium">Medical Mission 2025</td>
                                <td class="py-4">All Senior Citizen</td>
                                <td class="py-4">
                                    Oct 25, 2025 <span class="ml-2 text-gray-500">9:00 AM</span>
                                </td>
                                <td class="py-4">Barangay Hall</td>
                                <td class="py-4 text-center">
                                    <button class="px-6 py-1.5 border border-dashboardBlue text-dashboardBlue rounded hover:bg-indigo-50 transition text-xs font-semibold">
                                        View
                                    </button>
                                </td>
                            </tr>

                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition">
                                <td class="py-4 pl-2 font-medium">Quarterly Pension</td>
                                <td class="py-4">Ages 80-89</td>
                                <td class="py-4">
                                    Oct 25, 2025 <span class="ml-2 text-gray-500">9:00 AM</span>
                                </td>
                                <td class="py-4">DSWD</td>
                                <td class="py-4 text-center">
                                    <button class="px-6 py-1.5 border border-dashboardBlue text-dashboardBlue rounded hover:bg-indigo-50 transition text-xs font-semibold">
                                        View
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>

</body>
</html>