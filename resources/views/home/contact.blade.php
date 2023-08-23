
<section class="w-full h-auto flex flex-col" id="contact">
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