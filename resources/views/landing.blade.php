<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning Managemet Brainrot</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-black">
    {{-- NAVBAR --}}
    <nav class="sticky top-0 z-20 bg-black py-5 text-white items-center  flex justify-between px-32">
        <a href="" class="font-semibold border-2 py-1 border-t-red-600 border-b-pink-700   border-l-red-600 border-r-pink-700 px-4 rounded-full ">LMB</a>
        <ul class="font-semibold  flex justify-center items-center gap-6 ">
            <li><a href="#HOME">Home</a></li>
            <li><a href="#ABOUTt">About</a></li>
            <li><a href="#PROGRAMSTUDI">Program Studi</a></li>
            <li><a href="#LULUSAN">Lulusan</a></li>
        </ul>
        <a class="font-semibold py-1 border-2 border-t-red-600 border-b-pink-700   border-l-red-600 border-r-pink-700 px-4 rounded-full " href="{{route('login')}} ">
            SignIn
        </a>
    </nav>

    {{-- HERO --}}
    <div class="flex flex-col justify-center items-center px-32 min-h-screen  ">
        <div class="relative group ">
            <div class="group-hover:blur-xl duration-300 blur-3xl bg-gradient-to-t from-red-700 to-pink-700 rounded-3xl absolute inset-0"></div>
            <div class="bg-black py-10  rounded-3xl text-white relative flex   justify-center items-center">
                <h1 class="fa-regular fa-star text-white text-5xl rotate-45 translate-x-96"></h1>
                <div class="flex flex-col gap-5 justify-center items-center">
                    <h1 class=" flex flex-col text-6xl gap-3  text-center font-bold">ADVANCING <span class="text-pink-700">BRAINROT TALENT</span></h1>
                    <p class="w-1/3 text-center font-semibold">" From Skibidi brainrot to Still Water mastery — we turn clueless NPCs into alpha 
                        innovators. Whether you're stuck in an endless scroll or battling your inner procrastination demon, we’re here to upgrade 
                        your skillset, hustle. Join us, and let’s transform that endless Mafia Sholawat loop into a
                         Sigma grindset that even the Gus Gondrong would respect "
                    </p>
                    <div class="flex flex-row-reverse gap-10 justify-center items-center">
                        <a href="#ABOUT" class=" mt-3 font-semibold py-2 border-2 border-t-red-600 border-b-pink-700   border-l-red-600 border-r-pink-700 px-4 rounded-full">
                            Learn More About LMB
                        </a>
                        <a href="https://github.com/neverendingloneliness" target="_blank" class=" mt-3 font-semibold py-2 border-2 border-t-red-600 border-b-pink-700   border-l-red-600 border-r-pink-700 px-4 rounded-full">
                            Go To Creator Profile
                        </a>
                    </div>
                </div>
                <h1 class="fa-regular fa-star text-white text-5xl rotate-90 -translate-x-96"></h1>
            </div>
        </div>
    </div>

    {{-- ABOUT --}}
    <div class="flex justify-center items-center min-h-screen px-32" id="#ABOUT">
        <div class="flex flex-col md:flex-row items-center justify-center gap-8 text-center md:text-left">
            <div>
                <h1 class="text-white text-5xl font-bold mb-6">ABOUT <span class="text-pink-700">US</span></h1> 
                <div class="w-full md:w-3/4 flex flex-col gap-6 font-semibold"> 
                    <p class="text-white text-lg">We're not your average learning platform — we’re the <span class="text-pink-600">digital dojo</span>  where CB Ngawi transform into main characters, fueled by ambition, and just the right amount of chaos. Our mission? To take you from infinite scrolling to infinite winning.</p>
                    <p class="text-white text-lg">Whether you're dodging distractions like a true Sigma or still stuck in tutorial mode, we’ve got the tools, lessons, and support to help you level up. No cap. From tech skills to life hacks, we serve knowledge with a side of humor, because who said learning can’t be a vibe?</p>
                    <p class="text-white text-lg">Join us, and let's turn your “maybe later” into “already done.” It’s time to silence the Skibidi loop in your head and unleash your inner Sigma. The grind waits for no one — let’s get it.</p>
                </div>
            </div>
            <div class="relative group">
                <img src="asset/landingpage/hero.png" alt="" class="grayscale z-10  relative" width="2400">
                <img src="asset/landingpage/hero.png" alt="" class="group-hover:blur-xl duration-300 hue-rotate-310 saturate-150 brightness-75 contrast-125 inset-0  absolute blur-3xl" width="2400">
            </div>  
        </div>
    </div>

    {{-- PROGRAM STUDI --}}
    <div class="px-32 min-h-screen">
        <h1 class="text-white text-5xl font-bold">PROGRAM <span class="text-pink-700">STUDI</span></h1> 
        <div class="grid grid-cols-4 gap-4 mt-20">
            <div class="max-w-xs mx-auto bg-black  rounded-lg overflow-hidden">
                <div class="relative h-[600px] w-[400px] group">
                    <img src="asset/landingpage/alpha.jpg" class="grayscale group-hover:scale-110 duration-500 opacity-40 w-full h-full object-cover" alt="">
                    <h1 class="absolute bottom-0 left-0 right-0 -translate-y-7 text-center bg-white  group-hover:text-white group-hover:bg-pink-700 duration-300  p-4 font-bold text-xl">ALPHA</h1>
                </div>
            </div>
            <div class="max-w-xs mx-auto bg-black  rounded-lg overflow-hidden">
                <div class="relative h-[600px] w-[400px] group">
                    <img src="asset/landingpage/sigma.jpeg" class="grayscale group-hover:scale-110 duration-500 opacity-40 w-full h-full object-cover" alt="">
                    <h1 class="absolute bottom-0 left-0 right-0 -translate-y-7 text-center bg-white  group-hover:text-white group-hover:bg-pink-700 duration-300  p-4 font-bold text-xl">SIGMA</h1>
                </div>
            </div>
            <div class="max-w-xs mx-auto bg-black  rounded-lg overflow-hidden">
                <div class="relative h-[600px] w-[400px] group ">
                    <img src="asset/landingpage/skibidi.jpeg" class="grayscale group-hover:scale-110 duration-500 opacity-40 w-full h-full object-cover" alt="">
                    <h1 class="absolute bottom-0 left-0 right-0 -translate-y-7 text-center bg-white group-hover:text-white group-hover:bg-pink-700 duration-300   p-4 font-bold text-xl">SKIBIDI</h1>
                </div>
            </div>
            <div class="max-w-xs mx-auto bg-black  rounded-lg overflow-hidden">
                <div class="relative h-[600px] w-[400px] group">
                    <img src="asset/landingpage/mafia.jpg" class="group-hover:scale-110 duration-500 grayscale opacity-40 w-full h-full object-cover" alt="">
                    <h1 class="absolute bottom-0 left-0 right-0 -translate-y-7 text-center bg-white group-hover:text-white group-hover:bg-pink-700 duration-300    p-4 font-bold text-xl">MAFIA</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>