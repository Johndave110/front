<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Announcement - OSCA</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
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
<body class="bg-gray-50 font-sans flex text-gray-800">

    <?php
    // Set active page
    $current_page = 'announcement.php';
    ?>

    <?php include 'sidebar.php'; ?>

    <div class="ml-64 w-full min-h-screen flex flex-col">
        
        <?php include 'header.php'; ?>

        <main class="flex-1 p-8 overflow-y-auto fade-in">
            
            <div class="max-w-4xl mx-auto">
                <div class="mb-6">
                    <a href="announcement.php" class="text-gray-500 hover:text-blue-900 flex items-center gap-2 transition text-sm font-medium">
                        <i class="fa-solid fa-arrow-left"></i> Back to Announcements
                    </a>
                </div>

                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-8">
                    
                    <h2 class="text-2xl font-bold brand-blue-text mb-8">Create an Announcement</h2>

                    <form action="submit_announcement.php" method="POST" enctype="multipart/form-data">
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 mb-6">
                            
                            <div class="md:col-span-1">
                                <label class="block text-gray-800 font-bold mb-2 text-sm">Title</label>
                                <input type="text" name="title" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white text-gray-900 focus:outline-none focus:border-blue-900 transition-colors">
                            </div>

                            <div class="md:col-span-1">
                                <label class="block text-gray-800 font-bold mb-2 text-sm">Date</label>
                                <input type="date" name="event_date" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white text-gray-600 focus:outline-none focus:border-blue-900 transition-colors">
                            </div>

                            <div class="md:col-span-1">
                                <label class="block text-gray-800 font-bold mb-2 text-sm">Time</label>
                                <input type="time" name="event_time" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white text-gray-600 focus:outline-none focus:border-blue-900 transition-colors">
                            </div>

                             <div class="md:col-span-1">
                                <label class="block text-gray-800 font-bold mb-2 text-sm">Location</label>
                                <input type="text" name="location" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white text-gray-900 focus:outline-none focus:border-blue-900 transition-colors">
                            </div>

                            <div class="md:col-span-2">
                                 <label class="block text-gray-800 font-bold mb-2 text-sm">Target Audience</label>
                                <input type="text" name="target_audience" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white text-gray-900 focus:outline-none focus:border-blue-900 transition-colors">
                            </div>

                        </div>

                        <div class="mb-8">
                            <label class="block text-gray-800 font-bold mb-2 text-sm">Description</label>
                            <textarea name="description" rows="8" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white text-gray-900 resize-none focus:outline-none focus:border-blue-900 transition-colors"></textarea>
                        </div>

                        <div class="flex flex-col md:flex-row justify-between items-center gap-4 pt-4 border-t border-gray-100">
                            
                            <div class="flex items-center gap-6 text-xl text-gray-500">
                                <label class="cursor-pointer hover:text-blue-900 transition transform hover:scale-110" title="Upload File">
                                    <input type="file" class="hidden">
                                    <i class="fa-solid fa-paperclip"></i>
                                </label>
                                
                                <label class="cursor-pointer hover:text-blue-900 transition transform hover:scale-110" title="Upload Video">
                                    <input type="file" accept="video/*" class="hidden">
                                    <i class="fa-solid fa-video"></i>
                                </label>

                                 <label class="cursor-pointer hover:text-blue-900 transition transform hover:scale-110" title="Upload Image">
                                    <input type="file" accept="image/*" class="hidden">
                                    <i class="fa-regular fa-image"></i>
                                </label>
                            </div>

                            <button type="submit" class="brand-blue text-white py-3 px-10 rounded-full font-bold hover:opacity-90 transition shadow-md flex items-center gap-2 text-sm uppercase tracking-wide">
                                Post Announcement <i class="fa-solid fa-paper-plane"></i>
                            </button>

                        </div>

                    </form>
                </div>
            </div>

        </main>
    </div>

</body>
</html>