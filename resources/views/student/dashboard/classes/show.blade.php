<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelas</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-black">
    @include('component.student.navstudent')
    <div class="mt-20 max-w-2xl mx-auto  rounded-lg shadow-lg p-6">
        <img src="{{ asset('storage/' . $kelas->gambar_kelas) }}" alt="{{ $kelas->title_kelas }}" 
        class="w-full h-64 object-cover grayscale mb-4 rounded-lg">
        <div class="bg-pink-950 p-6 rounded-lg ">
            <h1 class="text-3xl font-bold mb-4 text-white">{{ $kelas->nama_kelas }}</h1>
            <p class="text-gray-300">{{ $kelas->description }}</p>
        </div>
        <div class="flex flex-row-reverse justify-between mt-5 items-center">
            <form method="POST" action="{{ route('kelas.apply', $kelas->id) }}" id="applyForm">
                @csrf
                <button type="submit" class="font-semibold  text-white" >
                    Apply This Class
                </button>
            </form>
            <a href="{{ route('kelas') }}" class="flex items-center text-white gap-3 font-semibold" >
                <i class="fa-solid fa-arrow-left"></i>
                Kembali ke Kelas
            </a>
        </div>
    </div>

    <script>
        document.getElementById('applyForm').addEventListener('submit', function(e) {
            e.preventDefault()
            Swal.fire({
                title: "Apply to Class?",
                text: "Yakin a bolo?",
                icon: "info",
                color: "#ffff",
                background: "#000000",
                showCancelButton: true,
                confirmButtonColor: "#9c134c",
                cancelButtonColor: "#000000",
                confirmButtonText: "Yes, apply!"
            }).then((result) => {
                if(result.isConfirmed) {
                    this.submit()
                }
            })
        })
    </script>
</body>
</html>