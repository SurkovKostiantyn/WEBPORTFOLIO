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
&lt;?php
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
?&gt;
</pre>
            Ваша функция должна возвращать следующий ассоциативный массив:
<pre>
&lt;?php
    [
        "C" => 2,
        "JavaScript" => 1,
        "Ruby" => 1
    ]
?&gt;
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