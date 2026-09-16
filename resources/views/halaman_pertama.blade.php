<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        <!-- Hero / Home Section -->
        <section class="min-h-screen flex items-center pt-12 pb-12 px-6 sm:px-12 lg:px-16 bg-gray-900">
            <div class="container mx-auto">
                <div class="flex flex-wrap items-center">
                    <!-- Image Left -->
                    <div class="w-full lg:w-5/12 mb-12 lg:mb-0 lg:mt-10 flex justify-center lg:justify-start">
                        <div class="relative w-64 h-80 sm:w-80 sm:h-96 lg:w-100 lg:h-125">
                            
                                <!-- LAYER 1: Background & Foto Dasar -->
                                <div class="absolute inset-0 bg-gray-200 rounded-xl overflow-hidden shadow-[0_0_20px_rgba(0,230,168,0.2)]">
                                    <img src="{{asset('img/geometric-background-colorful-gradient.png')}}" alt="Geometric Shape" class="absolute inset-0 w-full h-full object-cover mix-blend-screen opacity-90">

                                    <img src="{{asset('img/seftian.png')}}" alt="Seftian Ainul Yaqin')}}" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-[135%] sm:w-[140%] lg:w-[145%] h-auto max-w-none origin-bottom scale-105">
                                </div>
                                <img src="{{asset('img/seftian.png')}}" alt="Seftian Ainul Yaqin Overlay" class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-[135%] sm:w-[140%] lg:w-[145%] h-auto max-w-none z-10 origin-bottom scale-105 drop-shadow-2xl pointer-events-none [clip-path:polygon(30%_0%,100%_0%,100%_100%,30%_50%)]">
                            </div>
                        </div>
                    
                    <!-- Text Right -->
                    <div class="w-full lg:w-7/12 lg:pl-10">
                        <p class="text-gray-300 text-lg mb-2">Making a modern website with,</p>
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-green-700 mb-6 uppercase tracking-wider">
                            Seftian Ainul Yaqin
                        </h1>
                        
                        <p class="text-lg sm:text-xl text-gray-300 mb-6 max-w-2xl">
                            Frontend Developer & UI/UX Designer specialized in building sleek, modern, and responsive web experiences
                        </p>
                        
                        <p class="text-base sm:text-lg text-gray-400 mb-8 max-w-2xl leading-relaxed">
                            Saya membangun situs web modern, interaktif, dan responsif dengan fokus pada pengalaman pengguna yang terbaik.
                        </p>

                        <div class="flex flex-col gap-2 mb-8 text-gray-300">
                            <div class="flex items-center gap-2">
                                <img src="{{asset('img/check.png')}}" alt="Check" class="w-5 h-5 object-contain">
                                Available for Hire
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400"><img src="{{asset('img/light.png')}}" alt="Lightningt" class="w-5 h-5 object-contain"></span>
                                Fast for Work
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center gap-4">
                            <button onclick="openWhatsApp()" class="bg-green-700 text-black font-bold py-3 px-8 rounded-md hover:bg-teal-400 transition shadow-lg text-center cursor-pointer">
                                Contact Me
                            </button>

                            <button onclick="downloadCV()" class="border-2 border-white text-white font-bold py-3 px-8 rounded-md hover:bg-white hover:text-black transition inline-flex items-center justify-center gap-2 cursor-pointer">
                                <img src="{{asset('img/download.png')}}" alt="Download" class="w-5 h-5 shrink-0 filter invert">
                                <span>Download CV</span>
                            </button>
                            
                            <!-- Social Icons -->
                            <div class="flex space-x-4 ml-auto mt-6 lg:mt-0 bg-white px-4 py-2 rounded-lg">
                                <a href="#" class="text-black hover:text-cyan-accent"><img src="{{asset('img/instagram.png')}}" alt="Instagram" class="w-6 h-6 object-contain"></a>
                                <a href="#" class="text-black hover:text-cyan-accent"><img src="{{asset('img/github.png')}}" alt="GitHub" class="w-6 h-6 object-contain"></a>
                                <a href="#" class="text-black hover:text-cyan-accent"><img src="{{asset('img/tik-tok.png')}}" alt="TikTok" class="w-6 h-6 object-contain"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Close Hero Section -->
    </body>
</html>