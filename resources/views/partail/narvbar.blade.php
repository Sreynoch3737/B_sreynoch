<div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
        <a href="{{route('front.home')}}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">{{trans('menu.home')}}</a>
        <a href="{{route('front.about')}}" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : '' }}">About</a>
        <a href="{{route('front.service')}}" class="nav-item nav-link {{ (request()->is('service')) ? 'active' : '' }}">Services</a>
        <a href="{{route('front.package')}}" class="nav-item nav-link {{ (request()->is('package')) ? 'active' : '' }}">Packages</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu m-0">
                <a href="{{route('front.distination')}}" class="nav-item nav-link {{ (request()->is('package')) ? 'active' : '' }}">Destination</a>
                <a href="{{route('front.booking')}}" class="nav-item nav-link {{ (request()->is('package')) ? 'active' : '' }}">Booking</a>
                <a href="{{route('front.travelguide')}}" class="nav-item nav-link {{ (request()->is('package')) ? 'active' : '' }}">Travel Guides</a>
                <a href="{{route('front.testimonial')}}" class="nav-item nav-link {{ (request()->is('package')) ? 'active' : '' }}">Testimonial</a>
                <a href="404.html" class="dropdown-item">404 Page</a>
            </div>
        </div>
        <a href="contact.html" class="nav-item nav-link">Contact</a>
        <?php  
            $flag = app()->getlocale();
            if($flag=="en"){
                $flag="us";
            }
        ?>
    <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle               
        " data-bs-toggle="dropdown"><i
                class="flag-icon flag-icon-{{ $flag=='kh'?'kh':'' }}{{ $flag=='us'?'us':'' }} mr-2"></i> {{
            $flag=='kh'?'ភាសាខ្មែរ':'' }}{{
            $flag=='us'?"English":'' }}</a>
        <div class="dropdown-menu m-0">
            <a href="{{url('lang/kh')}}" class="dropdown-item {{ $flag=='kh'?'active':'' }}                    
                "><i class="flag-icon flag-icon-kh mr-2"></i> ភាសាខ្មែរ</a>
            <a href="{{url('lang/en')}}" class="dropdown-item {{ $flag=='us'?'active':'' }}"><i
                    class="flag-icon flag-icon-us mr-2"></i> English</a>
        </div>
    </div>
    </div>
    <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
</div>