@extends('layouts.app')

@section('content')
    <section class=" w-full h-auto mt-40 mb-[50px] p-[10px]">
        <div class=" w-full h-auto flex items-center justify-between p-3">
            <div class=" w-[40%] h-auto">
                <img src="" alt="" srcset="" class=" w-full h-96 object-cover">
            </div>
            <div class=" w-[40%] h-auto block p-3 text-gray-800">
                <p class=" text-blue-500 text-[40px] font-bold m-3 text-center" >{{ $compagnie->nomCompagnie }}</p>
                <p class=" text-black text-[20px] m-2 text-center">{{ $compagnie->email }}</p>
                <p class=" text-black text-[20px] m-2 text-center">{{ $compagnie->IFU }}</p>
            </div>
        </div>
        <div class=" w-full h-auto p-[20px] mb-[50px]">
            <p class=" text-[25px]"> {{ $compagnie->description }} </p>
            <h2 class="  text-blue-500 text-[40px] font-bold m-2">Nous sommes situés à :</h2>
            <ul class=" w-[300px] h-auto flex flex-col">
                @forelse ($compagnie->siege as $siege)
                    <li class=" text-[18px] m-0.5">{{ $siege->ville }}</li>
                @empty
                    <span class="text-red-600 text-[30px]">Aucune ville de locatisation</span>
                @endforelse
            </ul>
        </div>
    </section>
    <section class=" w-full h-auto p-[10px] mb-[100px]">
        <div class=" w-full h-auto mt-[30px] mb-[50px] p-[20px]">
            <h2 class=" text-[35px] text-blue-600 text-start font-semibold">Photos</h2>
        </div>
        <div class=" w-[100vw] h-auto overflow-x-scroll">
            <div class=" w-[260vw] h-auto flex items-center justify-center">
                <div class=" w-[600px] h-[400px] m-2">
                    <img src="" alt="" srcset="" class=" w-full h-full object-cover">
                </div>
                <div class=" w-[600px] h-[400px] m-2">
                    <img src="" alt="" srcset="" class=" w-full h-full object-cover">
                </div>
                <div class=" w-[600px] h-[400px] m-2">
                    <img src="" alt="" srcset="" class=" w-full h-full object-cover">
                </div>
                <div class=" w-[600px] h-[400px] m-2">
                    <img src="" alt="" srcset="" class=" w-full h-full object-cover">
                </div>
                <div class=" w-[600px] h-[400px] m-2">
                    <img src="" alt="" srcset="" class=" w-full h-full object-cover">
                </div>
                <div class=" w-[600px] h-[400px] m-2">
                    <img src="" alt="" srcset="" class=" w-full h-full object-cover">
                </div>
                <div class=" w-[600px] h-[400px] m-2">
                    <img src="" alt="" srcset="" class=" w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>
@endsection