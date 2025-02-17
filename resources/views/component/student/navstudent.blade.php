<nav class="px-32 mt-5 flex justify-between top-0 sticky bg-black py-5">
    <a href="{{route('dashboard')}}" class="font-semibold border-2 py-1 border-t-red-600 border-b-pink-700   border-l-red-600 border-r-pink-700 px-4 rounded-full text-white">LMB</a>
    <ul class="flex justify-center gap-6 font-semibold items-center">
        <li class="text-white">
            <a href="{{route('kelas')}}">
                CLASSES
            </a>
        </li>
        <li class="text-white">
            <a href="{{route('roadmap')}}">
                ROADMAPS
            </a>
        </li>
    </ul>
    <a href="{{route('profile.show')}}" class="fa-regular fa-user text-white"></a>
</nav>