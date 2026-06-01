<nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="/media/logo.png" alt="Castello Fantasylandia" class="img-fluid logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-end">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route("homepage")}}">Home</a>
        </li>
        <li class="nav-item mx-5">
          <a class="nav-link" href="{{route("book")}}">Prenota Ora</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route("allBooks")}}">Visualizza le tue prenotazioni</a>
        </li>
    </div>
  </div>
</nav>