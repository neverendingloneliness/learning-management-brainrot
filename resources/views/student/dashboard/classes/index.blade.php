<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-black">
    @include('component.student.navstudent')
    <div class="px-32">
        <div class=" mt-12 flex items-center gap-3 mb-6">
            <h3 class="text-red-500 font-bold fa-solid fa-book text-3xl"></h3>
            <h3 class="text-3xl text-white font-semibold"> Classes</h3>
        </div>
        <div class="border-2 border-t-red-700 border-b-pink-700 border-l-red-600 border-r-pink-700 rounded-xl p-4 grid grid-cols-4 gap-4 ">
            @foreach ($kelas as $item )
                <div class=" max-w-xs mx-auto bg-black  rounded-xl overflow-hidden">
                    <div class="relative h-[300px] w-[400px] group">
                        <img src="{{ asset('storage/' . $item->gambar_kelas) }}" class="grayscale blur-sm group-hover:blur-0 group-hover:scale-110 duration-500 opacity-40 w-full h-full object-cover" alt="">
                        <div class="absolute bottom-0 left-0 w-full backdrop-blur-lg duration-300  bg-opacity-80  p-4  ">
                            <h1 class="text-xl font-bold text-white mb-2">
                                {{ $item->nama_kelas }}
                            </h1>
                            <p class="text-sm text-white  line-clamp-3">
                                {{ $item->description }}
                            </p>
                            <button class="text-white mt-4">
                                <a href="{{route('kelas.show', $item->id)}}" class=" font-semibold border-2 py-1 border-pink-700 px-4 rounded-full">
                                    Lihat Lebih Detail
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>