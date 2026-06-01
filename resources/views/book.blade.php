<x-layout>
    <section class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col12 px-0">
                <img src="/media/fantasylandia.png" alt="Fantasylandia" class="img-fluid book-img">
                @if (session('message'))
                    <div class="alert alert-success ">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="col-4">
                <h2 class="text-center text-white my-3">Prenota Ora</h2>
                <form action="{{ route('ubook') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Cognome</label>
                        <input name="surname" type="text" class="form-control" id="surname">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="mail" type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Data</label>
                        <input name="date" type="date" class="form-control" id="date">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

</x-layout>
