<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">OpenDiscovery</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{\Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
                <li class="{{\Request::is('resolver') ? 'active' : ''}}"><a href="/resolver">Resolver</a></li>
                <li class="{{\Request::is('publisher') ? 'active' : ''}}"><a href="/publisher">Publisher</a></li>
                <li class="{{\Request::is('specifications') ? 'active' : ''}}"><a href="/specifications">Specifications</a></li>
                <li class="{{\Request::is('investigator') ? 'active' : ''}}"><a href="/investigator">Investigator</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
