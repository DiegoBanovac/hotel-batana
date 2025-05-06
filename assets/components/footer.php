<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">Hotel Batana</div>
        <div class="footer-stars">★★★★★</div>
        
        <div class="footer-content">
            <div class="footer-section">
                <p>Hotel vaših snova na dohvatu ruke.</p>
            </div>
            
            <div class="footer-section">
                <p>Pretplatite se na naš newsletter</p>
                <div class="footer-newsletter">
                    <input type="email" id="newsletter-email" placeholder="E-mail">
                    <button id="subscribe-button">Pretplati se</button>
                    <p id="newsletter-message" class="text-success mt-2"></p>
                </div>
            </div>
            
            <div class="footer-section">
                <p>Povežite se s nama</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        
        <a href="#" class="footer-back-to-top">
            Vrati se na vrh <span>↑</span>
        </a>
        
        <div class="footer-divider"></div>
        
        <div class="footer-copyright">
            © 2025 Batana d.d
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $("#subscribe-button").click(function() {
        var email = $("#newsletter-email").val().trim();

        if (email === "") {
            alert("Molimo unesite svoj e-mail.");
            return;
        }

        // Provjera formata e-maila
        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailRegex.test(email)) {
            alert("Molimo unesite validan e-mail.");
            return;
        }

        // Slanje podataka na server putem AJAX-a
        $.ajax({
            url: 'subscribe_newsletter.php',
            type: 'POST',
            data: { email: email },
            success: function(response) {
                $("#newsletter-message").text(response.message);

                // Ako je uspješno, očistiti input
                if (response.success) {
                    $("#newsletter-email").val('');
                }
            },
            error: function(xhr, status, error) {
                alert("Došlo je do pogreške. Pokušajte ponovno.");
            }
        });
    });
});
</script>
