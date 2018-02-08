<div class="brand">
    <a href="index.html" class="logo">
        <?php if(Auth::check() && Auth::user()->level =='admin'): ?>
        	A D M I N
        <?php endif; ?>
        <?php if(Auth::check() && Auth::user()->level =='operator'): ?>
        	OPERATOR
        <?php endif; ?>
        <?php if(Auth::check() && Auth::user()->level =='client'): ?>
        	VISITOR
        <?php endif; ?>
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
