<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">UTS Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/produk">produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/form">form</a>
          </li>
          
        
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  
  <div class="container" style="margin-left: 30px">

    <div class="row">
      <div class="col-sm-10">
        <h1>Halaman Produk</h1>
      </div>
      
      
      <div class="col-sm-2">
        <a href="/form" class="btn btn-primary" style="width: 100%" type="submit">Tambah Produk</a>
     </div>
      

    </div>

      <div class="row">
      
        
        <table class="table table-primary table-sm table-hover table-striped table-bordered text-center">
          <thead>
            <tr>
              <th>Kode Produk</th>
              <th>Nama Produk</th>
              <th>Jenis Produk</th>
              <th> Harga</th>
              
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < $jumlah; $i++)
            <tr>
              <td>{{ $kode_produk [ $i]}}</td>
              <td>{{ $nama_produk [ $i]}}</td>
              <td> Alat tulis</td>
              <td> {{ $harga [$i]}}</td>
            </tr>
             
            @endfor
    
    
            
          </tbody>
        </table>

    </div>

  </div>
        </form>
      </div>

   </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>