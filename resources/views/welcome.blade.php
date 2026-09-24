<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Love Edition</title>

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
<body class="min-h-screen bg-gradient-to-br from-pink-100 via-rose-50 to-red-100 flex items-center justify-center p-4">

    <!-- Login Card Container -->
    <div class="w-full max-w-md bg-white/80 backdrop-blur-md p-8 rounded-3xl shadow-xl border border-rose-200 text-gray-800">
        
        <!-- Header / Logo Area -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-rose-500 text-white rounded-full shadow-lg shadow-rose-300 mb-3 animate-pulse">
                <!-- Heart Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-rose-600">ចូលប្រើប្រាស់</h1>
            <p class="text-xs text-rose-400 mt-1">សូមស្វាគមន៍មកកាន់ទីកន្លែងពោរពេញដោយក្តីស្រឡាញ់ 💖</p>
        </div>

        <!-- Date & Time Display Section -->
        <div class="bg-rose-50/80 border border-rose-100 rounded-2xl p-3 mb-6 text-center shadow-inner">
            <p id="current-date" class="text-xs font-medium text-rose-500 uppercase tracking-wider mb-0.5">ថ្ងៃអាទិត្យ ទី០៦ ខែកញ្ញា ឆ្នាំ២០២៦</p>
            <p id="current-time" class="text-2xl font-bold text-rose-600 tracking-wider">12:41:24 PM</p>
        </div>

        <!-- Login Form -->
        <form action="#" method="POST" class="space-y-4">
            <!-- Email Input -->
            <div>
                <label for="email" class="block text-xs font-semibold text-gray-600 mb-1">អ៊ីមែល / Email</label>
                <div class="relative">
                    <input type="email" id="email" name="email" required 
                        value="your.email@example.com" 
                        placeholder="example@love.com"
                        class="w-full px-4 py-2.5 rounded-xl bg-white border border-rose-200 focus:border-rose-500 focus:ring-2 focus:ring-rose-200 outline-none text-sm transition text-gray-700">
                </div>
            </div>

            <!-- Password Input -->
            <div>
                <label for="password" class="block text-xs font-semibold text-gray-600 mb-1">លេខសម្ងាត់ / Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" required placeholder="••••••••"
                        class="w-full px-4 py-2.5 rounded-xl bg-white border border-rose-200 focus:border-rose-500 focus:ring-2 focus:ring-rose-200 outline-none text-sm transition text-gray-700">
                </div>
            </div>

            <!-- Remember & Forgot Password -->
            <div class="flex items-center justify-between text-xs pt-1">
                <label class="flex items-center text-gray-600 cursor-pointer">
                    <input type="checkbox" class="rounded border-rose-300 text-rose-500 focus:ring-rose-400 mr-2">
                    ចងចាំខ្ញុំ
                </label>
                <a href="#" class="text-rose-500 hover:underline font-medium">ភ្លេចលេខសម្ងាត់?</a>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                class="w-full py-3 px-4 bg-gradient-to-r from-pink-500 to-rose-500 hover:from-pink-600 hover:to-rose-600 text-white font-semibold rounded-xl shadow-md shadow-rose-200 transition duration-200 text-sm mt-2 flex items-center justify-center gap-2">
                <span>ចូលប្រព័ន្ធ</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </form>

        <!-- Footer Note -->
        <p class="text-center text-xs text-gray-400 mt-6">
            បង្កើតឡើងដោយក្តីស្រឡាញ់ 🌹
        </p>
    </div>

    <!-- Live Date and Time Script -->
    <script>
        function updateDateTime() {
            const now = new Date();
            
            // Format Time (12-hour format with AM/PM)
            let hours = now.getHours();
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;
            
            const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;
            
            // Khmer Date Formatter
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const dateString = now.toLocaleDateString('km-KH', options);

            document.getElementById('current-time').textContent = timeString;
            document.getElementById('current-date').textContent = dateString;
        }

        // Update time every second
        setInterval(updateDateTime, 1000);
        updateDateTime(); // Initial call
    </script>
</body>
</html>