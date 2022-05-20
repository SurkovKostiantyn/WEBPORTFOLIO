<div class="content">
    <h3 style="width: 100%">Lesson 1</h3>
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
    <select class="button-css" name="formats" size="1" id="lesson1" onChange="update();">
        <option value="Y - m - d" selected  >2022 - 01 - 01</option>
        <option value="Y / m / d"           >2022 / 01 / 01</option>
        <option value="d.m.Y"               >01.01.2022</option>
        <option value="d.m.y"               >01.01.22</option>
        <option value="D, d M, Y"           >Mon, 1 Jan, 2022</option>
        <option value="r"                   >RFC 2822</option>
        <option value="c"                   >ISO 8601</option>
    </select>
<pre id="date"></pre>
    <hr>
    <h3 style="width: 100%">Lesson 2</h3>
    <b>Presentation:</b>
    <a href="https://drive.google.com/file/d/17JDIiRgV1_MHxcnPam8InS4akKl97f9J/view?usp=sharing" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i>&NonBreakingSpace;Перейти на Google Disk</a>
    <b>Материал урока:</b>
    <a href="https://github.com/nesh-ua/onix-academy-php/blob/master/lessons/lesson-02/" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i>&NonBreakingSpace;Перейти на Github</a>
    <b>Рекомендуемые ссылки:</b>
    <a href="https://www.php.net/manual/ru/language.types.php" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i>&NonBreakingSpace;www.php.net</a>
    <b><i class="fa fa-list" aria-hidden="true"></i>&NonBreakingSpace;Задание:</b>
    <ul>
        <li>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>&NonBreakingSpace;<strong>Задание №1 - Clock</strong><br>
            Часы показывают h часов, m минут и s секунд после полуночи. Ваша задача — написать функцию, которая возвращает время с полуночи в миллисекундах.
        </li>
        <li>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>&NonBreakingSpace;<strong>Задание №2 - Counting Duplicates</strong><br>
            Напишите функцию, которая будет возвращать количество различных буквенных символов и цифр, не зависящих от регистра, встречающихся во входной строке более одного раза. Можно предположить, что входная строка содержит только буквы (как прописные, так и строчные) и числовые цифры.
        </li>
        <li>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>&NonBreakingSpace;<strong>Задание №3 - Create Phone Number</strong><br>
            Напишите функцию, которая принимает массив из 10 целых чисел (от 0 до 9) и возвращает строку этих чисел в виде номера телефона.
            createPhoneNumber([1,2,3,4,5,6,7,8,9,0]); // => returns "(123) 456-7890"
            Возвращаемый формат должен быть правильным, чтобы выполнить эту задачу. Не забудьте пробел после закрывающей скобки!
        </li>
        <li>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>&NonBreakingSpace;Задание №4 - Count of languages</strong><br>
            Вам будет предоставлен ассоциативный массив, представляющий данные о разработчиках, которые подписались на участие в следующей встрече программистов, где вы организатор. Ваша задача — вернуть массив, который включает количество языков программирования, представленных на встрече.
            Дано:<br>
<pre>
$list1 = [
    [
        "first_name" => "Noah",
        "last_name" => "M.",
        "country" => "Switzerland",
        "continent" => "Europe",
        "age" => 19,
        "language" => "C"
    ],
    [
        "first_name" => "Anna",
        "last_name" => "R.",
        "country" => "Liechtenstein",
        "continent" => "Europe",
        "age" => 52,
        "language" => "JavaScript"
    ],
    [
        "first_name" => "Ramon",
        "last_name" => "R.",
        "country" => "Paraguay",
        "continent" => "Americas",
        "age" => 29,
        "language" => "Ruby"
    ],
    [
        "first_name" => "George",
        "last_name" => "B.",
        "country" => "England",
        "continent" => "Europe",
        "age" => 81,
        "language" => "C"
    ]
];
</pre>
    Ваша функция должна возвращать следующий ассоциативный массив:
<pre>
[
    "C" => 2,
    "JavaScript" => 1,
    "Ruby" => 1
]
</pre>
        </li>
        <li>
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>&NonBreakingSpace;<strong>Задание №5 - Who likes it?</strong><br>
            Вы, наверное, знаете систему «лайков» из Facebook и других страниц. Люди могут «лайкать» сообщения в блогах, изображения или другие элементы. Мы хотим создать текст, который должен отображаться рядом с таким элементом.
            Реализуйте функцию принимающую массив с именами людей, которым понравился элемент. Он должен возвращать отображаемый текст, как показано в примерах:
<pre>
[]                                -->  "no one likes this"
["Peter"]                         -->  "Peter likes this"
["Jacob", "Alex"]                 -->  "Jacob and Alex like this"
["Max", "John", "Mark"]           -->  "Max, John and Mark like this"
["Alex", "Jacob", "Mark", "Max"]  -->  "Alex, Jacob and 2 others like this"
</pre>
        </li>
    </ul>
    <b>Result:</b>
    <p>Задание №1.</p>
<pre>
Для справки: в 1 с - 1000 мс.
</pre>
<button class="button-css" id="task1btn" onclick="btnUpdate();"></button>
<pre id="task1"></pre>
    <p>Задание №2.</p>
    <textarea class="button-css" placeholder="Type some words (only English)" id="task2input" type="text"></textarea>
    <button class="button-css" type="button" onclick="CountingDuplicates();">PRESS ME</button>
    <pre id="task2" class="result">Answer will appear this row</pre>
    <p>Задание №3.</p>
    <input class="button-css" maxlength="10" id="input3" title="Only digits like 0661259997" placeholder="Enter phone number" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');">
    <button class="button-css" type="button" onclick="showNumber();">PRESS ME</button>
    <pre id="task3">Answer will appear this row</pre>
    <p>Задание №4.</p>
<pre>
<?php $Lessons->lesson1task4(); ?>
</pre>
<b>Just used that:</b>
<pre>
$counts = array_count_values(
    array_column( $list1, 'language')
);
print_r($counts);
</pre>
    <p>Задание №5.</p>
<pre>
<?= $Lessons->getLikes(0); ?><br>
<?= $Lessons->getLikes(1); ?><br>
<?= $Lessons->getLikes(2); ?><br>
<?= $Lessons->getLikes(3); ?><br>
<?= $Lessons->getLikes(4); ?><br>
<?= $Lessons->getLikes(25);?><br>
</pre>
<hr>
    <h3 style="width: 100%">Lesson 3</h3>
    <b>Presentation:</b>
    <p>26.05.2022</p>
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
    let task1timer = setInterval(getTime, 1);

    function getTime(){
        let task1 = document.getElementById('task1');
        let date = new Date();

        let h = date.getHours(), m = date.getMinutes(), s = date.getSeconds(), ms = date.getMilliseconds();
        let pass = ms + (s * 1000) + (m * 60 + 1000) + (h * 60 * 60 * 1000);
        task1.innerHTML = 'С полуночи прошло ' + pass + 'ms<br>' +
            '(' + h + 'h ' + m + 'm ' + s + 's ' + ms + 'ms)<br>' +
            h + 'h = ' + (h * (3600 * 1000)) + ' ms<br>' +
            m + 'm = ' + (m * (60 * 1000)) + ' ms<br>' +
            s + 's = ' + (s * 1000) + ' ms<br>' +
            ms + 'ms<br>';
    }
    function btnUpdate(){
        let btn =  document.getElementById('task1btn');
        let btnName;
        if(task1timer){
            clearInterval(task1timer);
            task1timer = false;
            btnName = 'START IT';
        }
        else{
            task1timer = setInterval(getTime, 1);
            btnName = 'STOP IT';
        }
        btn.innerHTML = btnName;
    }

    function CountingDuplicates(){
        let a = document.getElementById('task2');
        let text = document.getElementById('task2input');

        if(!text.value)
            text.value = "Type some words";

        $.ajax({
            url: '/includes/ajax/ajax.php',
            method: 'post',
            dataType: 'html',
            data: {string: text.value},
            success: function (data) {
                a.innerHTML = data;//string + " " + text.value.length + data;
            }
        });
    }

    function showNumber(){
        let phoneNumber = document.getElementById('input3').value;
        if(phoneNumber.length < 10){
            document.getElementById('task3').innerHTML = 'Please, type correct tel number (10 dig).';
        }else {
            $.ajax({
                url: '/includes/ajax/ajax.php',
                method: 'post',
                dataType: 'html',
                data: {num: phoneNumber},
                success: function (data) {
                    document.getElementById('task3').innerHTML = data;
                }
            });
        }
    }

    getTime();
    btnUpdate();
</script>