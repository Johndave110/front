<?php
// Get the current page name to set the active state
$current_page = basename($_SERVER['PHP_SELF']);
?>
<aside class="w-64 bg-dashboardBlue text-white fixed h-full left-0 top-0 flex flex-col z-50 shadow-2xl font-sans">
    
    <div class="px-6 py-6 flex items-center gap-3">
        <div class="h-12 w-12 bg-yellow-400 rounded-full flex items-center justify-center border-2 border-white overflow-hidden shrink-0">
            <img src="https://placehold.co/100x100/transparent/white?text=LOGO" alt="Logo" class="w-full h-full object-cover">
        </div>
        <h1 class="font-bold text-xl tracking-wide uppercase">OSCA</h1>
    </div>

    <div class="px-4">
        <hr class="border-white/50">
    </div>

    <nav class="flex-1 overflow-y-auto py-6 px-6">
        <ul class="space-y-6">
            
            <li>
                <a href="dashboard.php" 
                   class="<?php echo ($current_page == 'dashboard.php') ? 'font-bold text-white border-b-2 border-white pb-1' : 'font-medium text-white/80 hover:text-white transition'; ?>">
                    Dashboard
                </a>
            </li>
            
            <li>
                <a href="registration_category.php" 
                   class="<?php echo ($current_page == 'registration_category.php' || $current_page == 'new_id.php') ? 'font-bold text-white border-b-2 border-white pb-1' : 'font-medium text-white/80 hover:text-white transition'; ?>">
                    Registration Category
                </a>
            </li>

            <li>
                <a href="complaints.php" class="font-medium text-white/80 hover:text-white transition">Complaints</a>
            </li>

            <li>
                <a href="#" class="font-medium text-white/80 hover:text-white transition">ID Printing</a>
            </li>

            <li>
                <a href="#" class="font-medium text-white/80 hover:text-white transition">Accounts Settings</a>
            </li>

            <li>
                <a href="#" class="font-medium text-white/80 hover:text-white transition">Archives</a>
            </li>

            <li>
                <a href="#" class="font-medium text-white/80 hover:text-white transition">Heat Map</a>
            </li>

            <li>
                <a href="#" class="font-medium text-white/80 hover:text-white transition">Announcement</a>
            </li>

        </ul>
    </nav>

    <div class="px-4">
        <hr class="border-white/50">
    </div>

    <div class="p-6">
        <a href="#" class="block font-bold text-center text-white hover:text-gray-200 transition">Settings</a>
    </div>

</aside>