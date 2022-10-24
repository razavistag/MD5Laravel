<nav id="sidebar-menu" class="collapse d-lg-block sidebar collapse border-1">
    <div class="position-sticky" style="border-right: 1px solid rgb(200, 200, 200);">
        <div class="sidebar-header">
            <a class="navbar-brand h2 text-white" href="#">
                <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                <span>MDB5 LARAVEL</span>
            </a>
        </div>
        <div class="list-group list-group-flush  mt-0">
            <a href="/dashboard" class="list-group-item list-group-item-action px-3 border-0  border-0 {{ Request::is('dashboard') ? 'active' : NULL }}" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span> DASHBOARD</span>
            </a>
            <a href="/customer" class="list-group-item list-group-item-action px-3 border-0  border-0 {{ Request::is('customer') ? 'active' : NULL }}">
                <i class="fas fa-chart-area fa-fw me-3"></i><span> CUSTOMERS </span>
            </a>


            {{-- @for ($i = 0; $i < 40; $i++)
                <a class="list-group-item list-group-item-action px-3 border-0 bg-light border-0"
                    id="ex-with-icons-tab-{{ $i }}" data-mdb-toggle="tab"
                    href="/dashboard"
                    role="tab" aria-controls="ex-with-icons-tabs-{{ $i }}" aria-selected="false">
                    <i class="fas fa-cogs fa-fw me-2"></i> 
                    <span>{{ $i + 1 }} - {{ strtoupper(bin2hex(random_bytes(5))) }} </span>
                </a>
            @endfor --}}

        </div>
    </div>

</nav>
