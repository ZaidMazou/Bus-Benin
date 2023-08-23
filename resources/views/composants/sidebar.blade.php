<div class=" w-[18vw] h-[96vh] p-[10px] block rounded bg-white shadow-sm">
    <div class=" w-full h-auto mb-8 mt-7 p-[10px] mx-8">
       
            <img src="{{ Storage::url(Auth::user()->profile->path) }}" alt="" srcset="" class=" w-[130px] h-[130px] rounded-[50%] object-cover">
    </div>
    <ul class=" w-full h-auto p-[10px] mt-9 mx-8">
        <li class=" p-2 m-2"><a href="{{route('dashboard')}}">Accueil</a></li>
        <li class=" p-2 m-2"><a href="">Trajets</a></li>
        <li class=" p-2 m-2"><a href="">Réservations</a></li>
        <li class=" p-2 m-2"><a href="">Compagnies</a></li>
        <li class=" p-2 m-2"><a href="">Notifications</a></li>
        <li class=" p-2 m-2"><a href="{{route('profile.edit')}}">Profile</a></li>
    </ul>
    <div class=" w-full h-auto mx-8 p-3 mt-12">
        <a href="{{route('logout')}}" onclick="e.preventDefault();this.closest('form').submit()">Logout</a>
    </div>
</div>