<x-layout>
    <section class="container-fluid">
        <div class="row margin">
            <div class="col-12">
                <h2 class="text-center text-white">Le tue prenotazioni</h2>
            </div>
           @foreach($books as $book)
            <div class="col-12 col-md-4 my-5">
             <x-card
             :$book
             {{-- :name="$book->name"
             :surname="$book->surname"
             :mail="$book->mail"
             :date="$book->date"
              --}}
             >
            
            </x-card>   
            </div>
            @endforeach     
        </div>
    </section>
</x-layout>