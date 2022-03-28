<div class="topnav" id="myTopnav">
    <a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i></a>
    <?= $Content->getMenuList(); ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction();myFunction2()">
        <i class="fa fa-bars"></i>
    </a>
    <a class="login" onclick="ShowModal();" style="width:auto;">
        <div id="id01" class="modal">
            <form class="modal-content">
                <div class="regForm" id="LF01">
                    <input type="text" placeholder="Enter login" name="login" required><br>
                    <input type="text" placeholder="Enter Email" name="email" required><br>
                    <input type="password" placeholder="Enter Password" name="psw" required><br>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
                    <object><a href="#" onclick="ShowLF2();">Already have an account?</a></object><br>
                    <div class="clearfix">
                        <button type="button" onclick="HideModal();" class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
                <div class="loginForm" id="LF02">
                    <input type="text" placeholder="Enter login or email" name="login" required><br>
                    <input type="password" placeholder="Enter Password" name="psw" required><br>
                    <object><a href="#" onclick="ShowLF1();">Don't have an account?</a></object><br>
                    <div class="clearfix">
                        <button type="button" onclick="HideModal();" class="cancelbtn">Cancel</button>
                        <button type="submit" class="signupbtn">Log in</button>
                    </div>
                </div>
            </form>
        </div>
        <i class="fa fa-sign-in" aria-hidden="true"></i>
    </a>
</div>
<script>
    function ShowLF1(){
        document.getElementById('LF01').style.setProperty('display', 'block');
        document.getElementById('LF02').style.setProperty('display', 'none');
    }
    function ShowLF2(){
        document.getElementById('LF01').style.setProperty('display', 'none');
        document.getElementById('LF02').style.setProperty('display', 'block');
    }
    window.onclick = function(event){
        if (event.target === document.getElementById('id01'))
            HideModal();
    }
    function HideModal(){
        document.getElementById('id01').style.setProperty('display', 'none');
    }
    function ShowModal(){
        document.getElementById('id01').style.setProperty('display', 'block');
    }

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

