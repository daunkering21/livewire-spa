<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-[#141424] to-[#0a0a15] flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-md bg-[#1e1e2e] rounded-2xl shadow-2xl border border-[#2c2c3e]">
        <div class="p-8">
            {{-- <div class="flex justify-center">
                <img src="{{ asset('img/carionid.png') }}" alt="Dashboard" class="h-20 w-auto">
            </div> --}}
            <h2 class="text-center text-white text-2xl font-semibold mb-4">LOGIN</h2>
            <p class="text-center text-gray-400 mb-6">Enter your username & password to login</p>
            
            <form action="{{ route('auth') }}" method="POST" enctype="multipart/form-data" >
            @csrf
                <div class="mb-4">
                    <div class="relative">
                        <input type="text" placeholder="Username" id="username" name="username" class="w-full pl-10 pr-4 py-3 bg-[#2c2c3e] border border-[#3a3a4e] rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-600" value="{{ old('name') }}"/>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                
                <div class="mb-6">
                    <div class="relative">
                        <input 
                            type="password" 
                            placeholder="Password" 
                            id="password" 
                            name="password"
                            class="w-full pl-10 pr-10 py-3 bg-[#2c2c3e] border border-[#3a3a4e] rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-purple-600"
                        />
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            
                        </svg>
                        <button 
                            type="button" 
                            id="togglePassword" 
                            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-white"
                        >
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off h-5 w-5"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" /><path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" /><path d="M3 3l18 18" /></svg>

                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="rememberMe" 
                            name="remember" 
                            class="hidden"
                        />
                        <label 
                            for="rememberMe" 
                            class="flex items-center cursor-pointer text-gray-400 hover:text-white"
                        >
                            <span 
                                class="w-5 h-5 inline-block mr-2 rounded border border-[#3a3a4e] bg-[#2c2c3e] flex-shrink-0 flex items-center justify-center"
                            >
                                <svg 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    class="h-4 w-4 text-white opacity-0 check-icon" 
                                    fill="none" 
                                    viewBox="0 0 24 24" 
                                    stroke="currentColor"
                                >
                                    <path 
                                        stroke-linecap="round" 
                                        stroke-linejoin="round" 
                                        stroke-width="3" 
                                        d="M5 13l4 4L19 7" 
                                    />
                                </svg>
                            </span>
                            Remember me
                        </label>
                    </div>
                </div>
                
                <button type="submit" class="w-full py-3 bg-gradient-to-r from-purple-600 to-blue-600 text-white rounded-lg hover:from-purple-700 hover:to-blue-700 transition duration-300 ease-in-out transform hover:scale-105">
                    Sign in
                </button>
            </form>
            
            <div class="text-center text-gray-400 mt-6 text-sm">
                © Copyright {{ Carbon\Carbon::now()->format('Y') }} Dashboard. All Rights Reserved.
            </div>
        </div>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const togglePasswordBtn = document.getElementById('togglePassword');
        
        togglePasswordBtn.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            this.innerHTML = type === 'password' 
                ? `<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off h-5 w-5"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" /><path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" /><path d="M3 3l18 18" /></svg>`
                : `<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye h-5 w-5"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>`;
        });

        const rememberMeCheckbox = document.getElementById('rememberMe');
        const checkIcon = document.querySelector('.check-icon');

        rememberMeCheckbox.addEventListener('change', function() {
            if (this.checked) {
                checkIcon.classList.remove('opacity-0');
            } else {
                checkIcon.classList.add('opacity-0');
            }
        });
    </script>
</body>
</html>