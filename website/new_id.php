<?php
// Session check (optional)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New ID Registration - OSCA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { font-family: 'Poppins', sans-serif; }
        /* Transition for switching steps smoothly */
        .step-content { display: none; animation: fadeIn 0.3s ease-in-out; }
        .step-content.active { display: block; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dashboardBlue: '#1a0b7e',
                        brandGold: '#facc15',
                        brandBlue: '#1a1f71',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 flex text-gray-800 font-sans">

    <aside class="w-64 bg-dashboardBlue text-white fixed h-full left-0 top-0 flex flex-col z-20 shadow-xl">
        <div class="p-6 flex items-center space-x-3 border-b border-blue-800">
            <div class="h-10 w-10 bg-yellow-400 rounded-full flex items-center justify-center border-2 border-white text-dashboardBlue font-bold text-xs">
                <img src="https://placehold.co/60x60/transparent/white?text=LOGO" alt="Logo" class="rounded-full">
            </div>
            <h1 class="font-bold text-xl tracking-wide">OSCA</h1>
        </div>

        <nav class="flex-1 overflow-y-auto py-6">
            <ul class="space-y-1">
                <li><a href="dashboard.php" class="block py-3 px-6 hover:bg-blue-800 transition">Dashboard</a></li>
                <li>
                    <a href="registration_category.php" class="block py-3 px-6 border-b-2 border-white font-bold bg-white/10">
                        Registration Category
                    </a>
                </li>
                <li><a href="#" class="block py-3 px-6 hover:bg-blue-800 transition">Complaints</a></li>
                <li><a href="#" class="block py-3 px-6 hover:bg-blue-800 transition">ID Printing</a></li>
                <li><a href="#" class="block py-3 px-6 hover:bg-blue-800 transition">Accounts Settings</a></li>
                <li><a href="#" class="block py-3 px-6 hover:bg-blue-800 transition">Archives</a></li>
                <li><a href="#" class="block py-3 px-6 hover:bg-blue-800 transition">Heat Map</a></li>
                <li><a href="#" class="block py-3 px-6 hover:bg-blue-800 transition">Announcement</a></li>
            </ul>
        </nav>
        <div class="p-6 border-t border-blue-800">
            <a href="#" class="block font-bold hover:text-gray-300">Settings</a>
        </div>
    </aside>

    <div class="ml-64 w-full flex flex-col min-h-screen">
        
        <header class="bg-white shadow-sm py-4 px-8 flex justify-between items-center sticky top-0 z-30">
            <div>
                <h2 class="text-xl font-bold text-black">Zamboanga City OSCA</h2>
                <p class="text-xs text-gray-600 font-semibold">Office of Senior Citizens Affairs</p>
            </div>
            <div class="flex items-center text-right space-x-4">
                <div>
                    <h3 class="font-bold text-black text-lg leading-none">Space1000</h3>
                    <p class="text-xs text-gray-500 font-semibold">Social Worker Coordinator</p>
                </div>
                <div class="text-3xl text-gray-800 cursor-pointer">
                    <i class="far fa-user-circle"></i>
                </div>
            </div>
        </header>

        <main class="flex-1 p-8 pb-20">
            
            <div class="mb-8 text-center">
                <p class="text-sm font-semibold mb-2" id="stepText">Step 1 of 4</p>
                <div class="w-full bg-gray-200 h-2 rounded-full overflow-hidden">
                    <div id="progressBar" class="bg-dashboardBlue h-full transition-all duration-300" style="width: 25%"></div>
                </div>
                
                <div class="flex justify-between mt-6 px-4 md:px-12">
                    <button class="step-btn px-6 py-2 rounded-lg font-bold text-sm bg-dashboardBlue text-white" data-step="1">1 Personal Information</button>
                    <button class="step-btn px-6 py-2 rounded-lg font-bold text-sm bg-gray-100 text-gray-500" data-step="2">2 Family Composition</button>
                    <button class="step-btn px-6 py-2 rounded-lg font-bold text-sm bg-gray-100 text-gray-500" data-step="3">3 Association</button>
                    <button class="step-btn px-6 py-2 rounded-lg font-bold text-sm bg-gray-100 text-gray-500" data-step="4">4 Requirements</button>
                </div>
            </div>

            <form id="registrationForm" onsubmit="return false;">
                
                <div id="step1" class="step-content active bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold text-brandBlue">Personal Na Impormasyon</h3>
                        <button class="border border-gray-400 text-gray-500 px-4 py-1 rounded">Input Name</button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block font-bold mb-2">First Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Juan" class="w-full border border-gray-400 rounded p-3">
                        </div>
                        <div>
                            <label class="block font-bold mb-2">Middle Name/Middle Initial <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Santos" class="w-full border border-gray-400 rounded p-3">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block font-bold mb-2">Last Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Cruz" class="w-full border border-gray-400 rounded p-3">
                        </div>
                        <div>
                            <label class="block font-bold mb-2">Extension (e.g.,Jr.,Sr.,III)</label>
                            <input type="text" placeholder="Jr." class="w-full border border-gray-400 rounded p-3">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block font-bold mb-2">House No. <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="123" class="w-full border border-gray-400 rounded p-3">
                        </div>
                        <div>
                            <label class="block font-bold mb-2">Street <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Rizal Street" class="w-full border border-gray-400 rounded p-3">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block font-bold mb-2">Barangay <span class="text-red-500">*</span></label>
                            <select class="w-full border border-gray-400 rounded p-3 bg-white">
                                <option>Select Barangay</option>
                                <option>Tetuan</option>
                                <option>Sta. Maria</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-bold mb-2">City, Province, Postal Code</label>
                            <div class="relative">
                                <input type="text" value="Zamboanga City, Philippines, 7000" disabled class="w-full border border-gray-400 rounded p-3 bg-gray-100">
                                <i class="fas fa-map-marker-alt absolute right-4 top-4 text-gray-500"></i>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <label class="block font-bold mb-2">Date of Birth <span class="text-red-500">*</span></label>
                            <input type="date" class="w-full border border-gray-400 rounded p-3">
                        </div>
                        <div>
                            <label class="block font-bold mb-2">Age <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="65" class="w-full border border-gray-400 rounded p-3">
                        </div>
                        <div>
                            <label class="block font-bold mb-2">Sex/Gender <span class="text-red-500">*</span></label>
                            <div class="flex items-center space-x-4 mt-3">
                                <label class="flex items-center"><input type="radio" name="gender" class="mr-2"> Lalaki/Male</label>
                                <label class="flex items-center"><input type="radio" name="gender" class="mr-2"> Babae/Female</label>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-brandBlue mt-8 mb-6">Contact & Background Information</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                             <label class="block font-bold mb-2">Mobile Number</label>
                             <input type="text" placeholder="09xxx-xxxx-xxxx" class="w-full border border-gray-400 rounded p-3">
                        </div>
                        <div>
                             <label class="block font-bold mb-2">Monthly Salary</label>
                             <input type="text" placeholder="₱ 0.00" class="w-full border border-gray-400 rounded p-3">
                        </div>
                    </div>
                </div>

                <div id="step2" class="step-content bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                    <p class="mb-4">To Add a Family Member Please click Add Person Button</p>
                    
                    <div class="flex gap-4 mb-6">
                        <button type="button" onclick="addFamilyMember()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded shadow flex items-center">
                            <i class="fas fa-plus mr-2"></i> Add Person
                        </button>
                        <button type="button" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-6 rounded shadow flex items-center">
                            <i class="fas fa-trash-alt mr-2"></i> Delete Selected
                        </button>
                    </div>

                    <div id="familyContainer" class="space-y-6">
                        </div>
                </div>

                <div id="step3" class="step-content bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                    <h3 class="text-xl font-bold text-brandBlue mb-2">Target Sector (Pangunahing Sektor)</h3>
                    <div class="bg-blue-50 p-4 rounded mb-6 text-brandBlue font-medium text-sm">
                        Select ALL categories that apply to this senior citizen. Multiple selections are allowed.
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php 
                        $sectors = [
                            ["title" => "PNGNA (Pambansang Gayuma...)", "desc" => "Member of national senior citizens organization"],
                            ["title" => "Solo Parents", "desc" => "Senior citizen raising children/grandchildren alone"],
                            ["title" => "WEPC (Women Empowerment...)", "desc" => "Female senior citizens in empowerment programs"],
                            ["title" => "Indigenous Person (IP)", "desc" => "Member of indigenous cultural communities"],
                            ["title" => "PWD (Person with Disability)", "desc" => "Senior with recognized disability"],
                            ["title" => "Recovering Person who used drugs", "desc" => "Senior in recovery programs"],
                            ["title" => "YNSP (Yakap ng mga Nakatatanda...)", "desc" => "Special care program for vulnerable seniors"],
                            ["title" => "4P's DSWD Beneficiaries", "desc" => "Seniors receiving cash grants"],
                            ["title" => "PASP (Pag-Asa para sa Seniors...)", "desc" => "Hope and support program members"],
                            ["title" => "Street Dwellers", "desc" => "Senior living on the streets"],
                            ["title" => "Psychosocial/Mental Disability", "desc" => "Senior with mental challenges"],
                            ["title" => "Stateless Person/Asylum", "desc" => "Refugees or stateless seniors"],
                            ["title" => "KIA / WIA", "desc" => "Killed in Action / Wounded in Action"],
                            ["title" => "Other", "desc" => "Please specify..."]
                        ];

                        foreach($sectors as $sec) {
                            echo '
                            <div class="border border-gray-400 rounded-lg p-4 flex items-start hover:shadow-md transition cursor-pointer" onclick="toggleCheck(this)">
                                <div class="mr-4 pt-1">
                                    <input type="checkbox" class="w-6 h-6 border-gray-400 rounded pointer-events-none">
                                </div>
                                <div>
                                    <h4 class="font-bold text-sm text-black">'.$sec['title'].'</h4>
                                    <p class="text-xs text-gray-600">'.$sec['desc'].'</p>
                                </div>
                            </div>
                            ';
                        }
                        ?>
                    </div>
                     <div class="mt-6 flex gap-4">
                        <button class="bg-green-500 text-white font-bold py-2 px-4 rounded text-sm">+ Add Association</button>
                        <button class="bg-red-500 text-white font-bold py-2 px-4 rounded text-sm"><i class="fas fa-trash-alt"></i> Delete Selected</button>
                    </div>
                </div>

                <div id="step4" class="step-content bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                    <h3 class="text-xl font-bold text-brandBlue mb-2">Upload Required Documents</h3>
                    <p class="text-sm text-gray-600 mb-6">Please upload clear, readable copies (JPG, PNG, PDF). Max size 5MB.</p>

                    <div class="space-y-4">
                        <div class="border border-gray-400 rounded-lg p-6">
                            <h4 class="font-bold mb-2">Proof of Age (Birth Certificate / ID): <span class="text-red-500">*</span></h4>
                            <div class="flex items-center">
                                <button class="bg-gray-200 border border-black text-black px-4 py-1 text-sm font-semibold rounded mr-3 hover:bg-gray-300">Choose File</button>
                                <span class="text-sm text-gray-500 italic">No file chosen</span>
                            </div>
                            <p class="text-xs text-gray-400 mt-2">Upload birth certificate or any valid government ID showing date of birth</p>
                        </div>

                        <div class="border border-gray-400 rounded-lg p-6">
                            <h4 class="font-bold mb-2">Barangay Certification / Residency: <span class="text-red-500">*</span></h4>
                            <div class="flex items-center">
                                <button class="bg-gray-200 border border-black text-black px-4 py-1 text-sm font-semibold rounded mr-3 hover:bg-gray-300">Choose File</button>
                                <span class="text-sm text-gray-500 italic">No file chosen</span>
                            </div>
                        </div>

                        <div class="border border-gray-400 rounded-lg p-6 flex flex-col items-center">
                            <h4 class="font-bold mb-4 w-full text-left">Thumbmark</h4>
                            <div class="mb-4">
                                <i class="fas fa-fingerprint text-6xl text-black"></i>
                            </div>
                            <button class="bg-brandBlue text-white font-bold py-2 px-6 rounded hover:bg-blue-900">Start Scanner</button>
                        </div>
                    </div>

                    <div class="mt-8 border border-gray-400 p-4 rounded flex items-center">
                        <input type="checkbox" class="w-5 h-5 mr-3">
                        <span class="text-sm text-gray-500 italic">This Certify That the Given Information is Verified by The Personel Incharge</span>
                    </div>
                </div>

                <div class="mt-8 flex justify-between">
                    <div class="flex gap-4">
                        <button type="button" class="bg-white border border-gray-400 text-black font-semibold py-3 px-8 rounded hover:bg-gray-50">Cancel</button>
                        <button type="button" class="bg-white border border-gray-400 text-black font-semibold py-3 px-8 rounded hover:bg-gray-50">Reset Form</button>
                    </div>
                    <div class="flex gap-4">
                        <button type="button" class="bg-white border border-black text-black font-semibold py-3 px-8 rounded hover:bg-gray-50 flex items-center">
                            <i class="far fa-save mr-2"></i> Save Draft
                        </button>
                        <button type="button" id="nextBtn" onclick="nextStep()" class="bg-brandBlue text-white font-bold py-3 px-8 rounded hover:bg-blue-900 flex items-center">
                            Next Step: Family <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>

            </form>
        </main>
    </div>

    <script>
        let currentStep = 1;
        const totalSteps = 4;
        const btnLabels = ["Next Step: Family", "Next Step: Association", "Next Step: Requirements", "Submit to Osca"];

        function updateUI() {
            // Update Progress Bar
            const percentage = (currentStep / totalSteps) * 100;
            document.getElementById('progressBar').style.width = percentage + '%';
            document.getElementById('stepText').innerText = `Step ${currentStep} of ${totalSteps}`;

            // Show/Hide Steps
            document.querySelectorAll('.step-content').forEach(el => el.classList.remove('active'));
            document.getElementById('step' + currentStep).classList.add('active');

            // Update Header Buttons Styling
            document.querySelectorAll('.step-btn').forEach(btn => {
                const step = parseInt(btn.dataset.step);
                if(step === currentStep) {
                    btn.className = "step-btn px-6 py-2 rounded-lg font-bold text-sm bg-dashboardBlue text-white";
                } else if (step < currentStep) {
                     btn.className = "step-btn px-6 py-2 rounded-lg font-bold text-sm bg-green-600 text-white"; // Completed
                } else {
                    btn.className = "step-btn px-6 py-2 rounded-lg font-bold text-sm bg-gray-100 text-gray-500";
                }
            });

            // Update Next Button Text
            const btn = document.getElementById('nextBtn');
            btn.innerHTML = `${btnLabels[currentStep - 1]} <i class="fas fa-arrow-right ml-2"></i>`;
            
            // If last step, change button style slightly to indicate submission
            if(currentStep === 4) {
                 btn.classList.remove('bg-brandBlue');
                 btn.classList.add('bg-green-700');
            } else {
                 btn.classList.add('bg-brandBlue');
                 btn.classList.remove('bg-green-700');
            }
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                currentStep++;
                updateUI();
                window.scrollTo(0, 0); // Scroll to top
            } else {
                alert("Application Submitted Successfully!");
                window.location.href = "application_list.php"; // Redirect
            }
        }

        // Logic for Step 2: Add Family Member
        let familyCount = 0;
        function addFamilyMember() {
            familyCount++;
            const container = document.getElementById('familyContainer');
            
            const html = `
            <div class="border border-gray-300 rounded-lg p-6 bg-gray-50 relative animate-fade-in" id="fam_${familyCount}">
                <div class="flex items-center mb-4">
                    <input type="checkbox" class="w-5 h-5 mr-3">
                    <h4 class="font-bold text-lg">Family Member ${familyCount}</h4>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                    <div>
                        <label class="block text-sm font-bold mb-1">First Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Juan" class="w-full border border-gray-400 rounded p-2">
                    </div>
                    <div>
                        <label class="block text-sm font-bold mb-1">Middle Name/Initial <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Santos" class="w-full border border-gray-400 rounded p-2">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                    <div>
                        <label class="block text-sm font-bold mb-1">Last Name <span class="text-red-500">*</span></label>
                        <input type="text" placeholder="Cruz" class="w-full border border-gray-400 rounded p-2">
                    </div>
                    <div>
                        <label class="block text-sm font-bold mb-1">Extension</label>
                        <input type="text" placeholder="Jr." class="w-full border border-gray-400 rounded p-2">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-bold mb-1">Relationship <span class="text-red-500">*</span></label>
                        <input type="text" class="w-full border border-gray-400 rounded p-2">
                    </div>
                     <div>
                        <label class="block text-sm font-bold mb-1">Age <span class="text-red-500">*</span></label>
                        <input type="text" class="w-full border border-gray-400 rounded p-2">
                    </div>
                     <div>
                        <label class="block text-sm font-bold mb-1">Monthly Salary <span class="text-red-500">*</span></label>
                        <input type="text" class="w-full border border-gray-400 rounded p-2">
                    </div>
                </div>
            </div>
            `;
            container.insertAdjacentHTML('beforeend', html);
        }

        // Helper to check the box when clicking the card in Step 3
        function toggleCheck(card) {
            const checkbox = card.querySelector('input[type="checkbox"]');
            checkbox.checked = !checkbox.checked;
            if(checkbox.checked) {
                card.classList.add('bg-blue-50', 'border-blue-500');
            } else {
                card.classList.remove('bg-blue-50', 'border-blue-500');
            }
        }

        // Initialize
        updateUI();
    </script>

</body>
</html>