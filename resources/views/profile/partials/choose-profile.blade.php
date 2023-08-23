

<h2 class=" text-gray-800 text-[20px] text-start mb-5">Complèter votre profile</h2>
<form action="{{ route('profile.complete') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class=" w-full h-auto flex flex-col mb-5">
        <label for="tel">Téléphone</label>
        <input type="tel" name="tel" id="tel" class="mt-1 block w-full border-[1px] border-[#555] p-[8px] rounded-md bg-gray-900 text-white" autofocus>
    </div>
    <div class=" w-full h-auto flex flex-col mb-5">
        <label for="">Sexe</label>
        <select name="sexe" id="sexe" class="mt-1 block w-full border-[1px] border-[#555] p-[8px] rounded-md bg-gray-900 text-white">
            <option value=""></option>
            <option value="masculin">masculin</option>
            <option value="feminin">feminin</option>
            <option value="autre">autre</option>
        </select>
    </div>
    <div class=" w-full h-auto flex flex-col mb-5">
        <label for="">Photo de profile</label>
        <input type="file" name="profile" id="" class="mt-1 block w-full border-[1px] border-[#555] p-[8px] rounded-md bg-gray-900 text-white" autofocus>
    </div>
    <div class=" w-auto">
        <button type="submit" class=" px-5 py-2 text-gray-900 bg-gray-200 rounded-md text-[14px] font-medium">SAVE</button>
    </div>
</form>