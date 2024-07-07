<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand text-white" href="#"><b>CRM</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{route('Home')}}">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class=" text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Input
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="{{route ('HalamanSimpanPelanggan')}}">Input Pelanggan</a>
          <a class="dropdown-item " href="{{route('halamanInputInteraksi')}}">Input Interaksi</a>
          <a class="dropdown-item " href="{{route('halamanInputTransaksi')}}">Input Transaksi</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          View
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="{{route ('tampilkanPelanggan')}}">Pelanggan</a>
          <a class="dropdown-item" href="{{route ('interaksiData')}}">Interaksi</a>
          <a class="dropdown-item" href="{{route('view')}}">Transaksi</a>
          <div class="dropdown-divider"></div>
        </div>
  </div>
</nav>
