<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        <section style="background-image: url('{{ asset('img/forest.jpg') }}')" class="min-h-screen flex items-center bg-cover">
            <div class="container mx-auto px-12">
                <div class="flex items-center">
                    <div class="w-full lg:w-5/12 mb-12 lg:mb-0 lg:mt-10 flex justify-center lg:justify-start">
                        <div class="mr-12 relative w-64 h-80 sm:w-80 sm:h-96 lg:w-100 lg:h-125 overflow-visible">
                            <!-- Shape belakang tetap terlihat saat foto melewati batasnya. -->
                            <div aria-hidden="true" class="absolute top-8 left-1/2 h-[78%] w-[88%] -translate-x-1/2 rounded-full bg-green-500 shadow-[0_0_35px_rgba(34,197,94,0.35)]"></div>
                            <img src="{{asset('img/esteh.png')}}" alt="Es teh" class="absolute bottom-[-3%] left-1/2 z-10 w-[145%] -translate-x-1/2 h-auto max-w-none origin-bottom drop-shadow-2xl pointer-events-none">
                        </div>
                    </div>

                    <div class="w-full leading-relaxed pr-32 bg-blend-multiply">
                        <h1 class="text-4xl mb-2.5 font-bold text-green-500">ES TEH</h1>
                        <p class="font-normal text-green-900">Ini adalah sebuah minuman dengan cita rasa khas di tiap tegukan, minuman sejuta umat yang bisa kita temukan dimana-mana. <br>Sebuah minuman yang memberikan kenikmatan tiada tara dengan harga yang sangat terjangkau. Biasanya, harganya sekitar Dua Ribu samapai Lima Ribu Rupiah sahaja.</p>
                        <div class="flex flex-wrap items-center mt-12">
                            <button class="bg-green-700 py-2 px-4 rounded-lg font-medium text-white">Lihat Resep</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>