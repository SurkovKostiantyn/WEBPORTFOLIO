<p>Презентация:</p>
<a href="https://docs.google.com/presentation/d/1vStwVV_O-Ydzg9oo4fAwOq3tqDCdNf3ucCLevCqEsJQ/edit?usp=sharing" target="_blank">Перейти на Google Disk</a>
<p>Материал урока:</p>
<a href="https://github.com/nesh-ua/onix-academy-php/tree/master/lessons/lesson-01" target="_blank">Перейти на Github</a>
<p>Рекомендуемые ссылки:</p>
<a href="https://www.jetbrains.com/phpstorm/promo/" target="_blank">Редактор кода для РНР</a><br>
<a href="https://www.php.net/manual/ru/index.php" target="_blank">Докуменатция по РНР</a><br>
<a href="https://www.php.net/manual/ru/ini.php" target="_blank">Описание директив php.ini</a><br>
<a href="https://www.php.net/manual/ru/extensions.php" target="_blank">Список/классификация модулей PHP</a>
<p>Задание:</p>
<ul>
    <li>
        <i class="fa fa-check" aria-hidden="true"></i>&nbspУстановить php
    </li>
    <li>
        <i class="fa fa-check" aria-hidden="true"></i>&nbspСоздать репозиторий на github
    </li>
    <li>
        <i class="fa fa-check" aria-hidden="true"></i>&nbspСоздать в директории php скрипт, который будет выводить Hello World с текущей датой на экран
    </li>
    <li>
        <i class="fa fa-check" aria-hidden="true"></i>&nbspУбедиться, что веб-сервер работает и скрипт выводит фразу Hello World 2022-02-12 (дата должна быть текущей)
    </li>
</ul>
<p>Result:</p>
<p>Выберите формат времени:</p>
<select class="select-css" name="formats" size="1" id="lesson1" onChange="update()">
    <option value="Y - m - d"           >2022 - 01 - 01</option>
    <option value="Y / m / d"           >2022 / 01 / 01</option>
    <option value="d.m.Y"               >01.01.2022</option>
    <option value="d.m.y"               >01.01.22</option>
    <option value="D, d M, Y"           >Mon, 1 Jan, 2022</option>
    <option value="r"                   >RFC 2822</option>
    <option value="c"                   >ISO 8601</option>
</select>
<br>
<a id="date" class="result"></a>

<script>
    function update() {
        let select = document.getElementById('lesson1');
        let value = select.options[select.selectedIndex].value;
        let output = document.getElementById('date');
        $.ajax({
            url: '/ajax/lesson2.php',
            method: 'post',
            dataType: 'html',
            data: {format: value},
            success: function (data) {
                output.innerHTML = data;
            }
        });
    }
    update();
</script>