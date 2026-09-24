<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Memories - Love Edition 💖</title>

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
<body class="bg-rose-50/50 font-sans antialiased text-gray-800">

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
                        <p class="text-[11px] text-rose-300/70">គ្រប់គ្រងអនុស្សាវរីយ៍</p>
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
                    
                    <a href="{{ route('memories.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-2xl bg-gradient-to-r from-pink-500 to-rose-500 text-white font-medium text-sm shadow-lg shadow-rose-900/40">
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

        <!-- Main Body Area -->
        <div class="flex-1 flex flex-col min-w-0">
            
            <!-- Top Navbar -->
            <header class="bg-white/80 backdrop-blur-md border-b border-rose-100 px-6 py-4 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sticky top-0 z-40">
                <div>
                    <h1 class="text-2xl font-bold text-rose-800 flex items-center gap-2">
                        <span>អាល់ប៊ុមរូបថតអនុស្សាវរីយ៍</span>
                        <span class="text-xl">📸</span>
                    </h1>
                    <p class="text-xs text-rose-400 mt-0.5">ប្រមូលផ្តុំ និងរៀបចំរាល់ពេលវេលាដ៏មានន័យទាំងអស់នៅទីនេះ</p>
                </div>

                <div class="flex items-center gap-3">
                    <button onclick="openGallery()" class="px-4 py-2.5 bg-gradient-to-r from-rose-500 to-pink-500 hover:from-rose-600 hover:to-pink-600 text-white rounded-xl text-xs font-semibold shadow-md shadow-rose-200 transition flex items-center gap-2 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        មើល Album ទាំងអស់
                    </button>
                    
                    <a href="{{ route('dashboard') }}" class="px-4 py-2.5 bg-rose-50 border border-rose-200 text-rose-700 hover:bg-rose-100 rounded-xl text-xs font-semibold transition">
                        ⬅ Dashboard
                    </a>
                </div>
            </header>
            </div class="bg-grdient-to-b from-rose-400 to-pink-500 p-4 text-center text-white relatve">
            <h3 class=fonot-bold text-lg flex items

            <!-- Main Dashboard Content -->
            <main class="p-6 lg:p-8 flex-1 space-y-8 max-w-[1600px] w-full mx-auto">
                
                </div>
            </main>
        </div>
    </div>

    <!-- 🌸 Modal សម្រាប់បង្ហាញ Album រូបថត (ធំពេញអេក្រង់ ១០០%) -->
    <div id="gallery-modal" class="fixed inset-0 bg-black/80 backdrop-blur-md hidden items-center justify-center z-50 transition-all duration-300" onclick="closeGallery()">
        <div class="bg-white w-screen h-screen p-6 lg:p-10 flex flex-col shadow-2xl relative overflow-hidden" onclick="event.stopPropagation()">
            
            <!-- Header -->
            <div class="flex justify-between items-center mb-6 border-b border-rose-100 pb-4 shrink-0">
                <div>
                    <h3 class="text-2xl font-bold text-rose-700 flex items-center gap-2">
                        អនុស្សាវរីយ៍ស្អាតៗ 📸
                    </h3>
                    <p class="text-sm text-rose-400 mt-1">រូបថតដែលបានរក្សាទុកទាំងអស់</p>
                </div>
                <!-- ប៊ូតុងបិទ -->
                <button onclick="closeGallery()" class="w-12 h-12 rounded-full bg-rose-50 text-rose-500 hover:bg-rose-100 flex items-center justify-center font-bold text-2xl transition cursor-pointer shadow-sm">
                    &times;
                </button>
            </div>
            
            <!-- Grid រូបថត -->
            <div class="flex-1 overflow-y-auto pr-2 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6">
                <div class="overflow-hidden rounded-2xl group shadow-md bg-rose-50/50 h-64 cursor-pointer relative" onclick="openBigImage('https://picsum.photos/1200/800?random=1', 'រូបថត ១', '2025')">
                    <img src="https://picsum.photos/600/600?random=1" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <div class="overflow-hidden rounded-2xl group shadow-md bg-rose-50/50 h-64 cursor-pointer relative" onclick="openBigImage('https://picsum.photos/1200/800?random=2', 'រូបថត ២', '2025')">
                    <img src="https://picsum.photos/600/600?random=2" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <div class="overflow-hidden rounded-2xl group shadow-md bg-rose-50/50 h-64 cursor-pointer relative" onclick="openBigImage('https://picsum.photos/1200/800?random=3', 'រូបថត ៣', '2025')">
                    <img src="https://picsum.photos/600/600?random=3" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <div class="overflow-hidden rounded-2xl group shadow-md bg-rose-50/50 h-64 cursor-pointer relative" onclick="openBigImage('https://picsum.photos/1200/800?random=4', 'រូបថត ៤', '2025')">
                    <img src="https://picsum.photos/600/600?random=4" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <div class="overflow-hidden rounded-2xl group shadow-md bg-rose-50/50 h-64 cursor-pointer relative" onclick="openBigImage('https://picsum.photos/1200/800?random=5', 'រូបថត ៥', '2026')">
                    <img src="https://picsum.photos/600/600?random=5" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>

                <div class="overflow-hidden rounded-2xl group shadow-md bg-rose-50/50 h-64 cursor-pointer relative" onclick="openBigImage('https://picsum.photos/1200/800?random=6', 'រូបថត ៦', '2026')">
                    <img src="https://picsum.photos/600/600?random=6" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                </div>
            </div>

        </div>
    </div>

    <!-- 🔍 Modal សម្រាប់បង្ហាញរូបថត 1 សន្លឹកពេញអេក្រង់ (Preview Modal) -->
    <div id="image-modal" class="fixed inset-0 bg-black/80 backdrop-blur-sm hidden items-center justify-center z-[60] p-4" onclick="closeBigImage()">
        <div class="relative max-w-5xl w-full flex flex-col items-center" onclick="event.stopPropagation()">
            <button onclick="closeBigImage()" class="absolute -top-10 right-0 text-white text-3xl font-bold hover:text-rose-400 transition cursor-pointer">&times;</button>
            <img id="modal-img" src="" class="max-h-[85vh] w-auto rounded-2xl shadow-2xl object-contain border-2 border-white/20">
            <div class="mt-4 text-center text-white">
                <h3 id="modal-title" class="text-lg font-bold text-rose-200"></h3>
                <p id="modal-date" class="text-xs text-gray-300 mt-1"></p>
            </div>
        </div>
    </div>
    

    <!-- JavaScript Functions -->
    <script>
        function openGallery() {
            const modal = document.getElementById('gallery-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeGallery() {
            const modal = document.getElementById('gallery-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function openBigImage(imageSrc, title, date) {
            document.getElementById('modal-img').src = imageSrc;
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-date').textContent = date;
            
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