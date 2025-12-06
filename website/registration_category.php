<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Category - OSCA</title>
    
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
                        dashboardBlue: '#1a008e', 
                        'osca-text': '#1a008e',
                        'osca-bg': '#f3f4f6',
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
<body class="bg-osca-bg font-sans flex text-gray-800">

    <?php
    $current_page = basename($_SERVER['PHP_SELF']);
    ?>
    <aside class="w-64 bg-dashboardBlue text-white fixed h-full left-0 top-0 flex flex-col z-50 shadow-2xl font-sans">
        <div class="px-6 py-6 flex items-center gap-3">
            <div class="h-12 w-12 bg-yellow-400 rounded-full flex items-center justify-center border-2 border-white overflow-hidden shrink-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Ph_seal_zamboanga_city.png/1200px-Ph_seal_zamboanga_city.png" alt="Logo" class="w-full h-full object-cover">
            </div>
            <h1 class="font-bold text-xl tracking-wide uppercase">OSCA</h1>
        </div>
        <div class="px-4"><hr class="border-white/50"></div>
        <?php include 'sidebar.php'; ?>
        <div class="px-4"><hr class="border-white/50"></div>
        <div class="p-6"><a href="#" class="block font-bold text-center text-white hover:text-gray-200 transition">Settings</a></div>
    </aside>

    <div class="ml-64 w-full min-h-screen flex flex-col">
        
        <?php include 'header.php'; ?>

        <main class="flex-1 p-8 overflow-y-auto">
            
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Registration Category</h2>
                <p class="text-gray-600">Manage senior citizen ID applications and registrations</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                <a href="new_id.php" class="bg-dashboardBlue text-white py-3 px-4 rounded-md font-bold hover:bg-indigo-900 transition shadow-md">
                + New ID
                </a>
                <button class="bg-dashboardBlue text-white py-3 px-4 rounded-md font-bold hover:bg-indigo-900 transition shadow-md">
                    Revalidation
                </button>
                <button class="bg-dashboardBlue text-white py-3 px-4 rounded-md font-bold hover:bg-indigo-900 transition shadow-md">
                    Lost/Damage ID
                </button>
                <button class="bg-dashboardBlue text-white py-3 px-4 rounded-md font-bold hover:bg-indigo-900 transition shadow-md">
                    Registration Report
                </button>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                
                <h3 class="text-lg font-bold text-black mb-4">Application List</h3>

                <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-4">
                    <div class="flex items-center gap-2 w-full md:w-auto">
                        <div class="relative w-full md:w-80">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                            </span>
                            <input type="text" placeholder="Search by name" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-dashboardBlue text-sm">
                        </div>
                        <button class="p-2 border border-gray-300 rounded-md hover:bg-gray-50 text-gray-600">
                            <i class="fa-solid fa-rotate"></i>
                        </button>
                    </div>

                    <div class="flex gap-2">
                        <a href="senior_citizen_list.php" class="px-4 py-2 border border-gray-400 rounded-md text-sm font-medium hover:bg-gray-50 text-gray-700">
                            Senior Citizen List</a>
                        <button class="px-4 py-2 border border-gray-400 rounded-md text-sm font-medium hover:bg-gray-50 text-gray-700 flex items-center gap-2">
                            <i class="fa-regular fa-file-excel text-green-600"></i> Export to Excel
                        </button>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-2 mb-6 text-sm">
                    <span class="text-gray-600 font-medium mr-1">Quick Filters:</span>
                    <button class="bg-dashboardBlue text-white px-4 py-1 rounded-full text-xs font-semibold">All</button>
                    <button class="bg-gray-200 text-gray-700 px-4 py-1 rounded-full text-xs font-semibold hover:bg-gray-300">Claimed</button>
                    <button class="bg-gray-200 text-gray-700 px-4 py-1 rounded-full text-xs font-semibold hover:bg-gray-300">Verified</button>
                    <button class="bg-gray-200 text-gray-700 px-4 py-1 rounded-full text-xs font-semibold hover:bg-gray-300">Printed</button>
                    <button class="bg-gray-200 text-gray-700 px-4 py-1 rounded-full text-xs font-semibold hover:bg-gray-300">Ready for Release</button>
                    <button class="bg-gray-200 text-gray-700 px-4 py-1 rounded-full text-xs font-semibold hover:bg-gray-300">Drafts</button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[800px]">
                        <thead>
                            <tr class="text-black font-bold text-sm border-b border-gray-200">
                                <th class="pb-3 pl-2">Application ID</th>
                                <th class="pb-3">Name <i class="fa-solid fa-sort text-gray-400 ml-1 cursor-pointer"></i></th>
                                <th class="pb-3">Status</th>
                                <th class="pb-3">Type <i class="fa-solid fa-sort text-gray-400 ml-1 cursor-pointer"></i></th>
                                <th class="pb-3">Age <i class="fa-solid fa-sort text-gray-400 ml-1 cursor-pointer"></i></th>
                                <th class="pb-3">Track Application</th>
                                <th class="pb-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800 text-sm">
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-4 pl-2">444444</td>
                                <td class="py-4">Sofia Santos</td>
                                <td class="py-4">Submitted</td>
                                <td class="py-4">New ID</td>
                                <td class="py-4">60</td>
                                <td class="py-4"><button class="px-4 py-1 border border-dashboardBlue text-dashboardBlue rounded text-xs font-medium hover:bg-indigo-50">View Status</button></td>
                                <td class="py-4 text-dashboardBlue font-medium"><a href="#" class="mr-3 hover:underline">View</a> <a href="#" class="hover:underline">Delete</a></td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-4 pl-2">110010</td>
                                <td class="py-4">Duplicate Ex</td>
                                <td class="py-4">Printed</td>
                                <td class="py-4">Renewal</td>
                                <td class="py-4">61</td>
                                <td class="py-4"><button class="px-4 py-1 border border-dashboardBlue text-dashboardBlue rounded text-xs font-medium hover:bg-indigo-50">View Status</button></td>
                                <td class="py-4 text-dashboardBlue font-medium"><a href="#" class="mr-3 hover:underline">View</a> <a href="#" class="hover:underline">Delete</a></td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-4 pl-2">210101</td>
                                <td class="py-4">Rey Flores</td>
                                <td class="py-4">Printed</td>
                                <td class="py-4">Lost</td>
                                <td class="py-4">65</td>
                                <td class="py-4"><button class="px-4 py-1 border border-dashboardBlue text-dashboardBlue rounded text-xs font-medium hover:bg-indigo-50">View Status</button></td>
                                <td class="py-4 text-dashboardBlue font-medium"><a href="#" class="mr-3 hover:underline">View</a> <a href="#" class="hover:underline">Delete</a></td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-4 pl-2">212102</td>
                                <td class="py-4">Rey Flores</td>
                                <td class="py-4">Draft</td>
                                <td class="py-4">Damaged</td>
                                <td class="py-4">65</td>
                                <td class="py-4"><button class="px-8 py-1 border border-dashboardBlue text-dashboardBlue rounded text-xs font-medium hover:bg-indigo-50">Edit</button></td>
                                <td class="py-4 text-dashboardBlue font-medium"><a href="#" class="mr-3 hover:underline">View</a> <a href="#" class="hover:underline">Delete</a></td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-4 pl-2">586953</td>
                                <td class="py-4">Rey Flores</td>
                                <td class="py-4">Pending</td>
                                <td class="py-4">Damaged</td>
                                <td class="py-4">65</td>
                                <td class="py-4"><button class="px-4 py-1 border border-dashboardBlue text-dashboardBlue rounded text-xs font-medium hover:bg-indigo-50">View Status</button></td>
                                <td class="py-4 text-dashboardBlue font-medium"><a href="#" class="mr-3 hover:underline">View</a> <a href="#" class="hover:underline">Delete</a></td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-4 pl-2">444444</td>
                                <td class="py-4">Rey Flores</td>
                                <td class="py-4">Draft</td>
                                <td class="py-4">New ID</td>
                                <td class="py-4">65</td>
                                <td class="py-4"><button class="px-8 py-1 border border-dashboardBlue text-dashboardBlue rounded text-xs font-medium hover:bg-indigo-50">Edit</button></td>
                                <td class="py-4 text-dashboardBlue font-medium"><a href="#" class="mr-3 hover:underline">View</a> <a href="#" class="hover:underline">Delete</a></td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-4 pl-2">444444</td>
                                <td class="py-4">Rey Flores</td>
                                <td class="py-4">Claimed</td>
                                <td class="py-4">Lost</td>
                                <td class="py-4">65</td>
                                <td class="py-4"><button class="px-4 py-1 border border-dashboardBlue text-dashboardBlue rounded text-xs font-medium hover:bg-indigo-50">Completed</button></td>
                                <td class="py-4 text-dashboardBlue font-medium"><a href="#" class="mr-3 hover:underline">View</a> <a href="#" class="hover:underline">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="flex flex-col md:flex-row justify-between items-center mt-6 text-sm text-gray-600">
                    <div class="mb-4 md:mb-0">
                        Showing 1 to 7 of 135 Applications
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-50 flex items-center gap-1">
                            <i class="fa-solid fa-angles-left text-xs"></i> Previous
                        </button>
                        <button class="w-8 h-8 border border-gray-300 rounded hover:bg-gray-50 flex items-center justify-center">1</button>
                        <button class="w-8 h-8 border border-gray-300 rounded hover:bg-gray-50 flex items-center justify-center">2</button>
                        <button class="w-8 h-8 border border-gray-300 rounded hover:bg-gray-50 flex items-center justify-center">3</button>
                        <span class="px-2">...</span>
                        <button class="w-8 h-8 border border-gray-300 rounded hover:bg-gray-50 flex items-center justify-center">7</button>
                        <button class="px-4 py-1 border border-gray-300 rounded hover:bg-gray-50 flex items-center gap-1">
                            Next <i class="fa-solid fa-angles-right text-xs"></i>
                        </button>
                    </div>
                </div>

            </div>

        </main>
    </div>

</body>
</html>