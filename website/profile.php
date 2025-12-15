<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile - OSCA</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="../css/style.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="inter-body flex text-gray-800">

    <?php 
    // Set Page for Sidebar Active State
    $current_page = 'settings.php'; 
    ?>

    <?php include 'sidebar.php'; ?>

    <div class="ml-64 w-full min-h-screen flex flex-col">
        
        <?php include 'header.php'; ?>

        <main class="flex-1 p-8 overflow-y-auto fade-in">
            
            <div class="max-w-6xl mx-auto">
                
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                    
                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden sticky top-6">
                            <div class="p-6 flex flex-col items-center text-center">
                                <div class="w-32 h-32 rounded-full bg-orange-100 flex items-center justify-center mb-4 border-4 border-white shadow-sm overflow-hidden relative">
                                    <i class="fa-solid fa-user-tie text-5xl text-orange-500"></i>
                                    </div>
                                
                                <h2 class="text-xl font-bold text-gray-900 uppercase tracking-tight">Joe Carlo S. Manzanillo</h2>
                                <p class="text-xs font-bold text-gray-500 mt-1 uppercase tracking-wide">Utility Worker</p>
                                
                                <button class="mt-6 brand-blue text-white px-8 py-2.5 rounded-md font-bold hover:opacity-90 transition shadow-sm w-full text-sm">
                                    Edit
                                </button>
                            </div>
                            
                            <div class="border-t border-gray-100 p-5 bg-gray-50">
                                <p class="text-[10px] text-gray-400 uppercase tracking-wider font-semibold">User Created Date</p>
                                <p class="text-sm font-semibold text-gray-700 mt-0.5">January 14, 2025 1:45 AM</p>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-3 space-y-6">
                        
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                            <h3 class="brand-blue-text text-lg font-bold mb-6">Basic Information</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-6 gap-x-12">
                                <div>
                                    <label class="block text-xs text-gray-500 mb-1">Name:</label>
                                    <p class="font-bold text-gray-900 text-sm uppercase">Joe Carlo S. Manzanillo</p>
                                </div>
                                <div>
                                    <label class="block text-xs text-gray-500 mb-1">Username:</label>
                                    <p class="font-bold text-gray-900 text-sm">joecarlomanzanillo</p>
                                </div>
                                <div>
                                    <label class="block text-xs text-gray-500 mb-1">Sex:</label>
                                    <p class="font-bold text-gray-900 text-sm uppercase">Male</p>
                                </div>
                                <div>
                                    <label class="block text-xs text-gray-500 mb-1">Contact Number:</label>
                                    <p class="font-bold text-gray-900 text-sm">+639355705056</p>
                                </div>
                                <div>
                                    <label class="block text-xs text-gray-500 mb-1">Position:</label>
                                    <p class="font-bold text-gray-900 text-sm uppercase">Utility Worker</p>
                                </div>
                                <div>
                                    <label class="block text-xs text-gray-500 mb-1">Role:</label>
                                    <p class="font-bold text-gray-900 text-sm uppercase">Social Worker Employee</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                            <h3 class="brand-blue-text text-lg font-bold mb-6">Office Assignment</h3>
                            
                            <div class="mb-6">
                                <label class="block text-xs text-gray-500 mb-1">Main Office:</label>
                                <p class="font-bold text-gray-900 text-sm uppercase">OSCA Main Office</p>
                            </div>

                            <label class="block text-xs text-gray-500 mb-3">Fields Handled:</label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-2">
                                <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 uppercase">
                                    <i class="fa-solid fa-check text-green-500"></i> Field Office 1
                                </div>
                                <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 uppercase">
                                    <i class="fa-solid fa-check text-green-500"></i> Field Office 2
                                </div>
                                <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 uppercase">
                                    <i class="fa-solid fa-check text-green-500"></i> Field Office 3
                                </div>
                                <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 uppercase">
                                    <i class="fa-solid fa-check text-green-500"></i> Field Office 4
                                </div>
                                <div class="flex items-center gap-2 text-sm font-semibold text-gray-700 uppercase">
                                    <i class="fa-solid fa-check text-green-500"></i> Field Office 5
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                            <h3 class="brand-blue-text text-lg font-bold mb-6">Access Permissions</h3>
                            
                            <div class="space-y-6">
                                
                                <div class="border rounded-md border-gray-300 overflow-hidden">
                                    <div class="bg-gray-200 px-4 py-2 border-b border-gray-300 font-bold text-gray-700 text-sm">
                                        Registration Module
                                    </div>
                                    <div class="p-5 bg-white">
                                        <ul class="space-y-2 text-sm text-gray-800 list-disc list-inside font-medium marker:text-gray-400">
                                            <li>Manage Senior Citizen, Booklet and Slip</li>
                                            <li>View Senior Citizen Profile</li>
                                            <li>View Pending Request</li>
                                            <li>Application Monitoring</li>
                                            <li>Archiving</li>
                                            <li>Generate Reports</li>
                                            <li>Printing of ID</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="border rounded-md border-gray-300 overflow-hidden">
                                    <div class="bg-gray-200 px-4 py-2 border-b border-gray-300 font-bold text-gray-700 text-sm">
                                        Complaint Module
                                    </div>
                                    <div class="p-5 bg-white">
                                        <ul class="space-y-2 text-sm text-gray-800 list-disc list-inside font-medium marker:text-gray-400">
                                            <li>Manage Complaint</li>
                                            <li>View Complaints</li>
                                            <li>View Pending Cases</li>
                                            <li>Compute for amount billable</li>
                                            <li>Complaint Monitoring</li>
                                            <li>Archiving</li>
                                            <li>Generate Reports</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="border rounded-md border-gray-300 overflow-hidden">
                                    <div class="bg-gray-200 px-4 py-2 border-b border-gray-300 font-bold text-gray-700 text-sm">
                                        Account Module
                                    </div>
                                    <div class="p-5 bg-white">
                                        <ul class="space-y-2 text-sm text-gray-800 list-disc list-inside font-medium marker:text-gray-400">
                                            <li>Manage User Accounts</li>
                                            <li>View Users Access Logs</li>
                                            <li>View Users Activity Logs</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </main>
    </div>

</body>
</html>