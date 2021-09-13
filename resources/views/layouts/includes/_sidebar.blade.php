<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <br>
            <ul class="nav">

                <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a class="nav-link {{ Request::is('barang') ? 'active' : '' }}" aria-current="page" href="/barang"><i class="lnr lnr-lighter"></i> <span>Barang</span></a></li>
                @if (auth()->user()->role == "Karyawan Admin")
                <li><a class="nav-link {{ Request::is('penjualan') ? 'active' : '' }}" aria-current="page" href="/penjualan"><i class="lnr lnr-lighter"></i> <span>Penjualan</span></a></li>
                @endif
                @if (auth()->user()->role == "Karyawan Admin")
                <li><a class="nav-link {{ Request::is('laporan') ? 'active' : '' }}" aria-current="page" href="/laporan"><i class="lnr lnr-list"></i> <span>Laporan</span></a></li>
                @endif

                

            </ul>
        </nav>
    </div>
</div>