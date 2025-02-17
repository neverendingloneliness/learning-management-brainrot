<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Profile</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-black text-white min-h-screen">
    @include('component.student.navstudent')

    <div class="px-32 min-h-screen mt-10">
        <div class="flex items-center gap-3 mb-6">
            <h3 class="text-red-500 font-bold fa-solid fa-graduation-cap text-3xl"></h3>
            <h3 class="text-3xl font-semibold"> Applied Classes</h3>
        </div>

        <ul class="border-4 border-t-red-700 border-b-pink-700 border-l-red-600 border-r-pink-700 rounded-xl p-4">
            @foreach($appliedClass as $kelas)
                <li class=" p-6 mb-6 rounded-xl shadow-lg  duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <strong class="block text-xl font-bold">Class Name:</strong>
                        <span class="text-xl">{{ $kelas->nama_kelas }}</span>
                    </div>

                    <div class="w-full bg-gray-700 rounded-full h-4 mb-3">
                        <div class="bg-green-400 h-4 rounded-full transition-all duration-500" style="width: {{ $kelas->progress }}%;"></div>
                    </div>
                    <p class="text-sm mb-6">Progress: {{ $kelas->progress }}% completed</p>

                    <ul class="space-y-4">
                        @foreach($kelas->materis as $material)
                        <li class="bg-gray-900 hover:bg-gray-800 p-4 rounded-lg transition-colors duration-300">
                            <div class="mb-2">
                                <p class="text-lg font-bold">{{ $material->judul_materi }}</p>
                                <p class="text-sm text-gray-300">Material ID: {{ $material->id }}</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <a href="{{ $material->video_url }}" target="_blank" class="text-orange-400 hover:text-orange-300 text-sm fa-solid fa-video">
                                        <span class="ml-2">Video</span>
                                    </a>
                                    <a href="{{ $material->pdf_url }}" target="_blank" class="text-pink-400 hover:text-pink-300 text-sm fa-solid fa-file-pdf">
                                        <span class="ml-2">PDF</span>
                                    </a>
                                </div>
                                <form method="POST" action="{{ route('material.complete', $material->id) }}">
                                    @csrf
                                    <button type="submit" class="bg-green-600 font-bold px-3 py-2 text-xs fa-solid fa-check rounded hover:bg-green-500 transition-colors" title="Mark as Complete"></button>
                                </form>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
