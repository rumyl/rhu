<footer class="footer">
		<div class="footer-container">
			<nav class="footer-nav">
				<div class="footer-description">
					<h3 class="footer-description-title">Patient Information Management </h3>
					<p>Hospitality and Comfort are our watchwords</p>
				</div>
				<div class="footer-contact-us">
					<h3 class="footer-description-title">Contact Us</h3>
					<p class="footer-description-detail"> 
						<img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">

						<span>123 Anywhere St. Any City, ST 12345</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number"> 
						<span>
                        (123) 456-7890</span></p>
					<p class="footer-description-detail">
						<img src="./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
						<span>hello@sample.com</span> </p>
				</div>			
                <div class="footer-follow-us">
                        <h3 class="footer-description-title">Follow Us</h3>
                        <ul class="footer-follow-us-lists">
                            <li class="follow-us-list">
                                <a href="#">
                                    <img src="./assets/img/facebook.svg" alt="star hotels facebook page">
                                </a>
                            </li>
                            <li class="follow-us-list">
                                <a href="#">
                                    <img src="./assets/img/twitter.svg" alt="star hotels twitter page">
                                </a>
                            </li>
                            <li class="follow-us-list">
                                <a href="#">
                                    <img src="./assets/img/instagram.svg" alt="star hotels instagram page">
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
	</footer>
	<script defer async>
		(() => {
			const loader = document.getElementById('loader');
			const scrollBar = document.getElementsByClassName('scroll-bar')[0];
			window.addEventListener('load', () => {
				loader.classList.add('none');
				scrollBar.classList.remove('scroll-bar')
			});
		})();
	</script>
	<script  defer async src="assets/js/toggleHamburger.js"></script>
</body>
</html>