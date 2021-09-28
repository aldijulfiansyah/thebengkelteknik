<div id="sidebar-nav" class="sidebar inverted">
    <div class="sidebar-scroll">
        <nav>
            <br>
            <br>
            <ul class="nav">

                <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                @if (auth()->user()->role == "Karyawan Admin")
                <li><a class="nav-link {{ Request::is('customer') ? 'active' : '' }}" aria-current="page" href="/customer"><i class="lnr lnr-users"></i> <span>Customer</span></a></li>
                @endif
                @if (auth()->user()->role == "Karyawan Admin")
                <li><a class="nav-link {{ Request::is('barang') ? 'active' : '' }}" aria-current="page" href="/barang"><i class="lnr lnr-briefcase"></i> <span>Barang</span></a></li>
                @endif
                @if (auth()->user()->role == "Karyawan Admin")
                <li><a class="nav-link {{ Request::is('penjualan') ? 'active' : '' }}" aria-current="page" href="/penjualan"><i class="lnr lnr-cart"></i> <span>Penjualan</span></a></li>
                @endif
                @if (auth()->user()->role == "Karyawan Admin")
                <li><a class="nav-link {{ Request::is('laporan') ? 'active' : '' }}" aria-current="page" href="/laporan"><i class="lnr lnr-list"></i> <span>Laporan</span></a></li>
                @endif
                @if (auth()->user()->role == "Karyawan Admin")
                <li><a class="nav-link {{ Request::is('user') ? 'active' : '' }}" aria-current="page" href="/user"><i class="lnr lnr-user"></i> <span>User</span></a></li>
                @endif

                

            </ul>
        </nav>
    </div>
</div>