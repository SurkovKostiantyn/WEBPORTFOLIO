<div class="topnav" id="myTopnav">
    <a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
    <?php
        echo $content->getMenuList();
    ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction();myFunction2()">
        <i class="fa fa-bars"></i>
    </a>
    <a class="login">
        <i class="fa fa-sign-in" aria-hidden="true"></i>
    </a>
</div>

<script>
    let navbar = document.getElementById("myTopnav");

    function myFunction() {
        if (navbar.className === "topnav" || navbar.className === "topnav sticky") {
            navbar.classList.add("responsive");
        } else {
            navbar.classList.remove("responsive");
        }
    }

    window.onscroll = function() {myFunction2()};

    function myFunction2() {
        let header = document.getElementById("hdr")
        let bounding = header.getBoundingClientRect();
        let content = document.getElementById("CP");

        if(bounding.bottom <= 0 ){
            navbar.classList.add("sticky");
            content.style.paddingTop = '90px';
        } else {
            navbar.classList.remove("sticky");
            content.removeAttribute("style");
        }
    }
</script>

