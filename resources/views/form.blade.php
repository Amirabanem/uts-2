<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
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

    <h1>From Tambah Produk</h1>

    {{-- 
      ROWSPAN = MENGGABUNGKAN BARIS
      COLSPAN = MENGGABUNGKAN KOLOM
      --}}


     
    
          </tbody>
        </table>
        

        <div class="col-sm-12">
          
          <form action="" method="GET">
            <div class="row">
              <div class="col-sm-4">
                <label for="">Kode Produk</label>
                <input type="number" name="Kode Produk" class="form-control" placeholder="Input Kode Produk"> 
            </div>

            <div class="col-sm-4">
              <label for="">Nama produk</label>
              <input type="text" name="nama_produk" class="form-control" placeholder="Input Nama Produk ">
            </div>
  
            <div class="col-sm-4">
              <label for="">Jenis Produk </label>
              <select name="jenis_produk" class="form-control">
              <option>Pilih Produk</option> 
              <option>Alat tulis</option>
              <option>Elektronik</option>
              <option>Sembako</option>
            </select>
            </div>
  
            
          </div>
          
          
        </div>
        
        <div class="row mt-2">
          <div class="col-sm-6">
            <label for="">Harga</label>
            <input type="number" name="harga" class="form-control">
          </div>
          
      
        <div class="col-sm-6">
          <div class="form-group">
            <button class="btn btn-success" style="width: 100%" type="submit">Simpan</button>
          </div>
        </div>
      </div>
    
          </form>
        </div>
  
     </div>
      </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>