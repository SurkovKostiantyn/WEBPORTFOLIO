<nav id="navbar">
    <div class="responsive">
        <input id="_1" type="checkbox">
        <a href="/" >
            <i data-navtooltip="Home" class="fa fa-home" aria-hidden="true"></i>
        </a>
        <a href="/?page=shop">
            <i data-navtooltip="Shop" class="fa-solid fa-store"></i>
        </a>

        <?= $Engine->getMenuList(); ?>

        <?php if (isset($_SESSION['username'])): ?>
            <a href="/includes/logout.php" >
                <i data-navtooltip="Exit" class="fa fa-sign-out" aria-hidden="true"></i>
            </a>
        <?php else: ?>
            <a href="/?page=login" >
                <i data-navtooltip="Login" class="fa fa-sign-in" aria-hidden="true"></i>
            </a>
        <?php endif; ?>
        <a href="/?page=cp" >
            <i data-navtooltip="Cabinet" class="fa-solid fa-user"></i>
        </a>
        <a href="/?page=cart" >
            <i data-navtooltip="Cart" class="fa-solid fa-cart-shopping"></i>
        </a>

        <a style="padding: 0;">
            <label class="collapse" for="_1">
                <svg id ="toggleActive" class="ham hamRotate ham1" viewBox="0 0 100 100"  width="40" height="39" onclick="this.classList.toggle('active')">
                    <path
                        class="line top"
                        d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                    <path
                        class="line middle"
                        d="m 30,50 h 40" />
                    <path
                        class="line bottom"
                        d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                </svg>
            </label>
        </a>
    </div>
</nav>