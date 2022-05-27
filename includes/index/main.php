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

    <div class="article-elements">
        <input class="button-css"
               type="search"
               id="site-search"
               name="q"
               placeholder="&#xf002; Write your request..">
        <?php
        if(isset($_SESSION['username'])) {
            echo "<input type='button' class='button-css add' value='&#xf067; Add New Article'>";
        }
        ?>
    </div>

    <table class="article-tab">
        <thead>
            <tr>
                <td class="table-checkbox">
                    <input class="custom-checkbox" type="checkbox">
                </td>
                <td class="table-image">
                    IMAGE
                </td>
                <td class="table-title">
                    TITLE
                </td>
                <td class="table-author">
                    AUTHOR
                </td>
                <td class="table-modified">
                    LAST MODIFIED
                </td>
                <td class="table-status">
                    STATUS
                </td>
                <td class="table-action">
                    ACTION
                </td>
            </tr>
        </thead>
        <tbody>
        <?php for($i = 0; $i < 10; $i++): ?>
            <tr>
                <td class="table-checkbox">
                    <input class="custom-checkbox" type="checkbox">
                </td>
                <td class="table-image">
                    <img alt="alt" height="32" src="/files/bob.png">
                </td>
                <td class="table-title">
                    Lorem ipsum dolor sit amet
                </td>
                <td class="table-author">
                    John Doe
                </td>
                <td class="table-modified">
                    12/34/5678
                </td>
                <td class="table-status">
                    Published
                </td>
                <td class="table-action">
                    <a class="table-link"><i class="fa fa-pencil" aria-hidden="true"></i></a>&NonBreakingSpace;
                    <a class="table-link"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
            </tr>
        <?php endfor; ?>
        </tbody>
    </table>

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