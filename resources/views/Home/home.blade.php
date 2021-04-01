<!doctype html>
<html lang="en">

<!-- HEAD BOOTSTRAP -->

<head>
    @include('Templates.Head')
</head>

<!-- HEADER NAVBAR -->
<header class="row">
    @include('Templates.Header')
</header>




<body>
    
    <!-- CARD BARANG -->
    <div class="row">
        <div class="col-md-4 mt-3  d-flex justify-content-center">
    
    
            <div class="card" style="width: 20rem;">
                <img class="card" src="<?= asset('storage/Vandal.webp');?>" alt="Card image cap" height="300">
                <div class="card-body">
                    <h5 class="card-title">NAMA PRODUK</h5>
                    <p class="card-text">HARGA</p>
                    <a href="#" class="btn btn-primary">BELI</a>
                </div>
            </div>
    
    
        </div>

</body>


<!-- FOOTER JS DLL -->
@include('Templates.Footer')



</html>
