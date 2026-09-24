<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Love Edition 💖</title>

    <!-- Google Fonts (Kantumruuy Pro) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruuy+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Kantumruuy Pro', sans-serif; }
    </style>
</head>
<body class="bg-rose-50/60 font-sans antialiased text-gray-800">

    <div class="min-h-screen flex flex-col lg:flex-row">
        
        <!-- Sidebar Navigation -->
        <aside class="w-full lg:w-64 bg-gradient-to-b from-rose-900 via-rose-950 to-pink-950 text-white shrink-0 border-r border-rose-800/50">
            <!-- Brand / Logo -->
            <div class="p-6 border-b border-rose-800/40 flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-rose-500/20 border border-rose-400/30 flex items-center justify-center text-rose-300 shadow-inner">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current animate-pulse" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <h2 class="font-bold text-lg text-rose-100">Love 💖</h2>
                    <p class="text-[10px] text-rose-300/70">Dashboard Space</p>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-2">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-gradient-to-r from-pink-500 to-rose-500 text-white font-medium text-sm shadow-lg shadow-rose-900/40">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>ផ្ទាំងគ្រប់គ្រង (Dashboard)</span>
                </a>
                
                <a href="{{ route('memories.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-rose-200/80 hover:bg-rose-800/40 hover:text-white transition text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span>ការចងចាំរវាងយើង (Memories)</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-rose-200/80 hover:bg-rose-800/40 hover:text-white transition text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>ការណាត់ជួប (Dates)</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-rose-200/80 hover:bg-rose-800/40 hover:text-white transition text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    </svg>
                    <span>ការកំណត់ (Settings)</span>
                </a>
            </nav>
        </aside>

        <!-- Main Body Area -->
        <div class="flex-1 flex flex-col">
            
            <!-- Top Navbar -->
            <header class="bg-white/80 backdrop-blur-md border-b border-rose-100 px-6 py-4 flex flex-col md:flex-row justify-between items-center gap-4">
                <div>
                    <h1 class="text-xl font-bold text-rose-700">ផ្ទាំងគ្រប់គ្រងក្តីស្រឡាញ់ 🌹</h1>
                    <p class="text-xs text-rose-400">សូមស្វាគមន៍ត្រឡប់មកវិញ! រីករាយថ្ងៃថ្មីដែលពេញដោយស្នាមញញឹម</p>
                </div>

                <!-- Live Date & Time -->
                <div class="flex items-center gap-4">
                    <div class="bg-rose-50 border border-rose-200/70 px-4 py-2 rounded-2xl text-center shadow-xs">
                        <span id="current-date" class="text-xs font-medium text-rose-500 block">ថ្ងៃអាទិត្យ ទី០៦ ខែកញ្ញា ឆ្នាំ២០២៦</span>
                        <span id="current-time" class="text-sm font-bold text-rose-700 block">12:41:24 PM</span>
                    </div>

                    <!-- Profile Info -->
                    <div class="flex items-center gap-3 pl-2 border-l border-rose-200">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-pink-500 to-rose-400 p-0.5 shadow-md">
                            <div class="w-full h-full bg-white rounded-full flex items-center justify-center font-bold text-rose-600 text-sm">
                                💖
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="p-6 flex-1 space-y-6">
                
                <!-- Stat Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white p-6 rounded-3xl border border-rose-100 shadow-sm relative overflow-hidden">
                        <div class="absolute -right-4 -bottom-4 w-20 h-20 bg-pink-100 rounded-full opacity-50"></div>
                        <p class="text-xs font-semibold text-rose-400 uppercase tracking-wider">ចំនួនថ្ងៃដែលស្រឡាញ់គ្នា</p>
                        <p class="text-3xl font-extrabold text-rose-600 mt-2">
                            <span id="my-custom-days">0</span> 
                            <span class="text-sm font-normal text-rose-400">ថ្ងៃ</span>
                        </p>
                        <p class="text-xs text-emerald-500 mt-2 font-medium">+1 ថ្ងៃជារៀងរាល់ថ្ងៃ 💖</p>
                    </div>

                    <!-- Card 2 -->
                    <a href="{{ route('memories.index') }}" class="bg-white p-6 rounded-3xl border border-rose-100 shadow-sm relative overflow-hidden hover:shadow-md hover:border-rose-300 transition-all duration-200 group block">
                        <div class="absolute -right-4 -bottom-4 w-20 h-20 bg-rose-100 rounded-full opacity-50 group-hover:scale-110 transition-transform"></div>
                        <p class="text-xs font-semibold text-rose-400 uppercase tracking-wider">រូបថតអនុស្សាវរីយ៍</p>
                        <p class="text-3xl font-extrabold text-rose-600 mt-2">850 <span class="text-sm font-normal text-rose-400">សន្លឹក</span></p>
                        <p class="text-xs text-rose-400 mt-2 flex items-center gap-1 group-hover:text-rose-600">
                            ចូលមើល Album ពេញលេញ 📸 <span class="transition-transform group-hover:translate-x-1">➔</span>
                        </p>
                    </a>

                    <!-- Card 3 -->
                    <a href="{{ route('happiness.index') }}" class="bg-white p-6 rounded-3xl border border-rose-100 shadow-sm relative overflow-hidden hover:shadow-md hover:border-rose-300 transition-all duration-200 group block">
                        <div class="absolute -right-4 -bottom-4 w-20 h-20 bg-red-100 rounded-full opacity-50 group-hover:scale-110 transition-transform"></div>
                        <p class="text-xs font-semibold text-rose-400 uppercase tracking-wider">កម្រិតក្ដីសុខ</p>
                        <p class="text-3xl font-extrabold text-rose-600 mt-2">100%</p>
                        <p class="text-xs text-rose-500 mt-2 font-medium flex items-center gap-1 group-hover:text-rose-600">
                            ពេញលេញជានិច្ច ញញឹមជារៀងរាល់ថ្ងៃ 😊 <span class="transition-transform group-hover:translate-x-1">➔</span>
                        </p>
                    </a>
                    </div>
                <div class="max-w-sm rounded-2xl overflow-hidden bg-white shadow-lg border border-rose-100">
    <!-- Header ផ្នែកខាងលើ (កែសម្រួលឱ្យមានតែមួយ) -->
    <div class="bg-gradient-to-r from-rose-400 to-pink-500 p-4 text-center text-white relative">
        <h3 class="font-bold text-lg flex items-center justify-center gap-2">
            🎂 Happy Birthday To You oun sml  🎉💖
        </h3>
        <p class="text-[12px] opacity-90 mt-1">ថ្ងៃពិសេសបំផុតសម្រាប់មនុស្សសំខាន់</p>
    </div>

    <!-- ផ្នែក Slider រូបភាព (ដោះស្រាយបញ្ហារូបភាព crop) -->
    <div class="relative group">
        <!-- Container សម្រាប់ Scroll -->
        <div class="h-64 flex overflow-x-auto snap-x snap-mandatory scrollbar-none scroll-smooth">
            
            <!-- រូបទី ១ (IMG_3120.JPG) -->
            <div class="w-full h-full flex-shrink-0 snap-center">
                <!-- សំខាន់៖ ប្រើ object-contain ដើម្បីបង្ហាញរូបភាពពេញ ដោយមិន Crop -->
                <img src="/images/IMG_3120.JPG" alt="Birthday Image" class="w-full h-full object-contain object-center bg-gray-50" />
            </div>

            <!-- រូបទី ២ (birthday.jpeg) -->
            <div class="w-full h-full flex-shrink-0 snap-center">
                <img src="/images/birthday.jpeg" alt="Birthday Detail" class="w-full h-full object-contain object-center bg-gray-50" />
            </div>
            <!-- រូបទី ៣ (IMG_4379.JPG-->
            <div class="w-full h-full flex-shrink-0 snap-center">                                                                       
                <img src="/images/IMG_4379.JPG" alt="Birthday Celebration" class="w-full h-full object-contain object-center bg-gray-50" />
            </div>      
            <!-- រូបទី ៣ (IMG_4373.JPG) -->
            <div class="w-full h-full flex-shrink-0 snap-center">
                <img src="/images/IMG_4373.JPG" alt="Birthday Celebration" class="w-full h-full object-contain object-center bg-gray-50" />
            </div>
        <!-- Badge ថ្ងៃខែ (នៅជាប់លើរូបភាព) -->
        <span class="absolute bottom-3 right-3 bg-black/50 backdrop-blur-sm text-white text-[11px] px-3 py-1 rounded-full border border-white/20 pointer-events-none">
            09 វិច្ឆិកា 2026
        </span>
    </div>

    <!-- ផ្នែកព័ត៌មានខាងក្រោម (Description) -->
    <div class="p-4">
        <div class="flex justify-between items-center mb-3">
            <span class="bg-rose-100 text-rose-600 text-[11px] px-2.5 py-1 rounded-full font-medium">Special Day ✨</span>
            <span class="text-xs text-rose-400 font-medium">Sky Bar / Café</span>
        </div>
        <h4 class="font-bold text-gray-800 text-lg mb-1">រីករាយថ្ងៃខួបកំណើតណាមអូន 💖</h4>
        <p class="text-xs text-gray-500 leading-relaxed">
            សូមជូនពរឱ្យអូនមានក្ដីសុខច្រើនៗ មានស្នាមញញឹមរាល់ថ្ងៃ និងសម្រេចគ្រប់បំណងប្រាថ្នា។ បងនឹងនៅក្បែរអូនរហូត!
        </p>
    </div>
</div>
           
                    <!-- Card ក្រឡោម Happy Birthday (កែឈ្មោះរូបថតទៅ birthday.jpeg រួចរាល់) -->
                    <div class="bg-white rounded-3xl border border-rose-100 shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden transform hover:-translate-y-1">
                    
                      
    <!-- Scripts -->
    <script>
        const startDate = new Date('2026-03-25'); 

        function updateDashboardData() {
            const now = new Date();
            
            const diffTime = Math.abs(now - startDate);
            const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
            
            const dayElement = document.getElementById('my-custom-days');
            if (dayElement) {
                dayElement.textContent = diffDays.toLocaleString();
            }

            let hours = now.getHours();
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;
            
            const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const dateString = now.toLocaleDateString('km-KH', options);

            document.getElementById('current-time').textContent = timeString;
            document.getElementById('current-date').textContent = dateString;
        }

        setInterval(updateDashboardData, 1000);
        updateDashboardData();
    </script>
</body>
</html>