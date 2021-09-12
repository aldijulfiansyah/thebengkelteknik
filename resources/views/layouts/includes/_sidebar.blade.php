<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a class="nav-link {{ Request::is('') ? 'active' : '' }}" aria-current="page" href="/"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a class="nav-link {{ Request::is('barang') ? 'active' : '' }}" aria-current="page" href="/barang"><i class="lnr lnr-lighter"></i> <span>Barang</span></a></li>
<<<<<<< HEAD
                <li><a class="nav-link {{ Request::is('penjualan') ? 'active' : '' }}" aria-current="page" href="/penjualan"><i class="lnr lnr-lighter"></i> <span>Penjualan</span></a></li>
                <li><a class="nav-link {{ Request::is('laporan') ? 'active' : '' }}" aria-current="page" href="/laporan"><i class="lnr lnr-lighter"></i> <span>Laporan</span></a></li>
=======
                <li><a class="nav-link {{ Request::is('penjualan') ? 'active' : '' }}" aria-current="page" href="/penjualan"><i class="lnr lnr-cart"></i> <span>Penjualan</span></a></li>
>>>>>>> 3bf4143aba104ac45db4a960930fd0b7ace9bc32
            </ul>
        </nav>
    </div>
</div>