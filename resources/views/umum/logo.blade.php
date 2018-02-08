<div class="brand">
    <a href="index.html" class="logo">
        @if (Auth::check() && Auth::user()->level =='admin')
        	A D M I N
        @endif
        @if (Auth::check() && Auth::user()->level =='operator')
        	OPERATOR
        @endif
        @if (Auth::check() && Auth::user()->level =='client')
        	VISITOR
        @endif
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
