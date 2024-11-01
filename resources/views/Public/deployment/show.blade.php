<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/dc88ec6997.js" crossorigin="anonymous"></script>
</head>
<body class="bg-gradient-to-b from-main-bg to-secondary-bg min-h-screen">
    <section class="my-16">
        <div class="flex flex-col space-y-8 xl:px-56 lg:px-8 md:px-4">
            <div>
                <h1 class="text-5.5xl text-slate-100 font-semisemibold">Tambakrejo, Semarang<br>Jawa Tengah</h1>
            </div>
            <div class="flex flex-row h-72">
                <div class="w-5/12">
                    <div class="w-full h-full flex flex-col space-y-1 justify-center items-center rounded-xl" style="background-color: rgba(9, 0, 0, 0.20);">
                        <div class="flex flex-row justify-center items-end space-x-2">
                            <i class="fa-solid fa-cloud-sun-rain fa-4x" style="color: #ffffff;"></i>
                            <p class="text-center text-5xl font-semibold text-white">28°C</p>
                        </div>
                        <p class="text-center text-xl font-light text-white">Hujan Sedang</p>
                    </div>                    
                </div>
                <div class="w-full pl-8">
                    <div class="mx-auto bg-black opacity-20 w-full h-full rounded-xl">
                        <p class="inline-block">WOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOPPPPPPPPPPPPPPPPPPPPP</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col space-y-6 px-20 py-14 w-full bg-white rounded-xl" style="background-color: rgba(255, 255, 255, 0.39);">
                <div class="w-full h-80 rounded-xl px-12 py-6" style="background-color: rgba(9, 0, 0, 0.20);">
                    <p class="text-slate-100 text-2xl absolute">Tinggi Pasang Surut</p>
                    <div class="flex justify-center items-center h-full">
                        <p class="text-white text-7xl font-semibold">279.20 Cm</p>
                    </div>
                </div>
                <div class="flex flex-row space-x-6">
                    <div class="w-full h-80 rounded-xl px-12 py-6" style="background-color: rgba(9, 0, 0, 0.20);">
                        <p class="text-slate-100 text-2xl absolute">Angin</p>
                        <div class="flex justify-center items-center h-full">
                            <p class="text-white text-6xl font-semibold">18 Km/j</p>
                        </div>
                    </div>
                    <div class="w-full h-80 rounded-xl px-12 py-6" style="background-color: rgba(9, 0, 0, 0.20);">
                        <p class="text-slate-100 text-2xl absolute">Indeks UV</p>
                        <div class="flex justify-center items-center h-full">
                            <p class="text-white text-6xl font-semibold">Rendah</p>
                        </div>
                    </div>
                </div>
                <div class="w-full h-80 rounded-xl" style="background-color: rgba(9, 0, 0, 0.20);">
                    
                </div>
            </div>            
        </div>
    </section>
</body>

</html>

