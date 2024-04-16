<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
        <a class="navbar-brand" href="{{ url('/') }}"><strong>Forward IT</strong></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('https://www.forwardit.ai/our-work') }}">Our Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('https://www.forwardit.ai/solutions') }}">Solutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inventory.index') }}">Inventory List</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
