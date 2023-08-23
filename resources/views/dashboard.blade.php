   @extends('layouts.application')

   @section('container')
    <div class=" w-[80vw] h-full p-3">
        <h2>{{ Auth::user()->id}}</h2>
    </div>
   @endsection

