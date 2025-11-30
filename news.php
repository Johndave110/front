<?php include 'header.php'; ?>

<section class="bg-gradient-to-b from-blue-900 to-brandBlue text-white py-20 relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10 text-center md:text-left">
        <h1 class="text-5xl md:text-6xl font-extrabold uppercase leading-tight">
            Latest News<br>and Updates
        </h1>
    </div>
</section>

<section class="bg-gray-50 py-12 min-h-screen">
    <div class="container mx-auto px-6">
        
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-4">
            
            <div class="relative w-full md:w-2/3">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <i class="fas fa-search text-gray-400 text-lg"></i>
                </div>
                <input type="text" 
                       class="w-full pl-12 pr-4 py-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-brandBlue shadow-sm text-gray-700 text-lg" 
                       placeholder="Search articles or blogs...">
            </div>

            <button class="w-full md:w-auto bg-brandBlue text-white font-bold py-4 px-8 rounded-lg shadow hover:bg-blue-800 transition flex items-center justify-center space-x-3">
                <span class="text-lg">Barangay</span>
                <i class="fas fa-sliders-h"></i>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <?php 
            $news_data = [
                [
                    "date" => "October 23, 2024",
                    "title" => "Comprehensive Geriatric Training",
                    "desc" => "A lecture on GERIATRIC SYNDROME was conducted by Dr. Cathy Usman during the Comprehensive Geriatric Training among health care providers from different municipalities held last October 10, 2024 at City Inn Hotel.",
                    "views" => "102,100,210"
                ],
                [
                    "date" => "October 23, 2024",
                    "title" => "Comprehensive Geriatric Training",
                    "desc" => "A lecture on GERIATRIC SYNDROME was conducted by Dr. Cathy Usman during the Comprehensive Geriatric Training among health care providers from different municipalities held last October 10, 2024 at City Inn Hotel.",
                    "views" => "102,100,210"
                ],
                [
                    "date" => "October 23, 2024",
                    "title" => "Comprehensive Geriatric Training",
                    "desc" => "A lecture on GERIATRIC SYNDROME was conducted by Dr. Cathy Usman during the Comprehensive Geriatric Training among health care providers from different municipalities held last October 10, 2024 at City Inn Hotel.",
                    "views" => "102,100,210"
                ],
                [
                    "date" => "October 23, 2024",
                    "title" => "Comprehensive Geriatric Training",
                    "desc" => "A lecture on GERIATRIC SYNDROME was conducted by Dr. Cathy Usman during the Comprehensive Geriatric Training among health care providers from different municipalities held last October 10, 2024 at City Inn Hotel.",
                    "views" => "102,100,210"
                ],
                [
                    "date" => "October 23, 2024",
                    "title" => "Comprehensive Geriatric Training",
                    "desc" => "A lecture on GERIATRIC SYNDROME was conducted by Dr. Cathy Usman during the Comprehensive Geriatric Training among health care providers from different municipalities held last October 10, 2024 at City Inn Hotel.",
                    "views" => "102,100,210"
                ],
                [
                    "date" => "October 23, 2024",
                    "title" => "Comprehensive Geriatric Training",
                    "desc" => "A lecture on GERIATRIC SYNDROME was conducted by Dr. Cathy Usman during the Comprehensive Geriatric Training among health care providers from different municipalities held last October 10, 2024 at City Inn Hotel.",
                    "views" => "102,100,210"
                ]
            ];

            foreach($news_data as $news): 
            ?>
                <div class="bg-white border border-gray-300 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition duration-300 flex flex-col h-full">
                    
                    <div class="relative h-64 bg-gray-200">
                        <img src="https://placehold.co/600x400/e2e8f0/gray?text=Training+Event" alt="News Event" class="w-full h-full object-cover">
                    </div>

                    <div class="p-6 flex-grow flex flex-col">
                        
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-sm text-gray-800 font-medium"><?php echo $news['date']; ?></span>
                            <i class="far fa-bookmark text-gray-500 cursor-pointer hover:text-brandBlue text-lg"></i>
                        </div>

                        <h3 class="text-lg font-bold text-black mb-3 leading-tight">
                            <?php echo $news['title']; ?>
                        </h3>

                        <p class="text-sm text-gray-600 leading-relaxed mb-6 flex-grow">
                            <?php echo $news['desc']; ?>
                        </p>

                        <div class="border-t border-gray-200 pt-4 mt-auto">
                            <div class="flex items-center text-gray-400 text-sm">
                                <i class="far fa-eye mr-2"></i>
                                <span><?php echo $news['views']; ?></span>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>