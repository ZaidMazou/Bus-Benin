@extends('layouts.app')

@section('content')
    <div class=" w-full h-auto mt-[150px] mb-[50px] p-[20px]">
        <h2 class=" text-[35px] text-blue-600 text-start font-semibold">Nos Compagnies</h2>
    </div>
    <section class=" w-full h-auto p-[10px] flex flex-wrap mb-28">
        @if ($compagnies->count() > 0)
            @foreach ($compagnies as $compagnie)
            <div class="compagnie-content">
                <div class="image">
                    <img src="{{Storage::url('Profile_user/7.jpeg')}}" alt="" srcset="">
                </div>
                <div class=" w-full p-3 mb-3">
                    <p class=" text-[20px] text-gray-900 font-light">{{ $compagnie->description }}</p>
                </div>
                <div class="w-full p-3 mb-5">
                    <h3 class=" text-[20px] text-gray-900 font-extrabold">Cotonou | Bénin</h3>
                </div>
                <div class="w-full p-5 m-auto">
                    <a href="{{route('compagnie',['id'=>$compagnie->id])}}" class="text-white text-[18px] p-2 bg-gray-900 rounded-[10px] text-center">Voir plus</a>
                </div>
            </div>
            @endforeach
        @else
            <span class=" text-red-500 font-bold text-[40px]">Aucune Compagnies</span>
        @endif
    </section>
@endsection