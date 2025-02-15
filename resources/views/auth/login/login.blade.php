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
<body class="bg-black ">
    @include('component.auth.navbar.navauth')
    <div class="flex gap-16  items-center justify-center min-h-screen">
        <h1 class="text-4xl text-white font-bold">LMB <span class="font-semibold border-2 py-1 border-t-red-600 border-b-pink-700   border-l-red-600 border-r-pink-700 px-4 rounded-full text-white">LOGIN</span> </h1> 
        <form method="POST" action="{{route('login')}}" class="flex flex-col gap-6 ">
            @csrf
            <div class="flex flex-col items-start gap-5">
                <label for=""  class="text-white font-semibold">Email : </label>
                <input type="email" class="bg-black text-white" name="email" placeholder="Enter your Email">
            </div>
            <div class="flex flex-col items-start gap-5">
                <label for="" name="password" class=" font-semibold text-white">Password : </label>
                <div class="flex gap-2 items-center justify-center">
                    <input type="password" id="password" 
                           placeholder="Enter your Password" 
                           name="password"
                           class="bg-black text-white" >
                    <button type="button" id="togglePassword" 
                            class="fa-solid fa-eye text-white">
                    </button>
                </div>
            </div>
            <div class="flex gap-9 mt-4">
                <button type="submit" class="text-white font-semibold">Submit</button>
                <a href="{{route('register')}}" class="text-gray-400 font-semibold">Belum Punya Akun?</a>
            </div>
        </form>
    </div>
    @include('component.normal.footer')


    <script src="app.js"></script>
</body>
</html>