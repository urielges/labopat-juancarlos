 <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>       
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact</a>
          </li> 
          <?php if(Auth::guest()): ?>
          <li class="nav-item">           
            <a class="nav-link" href="<?php echo e(url('/login')); ?>">Login</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/register')); ?>">Register</a>
          </li>
           <?php else: ?>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            </ul>
        </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>