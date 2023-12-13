<header>
      <div class="header-container">
         <nav class="header-nav-bar">
				<div class="header-nav-logo">
					<a href="home">
						<img width="100px" src="assets/img/rhu-logo.png" alt="Clinic Logo">
					</a>
				</div>
				<ul class="header-nav-lists">
						<li class="header-nav-list">
							<a class="header-nav-link" href="home">Home</a>
						</li>
						<li class="header-nav-list"><a class="header-nav-link" href="facilities">Facilities</a></li>
						<li class="header-nav-list"><a class="header-nav-link" href="contact">Contact Us</a></li>
					</ul>
            
            <div class="header-hamburger-icon">
               <div class="header-hamburger-line-1"></div>
               <div class="header-hamburger-line-2"></div>
               <div class="header-hamburger-line-3"></div>
            </div>
         </nav>
      </div>

      </div>
	</header>

	<script>
    
    var currentUrl = window.location.href;
    var navLinks = document.querySelectorAll('.header-nav-link');

    navLinks.forEach(function (link) {
        if (link.href === currentUrl) {
            link.classList.add('header-active');
        }
    });
</script>