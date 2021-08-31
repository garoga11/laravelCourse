<header>
    <h1>
        CRUDSITO
    </h1>
    <nav>
        <ul>
         
           
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">About us</a></li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'active' : ''}}">Contact</a></li>
        </ul>
    </nav>
</header>