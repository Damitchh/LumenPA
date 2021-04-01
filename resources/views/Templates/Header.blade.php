<body background="<?= asset('storage/bg.jpg');?>">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <!-- asset Logo -->
        <a class="navbar-brand" href="#">
            <img src="<?= asset('storage/logo.png');?>" width="120">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- navlink -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">About</a>
            </div>
        </div>

        <!-- asset navlink Keranjang -->
        <div class="navbar-nav">
            <a class="navbar-brand" href="#">
                <img src="<?= asset('storage/keranjang.png');?>" class="nav-link col-mr-5 " width="70" height="50">
            </a>
        </div>
            
    </div>
</nav>
