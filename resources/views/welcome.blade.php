@extends('layouts.app')

@section('content')

    <header class="header" id="header">
        <div class="header-content">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt eaque eius sapiente iste facilis? Inventore!</p>
            <a href="{{route('dashboard')}}">Reservez votre ticket maintenant</a>
        </div>
    </header>
    <main class="main">
        <section class="trajet-section">
            <div class="section-title">
                <h2 class="">Nos trajets</h2>
            </div>
            <div class="trajet-content">
                <div class="content">
                    <h3>Départ</h3>
                    <h3>Arrivée</h3>
                    <h3>Heure de départ</h3>
                </div>
                <div class="content">
                    <h3>Départ</h3>
                    <h3>Arrivée</h3>
                    <h3>Heure de départ</h3>
                </div>
                <div class="content">
                    <h3>Départ</h3>
                    <h3>Arrivée</h3>
                    <h3>Heure de départ</h3>
                </div>
            </div>
        </section>
        <section class="compagnie-section">
            <div class="section-title">
                <h2>Nos compagnies de transport</h2>
            </div>
            <div class="trajet-content">
                <div class="compagnie-content">
                    <div class="image">
                        <img src="{{Storage::url('Profile_user/7.jpeg')}}" alt="" srcset="">
                    </div>
                    <div class=" w-full p-3 mb-3">
                        <p class=" text-[25px] text-gray-900 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, autem.</p>
                    </div>
                    <div class="w-full p-3 mb-5">
                        <h3 class=" text-[20px] text-gray-900 font-extrabold">Cotonou | Bénin</h3>
                    </div>
                    <div class="w-full p-5 m-auto">
                        <a href="" class="text-white text-[18px] p-2 bg-gray-900 rounded-[10px] text-center">Voir plus</a>
                    </div>
                </div>
                <div class="compagnie-content">
                    <div class="image">
                        <img src="{{Storage::url('Profile_user/7.jpeg')}}" alt="" srcset="">
                    </div>
                    <div class=" w-full p-3 mb-3">
                        <p class=" text-[25px] text-gray-900 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, autem.</p>
                    </div>
                    <div class="w-full p-3 mb-5">
                        <h3 class=" text-[20px] text-gray-900 font-extrabold">Cotonou | Bénin</h3>
                    </div>
                    <div class="w-full p-5 m-auto">
                        <a href="" class="text-white text-[18px] p-2 bg-gray-900 rounded-[10px] text-center">Voir plus</a>
                    </div>
                </div>
                <div class="compagnie-content">
                    <div class="image">
                        <img src="{{Storage::url('Profile_user/7.jpeg')}}" alt="" srcset="">
                    </div>
                    <div class=" w-full p-3 mb-3">
                        <p class=" text-[25px] text-gray-900 font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, autem.</p>
                    </div>
                    <div class="w-full p-3 mb-5">
                        <h3 class=" text-[20px] text-gray-900 font-extrabold">Cotonou | Bénin</h3>
                    </div>
                    <div class="w-full p-5 m-auto">
                        <a href="" class="text-white text-[18px] p-2 bg-gray-900 rounded-[10px] text-center">Voir plus</a>
                    </div>
                </div>
            </div>
        </section>
        <section class=" w-full h-auto flex flex-col">
            <div class="section-title">
                <h2 class="">A propos de nous</h2>
            </div>
            <div class=" w-full h-auto px-[10px] py-[5px] mb-[30px]">
                <p class=" text-[20px] text-gray-900 font-light text-center" id="desc">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et accusamus assumenda recusandae quaerat dolorum, tempore quisquam repellendus repudiandae autem aliquam, debitis eos dignissimos quam voluptate aut? Laudantium voluptatibus, hic iusto pariatur quae recusandae officiis laborum non. Laborum, illo vitae delectus sapiente debitis numquam quidem minus accusamus, ipsum iste facilis quaerat sit aperiam nulla vel at aliquam placeat eaque doloremque provident autem fugit dolores hic dicta! Unde, saepe ratione delectus quae maxime quod voluptatem veniam minima itaque tempore labore provident repudiandae natus modi? Voluptate aliquid, provident ratione blanditiis, consectetur quam iusto quas maxime magni sit libero dolore exercitationem omnis hic obcaecati.
                </p>
            </div>
        </section>
        @include('home.contact')
    </main>

@endsection