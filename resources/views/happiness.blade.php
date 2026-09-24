<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Happiness - Love Edition 💖</title>

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
        <aside class="w-full lg:w-72 bg-gradient-to-b from-rose-900 via-rose-950 to-pink-950 text-white shrink-0 border-r border-rose-800/50 flex flex-col justify-between">
            <div>
                <!-- Brand / Logo -->
                <div class="p-6 border-b border-rose-800/40 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-2xl bg-rose-500/20 border border-rose-400/30 flex items-center justify-center text-rose-300 shadow-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current animate-pulse" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="font-bold text-lg text-rose-100">Love Space 💖</h2>
                        <p class="text-[11px] text-rose-300/70">កម្រិតក្ដីសុខ</p>
                    </div>
                </div>

                <!-- Navigation Links -->
                <nav class="p-4 space-y-1.5">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl text-rose-200/80 hover:bg-rose-800/40 hover:text-white transition text-sm">
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

                    <a href="{{ route('happiness.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-gradient-to-r from-pink-500 to-rose-500 text-white font-medium text-sm shadow-lg shadow-rose-900/40">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>កម្រិតក្ដីសុខ (Happiness)</span>
                    </a>
                </nav>
            </div>

            <!-- Profile / Bottom Info -->
            <div class="p-4 border-t border-rose-800/40">
                <div class="bg-rose-900/40 rounded-2xl p-3 flex items-center gap-3 border border-rose-800/30">
                    <div class="w-9 h-9 rounded-full bg-rose-400/30 flex items-center justify-center text-white font-bold text-xs">
                        Us
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-rose-100">រវាងយើងទាំងពីរ</p>
                        <p class="text-[10px] text-rose-300/60">Forever & Always</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col min-w-0">
            
            <!-- Top Navbar -->
            <header class="bg-white/80 backdrop-blur-md border-b border-rose-100 px-6 py-4 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sticky top-0 z-40">
                <div>
                    <h1 class="text-2xl font-bold text-rose-800 flex items-center gap-2">
                        <span>កម្រិតក្ដីសុខរបស់យើង</span>
                        <span class="text-xl">💖</span>
                    </h1>
                    <p class="text-xs text-rose-400 mt-0.5">សន្ទស្សន៍សេចក្តីសុខ និងស្នាមញញឹមរៀងរាល់ថ្ងៃ</p>
                </div>

                <a href="{{ route('dashboard') }}" class="px-4 py-2.5 bg-rose-50 border border-rose-200 text-rose-700 hover:bg-rose-100 rounded-xl text-xs font-semibold transition">
                    ⬅ Dashboard
                </a>
            </header>

            <!-- Main Dashboard Content -->
            <main class="p-6 lg:p-8 flex-1 space-y-8 max-w-[1600px] w-full mx-auto">
                
                <!-- Progress Card -->
                <div class="bg-white p-6 rounded-3xl border border-rose-100 shadow-sm text-center">
                    <h2 class="text-lg font-bold text-rose-700">កម្រិតក្ដីសុខសរុប</h2>
                    <p class="text-5xl font-black text-rose-600 my-4">100%</p>
                    <div class="w-full bg-rose-100 h-4 rounded-full overflow-hidden max-w-xl mx-auto">
                        <div class="bg-gradient-to-r from-pink-500 to-rose-600 h-full w-full animate-pulse"></div>
                    </div>
                    <p class="text-xs text-rose-400 mt-4">គ្មានអ្វីអាចកាត់ផ្ដាច់ក្ដីសុខ និងស្នាមញញឹមរបស់យើងបានឡើយ ✨</p>
                </div>

                <!-- 🌸 ផ្នែករូបថត + អក្សរសាររៀបរាប់ពីក្តីសុខ -->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4">ហេតុផលដែលធ្វើឱ្យយើងមានក្តីសុខ 💌</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- Block ទី១ -->
                        <div onclick="openBigImage('https://picsum.photos/1200/800?random=10', 'រាល់ពេលដែលបានឃើញស្នាមញញឹម 🌸', 'គ្រប់ពេលដែលបានឃើញអូនញញឹម គឺជាកម្លាំងចិត្ត និងជាក្តីសុខដ៏ធំបំផុតក្នុងជីវិតរបស់បង។')" 
                             class="bg-white rounded-3xl border border-rose-100 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 group cursor-pointer">
                            <div class="h-52 overflow-hidden relative bg-rose-50">
                                <img src="https://picsum.photos/600/400?random=10" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                <span class="absolute top-3 right-3 bg-black/40 backdrop-blur-md text-white text-[10px] px-2.5 py-1 rounded-full">Smile</span>
                            </div>
                            <div class="p-5">
                                <span class="px-3 py-1 text-[11px] font-semibold bg-rose-100 text-rose-600 rounded-full">ស្នាមញញឹម 🌸</span>
                                <h4 class="font-bold text-gray-800 mt-3 text-base">រាល់ពេលដែលបានឃើញស្នាមញញឹម</h4>
                                <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                                    គ្រប់ពេលដែលបានឃើញអូនញញឹម គឺជាកម្លាំងចិត្ត និងជាក្តីសុខដ៏ធំបំផុតក្នុងជីវិតរបស់បង។
                                </p>
                            </div>
                        </div>

                        <!-- Block ទី២ -->
                        <div onclick="openBigImage('https://picsum.photos/1200/800?random=11', 'ការធ្វើដំណើរទៅកាន់កន្លែងថ្មីៗ ✈️', 'រាល់ការដើរលេងជាមួយគ្នាបង្កើតបានជាការចងចាំល្អៗ និងបទពិសោធន៍ដែលមិនអាចបំភ្លេចបាន។')" 
                             class="bg-white rounded-3xl border border-rose-100 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 group cursor-pointer">
                            <div class="h-52 overflow-hidden relative bg-rose-50">
                                <img src="https://picsum.photos/600/400?random=11" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                <span class="absolute top-3 right-3 bg-black/40 backdrop-blur-md text-white text-[10px] px-2.5 py-1 rounded-full">Travel</span>
                            </div>
                            <div class="p-5">
                                <span class="px-3 py-1 text-[11px] font-semibold bg-pink-100 text-pink-600 rounded-full">ការធ្វើដំណើរកម្សាន្ត ✈️</span>
                                <h4 class="font-bold text-gray-800 mt-3 text-base">ការធ្វើដំណើរទៅកាន់កន្លែងថ្មីៗ</h4>
                                <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                                    រាល់ការដើរលេងជាមួយគ្នាបង្កើតបានជាការចងចាំល្អៗ និងបទពិសោធន៍ដែលមិនអាចបំភ្លេចបាន។
                                </p>
                            </div>
                        </div>

                        <!-- Block ទី៣ -->
                        <div onclick="openBigImage('https://picsum.photos/1200/800?random=12', 'ការទទួលទានអាហារ និងកាហ្វេជាមួយគ្នា ☕', 'គ្រាន់តែបានអង្គុយញ៉ាំបាយ និងនិយាយគ្នាលេងជារៀងរាល់ថ្ងៃ ក៏ជាក្តីសុខដ៏សាមញ្ញប៉ុន្តែមានន័យខ្លាំងណាស់។')" 
                             class="bg-white rounded-3xl border border-rose-100 overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 group cursor-pointer">
                            <div class="h-52 overflow-hidden relative bg-rose-50">
                                <img src="https://picsum.photos/600/400?random=12" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                <span class="absolute top-3 right-3 bg-black/40 backdrop-blur-md text-white text-[10px] px-2.5 py-1 rounded-full">Date</span>
                            </div>
                            <div class="p-5">
                                <span class="px-3 py-1 text-[11px] font-semibold bg-amber-100 text-amber-600 rounded-full">ពេលវេលាពិសេស ☕</span>
                                <h4 class="font-bold text-gray-800 mt-3 text-base">ការទទួលទានអាហារ និងកាហ្វេជាមួយគ្នា</h4>
                                <p class="text-xs text-gray-500 mt-2 leading-relaxed">
                                    គ្រាន់តែបានអង្គុយញ៉ាំបាយ និងនិយាយគ្នាលេងជារៀងរាល់ថ្ងៃ ក៏ជាក្តីសុខដ៏សាមញ្ញប៉ុន្តែមានន័យខ្លាំងណាស់។
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- 🔍 Modal សម្រាប់បង្ហាញរូបថត 1 សន្លឹកពេញអេក្រង់ (Preview Modal) -->
    <div id="image-modal" class="fixed inset-0 bg-black/80 backdrop-blur-sm hidden items-center justify-center z-[60] p-4" onclick="closeBigImage()">
        <div class="relative max-w-4xl w-full flex flex-col items-center" onclick="event.stopPropagation()">
            <button onclick="closeBigImage()" class="absolute -top-10 right-0 text-white text-3xl font-bold hover:text-rose-400 transition cursor-pointer">&times;</button>
            <img id="modal-img" src="" class="max-h-[75vh] w-auto rounded-2xl shadow-2xl object-contain border-2 border-white/20">
            <div class="mt-4 text-center text-white px-4">
                <h3 id="modal-title" class="text-lg font-bold text-rose-200"></h3>
                <p id="modal-desc" class="text-xs text-gray-300 mt-1 max-w-xl mx-auto leading-relaxed"></p>
            </div>
        </div>
    </div>

    <!-- JavaScript Functions -->
    <script>
        function openBigImage(imageSrc, title, desc) {
            document.getElementById('modal-img').src = imageSrc;
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-desc').textContent = desc;
            
            const modal = document.getElementById('image-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeBigImage() {
            const modal = document.getElementById('image-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    </script>

</body>
</html>