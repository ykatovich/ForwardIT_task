<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container ">
        <a class="navbar-brand" href="{{ url('https://www.forwardit.ai/') }}"><strong>Forward IT</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
