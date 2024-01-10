

@section('content')

<div>
<h1 class="text-3xl text-center mb-3 font-bold underline">CineVille</h1> 
<a class="text-xl hover:no-underline text-center font-bold underline ml-10 mb-8" href="/formulaire">Ajoutez une Salle</a>
<a href="/" class="text-gray-500 flex gap-2 mb-3 hover:underline"> Accueil </a>
</div>


<div class="flex row gap-3 flex flex-wrap">
        @foreach ($salles as $salle)
            <div class="w-full">
                <div class="w-full"> 
                <div class="flex flex-col justify-between h-full">
                    <a href="/salle/{{ $salle->id }}" class="mx-3 block group">
                               
                                <div class="w-full">  <h3 class="text-xl text-gray-600 font-bold">{{ $salle->numero }} </h3> </div>
                        </a>
                                </div>
                                
                                <a class="no-underline text-sm hover:font-bold flex flex-col w-24" href="/salle/{{ $salle->id }}">En savoir plus</a>
  
                        </div>
                        
                
            </div>
            </div>
        @endforeach
    </div>


