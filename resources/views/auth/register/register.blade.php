<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="flex gap-16  items-center justify-center mt-20">
        <h1 class="text-4xl font-bold">LMB REGISTER</h1>
        <form action="" class="flex flex-col gap-6 ">
            <div class="flex flex-col items-start gap-5">
                <label for="" class="font-semibold">Name :</label>
                <input type="text" placeholder="Enter your Name">
            </div>
            <div class="flex flex-col items-start gap-5">
                <label for="" class="font-semibold">Email :</label>
                <input type="email" placeholder="Enter your Email">
            </div>
            <div class="flex flex-col items-start gap-5">
                <label for="" class="font-semibold">Password : </label>
                <div class="flex">
                    <input type="password" id="password" 
                           placeholder="Enter your Password" 
                           required name="password"
                           class="">
                    <button type="button" id="togglePassword" 
                            class="fa-solid fa-eye ">
                    </button>
                </div>
            </div>

            <div class="flex gap-9 mt-4">
                <button>Submit</button>
                <a href="/" class="text-gray-400">Sudah Punya Akun?</a>
            </div>
        </form>
    </div>

    <script src="app.js"></script>
</body>

</html>