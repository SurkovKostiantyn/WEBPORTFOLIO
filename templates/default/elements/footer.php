    <footer>
        <p>Follow me:</p>
        <div class="footer-links">
            <a href="https://www.instagram.com/constantin296/" target="_blank">
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100001909817025" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=kskrua@gmail.com.com" target="_blank">
                <i class="fa fa-google" aria-hidden="true"></i>
            </a>
            <a>
                <i class="fa fa-github" aria-hidden="true"></i>
            </a>
            <a>
                <i class="fa fa-telegram" aria-hidden="true"></i>
            </a>
        </div>
        <p>Helpful links:</p>
        <div class="footer-info" id="fInfo">
            <a href="https://w3schools.org" target="_blank">W3schools</a>
            <a href="https://developer.mozilla.org" target="_blank">Resources for Developers</a>
            <a href="https://cityhost.ua" target="_blank">CityHost</a>
            <a href="https://www.codecademy.com" target="_blank">Codeacademy</a>
            <a href="https://getbootstrap.com" target="_blank">Boostrap</a>
            <a href="https://fontawesome.com" target="_blank">Fontawesome</a>
            <a href="https://onix.academy" target="_blank">Onix Academy</a>
        </div>
        <a class="footer-copy">Copyright © 2022 Surkov Kostiantyn for Onix Academy</a>
    </footer>
    <script>
        function displayWindowSize(){
            let width = document.body.clientWidth;
            let fInfo = document.getElementById('fInfo');
            let count = Math.floor(width/300);
            fInfo.style.columnCount = String(count);
        }
        window.addEventListener("resize", displayWindowSize);
        displayWindowSize();
    </script>
</body>
</html>

