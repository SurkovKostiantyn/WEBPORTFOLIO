<div class="content">
    <h3>Lesson 1</h3>
    <b>Presentation:</b>
    <a href="https://docs.google.com/presentation/d/1vStwVV_O-Ydzg9oo4fAwOq3tqDCdNf3ucCLevCqEsJQ/edit?usp=sharing" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i>&NonBreakingSpace;Перейти на Google Disk</a>
    <b>Материал урока:</b>
    <a href="https://github.com/nesh-ua/onix-academy-php/tree/master/lessons/lesson-01" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i>&NonBreakingSpace;Перейти на Github</a>
    <b>Рекомендуемые ссылки:</b>
    <a href="https://www.jetbrains.com/phpstorm/promo/" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i>&NonBreakingSpace;Редактор кода для РНР</a>
    <a href="https://www.php.net/manual/ru/index.php" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i>&NonBreakingSpace;Документация по РНР</a>
    <a href="https://www.php.net/manual/ru/ini.php" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i>&NonBreakingSpace;Описание директив php.ini</a>
    <a href="https://www.php.net/manual/ru/extensions.php" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i>&NonBreakingSpace;Список/классификация модулей PHP</a>
    <b><i class="fa fa-list" aria-hidden="true"></i>&NonBreakingSpace;Задание:</b>
    <ul>
        <li>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>&NonBreakingSpace;Установить php
        </li>
        <li>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>&NonBreakingSpace;Создать репозиторий на github
        </li>
        <li>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>&NonBreakingSpace;Создать в директории php скрипт, который будет выводить Hello World с текущей датой на экран
        </li>
        <li>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>&NonBreakingSpace;Убедиться, что веб-сервер работает и скрипт выводит фразу Hello World 2022-02-12 (дата должна быть текущей)
        </li>
    </ul>
    <b>Result:</b>
    <select class="select-css" name="formats" size="1" id="lesson1" onChange="update();">
        <option value="Y - m - d" selected  >2022 - 01 - 01</option>
        <option value="Y / m / d"           >2022 / 01 / 01</option>
        <option value="d.m.Y"               >01.01.2022</option>
        <option value="d.m.y"               >01.01.22</option>
        <option value="D, d M, Y"           >Mon, 1 Jan, 2022</option>
        <option value="r"                   >RFC 2822</option>
        <option value="c"                   >ISO 8601</option>
    </select>
    <a id="date" class="result"></a>
</div>
<script>
    window.onload = function(){update()};
    function update() {
        let select = document.getElementById('lesson1');
        let value = select.options[select.selectedIndex].value;
        let output = document.getElementById('date');
        $.ajax({
            url: 'includes/ajax/ajax.php',
            method: 'post',
            dataType: 'html',
            data: {format: value},
            success: function (data) {
                output.innerHTML = data;
            }
        });
    }
</script>