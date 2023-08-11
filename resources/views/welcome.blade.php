@extends('layouts.app')

@section('content')

    <header class="header">
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
                        <img src="" alt="" srcset="">
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
                        <img src="" alt="" srcset="">
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
                        <img src="" alt="" srcset="">
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
                <p class=" text-[20px] text-gray-900 font-light text-center p-2">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et accusamus assumenda recusandae quaerat dolorum, tempore quisquam repellendus repudiandae autem aliquam, debitis eos dignissimos quam voluptate aut? Laudantium voluptatibus, hic iusto pariatur quae recusandae officiis laborum non. Laborum, illo vitae delectus sapiente debitis numquam quidem minus accusamus, ipsum iste facilis quaerat sit aperiam nulla vel at aliquam placeat eaque doloremque provident autem fugit dolores hic dicta! Unde, saepe ratione delectus quae maxime quod voluptatem veniam minima itaque tempore labore provident repudiandae natus modi? Voluptate aliquid, provident ratione blanditiis, consectetur quam iusto quas maxime magni sit libero dolore exercitationem omnis hic obcaecati.
                </p>
            </div>
        </section>
        <section class="w-full h-auto flex flex-col">
            <div class="section-title">
                <h2 class="">Nous contacter</h2>
            </div>
            <div class=" w-full h-auto p-[10px]">
                <form action="" method="post">
                    @csrf
                    <div class=" w-1/2 flex h-auto flex-col p-[10px] m-auto">
                        <label for="nom" class=" text-[18px] text-black mb-2">Nom <span class=" text-blue-600">*</span></label>
                        <input type="text" name="nom" id="nom" class=" w-full p-[10px] border border-gray-400 rounded-lg mb-2" placeholder="Entrez votre nom">
                    </div>
                    <div class=" w-1/2 flex h-auto flex-col p-[10px] m-auto">
                        <label for="prenom" class=" text-[18px] text-black mb-2">Prénom <span class=" text-blue-600">*</span></label>
                        <input type="text" name="prenom" id="prenom" class=" w-full p-[10px] border border-gray-400 rounded-lg mb-2" placeholder="Entrez votre prénom">
                    </div>
                    <div class=" w-1/2 flex h-auto flex-col p-[10px] m-auto">
                        <label for="email" class=" text-[18px] text-black mb-2">Email<span class=" text-blue-600">*</span></label>
                        <input type="text" name="email" id="email" class=" w-full p-[10px] border border-gray-400 rounded-lg mb-2" placeholder="Entrez votre email">
                    </div>
                    <div class=" w-1/2 flex h-auto flex-col p-[10px] m-auto">
                        <label for="message" class=" text-[18px] text-black mb-2">Nom <span class=" text-blue-600">*</span></label>
                        <textarea name="message" id="message" cols="30" rows="10" class=" border-gray-400 rounded-lg" placeholder="Entrez votre Message"></textarea>
                    </div>
                    <div class="w-1/2 flex h-auto flex-col p-[10px] m-auto">
                        <button type="submit" class=" p-[5px] text-white bg-blue-600 rounded-md text-[18px] hover:bg-blue-500">Soumettre</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

@endsection