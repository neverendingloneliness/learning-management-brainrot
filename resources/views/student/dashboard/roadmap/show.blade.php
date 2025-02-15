<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Roadmap</title>
</head>
<body class="bg-black">
    @include('component.student.navstudent')
    <div class="mt-20 max-w-2xl mx-auto  rounded-lg shadow-lg p-6">
        <img src="{{ asset('storage/' . $roadmap->gambar_roadmap) }}" alt="{{ $roadmap->title_roadmap }}" 
        class="w-full h-64 object-cover grayscale mb-4 rounded-lg">
        <div class="bg-pink-950 p-6 rounded-lg ">
            <h1 class="text-3xl font-bold mb-4 text-white">{{ $roadmap->title_roadmap }}</h1>
            <p class="text-gray-300">{{ $roadmap->deskripsi_roadmap }}</p>
        </div>
        <a href="{{ route('roadmap') }}" class="flex items-center text-white mt-4 gap-3 font-semibold">
            <i class="fa-solid fa-arrow-left"></i>
            Kembali ke Roadmap
        </a>
    </div>
</body>
</html>