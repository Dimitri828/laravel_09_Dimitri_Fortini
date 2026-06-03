 
     <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($book->img)}}" class="card-img-top" alt="Foto di chi prenota">
        <div class="card-body">
             <h5 class="card-title">{{$book->name}} {{$book->surname}}</h5>
             <h6 class="card-subtitle mb-2 text-body-secondary">{{$book->mail}}</h6>
             <p class="card-text">{{$book->date}}</p>
        </div>

     </div>

