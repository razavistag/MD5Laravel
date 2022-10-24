<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark border-1">
    <div class="position-sticky">
        <div class="list-group list-group-flush  mt-0">
            <a href="/dashboard" class="list-group-item list-group-item-action px-3 border-0   bg-light border-0"
                aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span> DASHBOARD</span>
            </a>
            <a href="/dashboard" class="list-group-item list-group-item-action px-3 border-0   bg-light border-0 active">
                <i class="fas fa-chart-area fa-fw me-3"></i><span> SETTINGS</span>
            </a>

            <a href="/dashboard" class="list-group-item list-group-item-action px-3 border-0   bg-light border-0">
                <i class="fas fa-chart-area fa-fw me-3"></i><span> CUSTOMER ACCOUNT </span>
            </a>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed  bg-light rounded-0" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 01
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 01 SUB MENU 1 </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 01 SUB MENU 2 </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 01 SUB MENU 3 </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 01 SUB MENU 4 </span>
                        </a>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed  bg-light rounded-0" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                            aria-controls="flush-collapseTwo">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 02
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 02 SUB MENU 1 </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 02 SUB MENU 2 </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 02 SUB MENU 3 </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 02 SUB MENU 4 </span>
                        </a>
                    </div>
                </div>
                <div class="accordion-item rounded-0">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed bg-light rounded-0" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 03
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse border-0"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 03 SUB MENU 1 </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 03 SUB MENU 2 </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 03 SUB MENU 3 </span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action   border-0   bg-light border-0">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span> MENU 03 SUB MENU 4 </span>
                        </a>
                    </div>
                </div>
            </div>


            @for ($i = 0; $i < 40; $i++)
                <a class="list-group-item list-group-item-action px-3 border-0   bg-light border-0"
                    id="ex-with-icons-tab-{{ $i }}" data-mdb-toggle="tab"
                    href="/dashboard"
                    role="tab" aria-controls="ex-with-icons-tabs-{{ $i }}" aria-selected="false">
                    <i class="fas fa-cogs fa-fw me-2"></i> {{ $i + 1 }} -
                    {{ strtoupper(bin2hex(random_bytes(5))) }} 
                </a>
            @endfor

        </div>
    </div>

</nav>
