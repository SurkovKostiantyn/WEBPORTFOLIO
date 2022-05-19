<div class="content">
    <?php
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        echo '<p>Hello, '.$username.'! Your id is '.$_SESSION['id'].'</p>';
    }else{
        echo '<p>Hello, user! <a href="/?page=login">Sing up</a> for more info.</p>';
    }
    ?>
    <p>
        Hi! My name is K. and I'm trying to learn front & back by myself.
        This site present all my knowledge at this moment and created
        for being my own portfolio for future employers.
    </p>
    <p>
        This site created with using PHP, CSS and simple examples of JS. Realisation of some elements of this site you can find on links below. This links contains a lot of code examples
        that explain chosen way how to write each element of site.
    </p>
    <div class="todoList">
    <?php
        if(isset($_SESSION['id']))
            echo $Connect->getTODOList($_SESSION['id']);
        else
            echo $Connect->getTODOList(-1);
    ?>
    </div>
</div>
<script>
    function changeTick(todoID, tickID, status){
        $.ajax({
            url: '/includes/ajax/ajax.php',
            method: 'post',
            dataType: 'html',
            data: {id: todoID, tickID: tickID, status: status},
            success: function (data) {
                window.location.replace("https://webportfolio.com.ua");
                //console.log('id = ' + data);
            }
        });
    }
</script>