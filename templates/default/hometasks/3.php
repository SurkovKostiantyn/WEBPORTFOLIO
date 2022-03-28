<p>Материал урока:</p>
<a href="https://github.com/nesh-ua/onix-academy-php/blob/master/lessons/lesson-02" target="_blank">Перейти на Github</a>
<p>Задание №1 - Clock</p>
Часы показывают h часов, m минут и s секунд после полуночи. Ваша задача — написать функцию, которая возвращает время с полуночи в миллисекундах.
<pre>
    <code>Для справки: в 1 с - 1000 мс.</code>
</pre>
<p>Result:</p>
<button id="task1btn" onclick="btnUpdate();"></button><br>
<a id="task1" class="result"></a>
<p>Задание №2 - Counting Duplicates</p>
Напишите функцию, которая будет возвращать количество различных буквенных символов и цифр, не зависящих от регистра, встречающихся во входной строке более одного раза. Можно предположить, что входная строка содержит только буквы (как прописные, так и строчные) и числовые цифры.
<p>Result:</p>
<form id="form3">
    <input value="Type some words" id="task2input" type="text"><br>
    <button type="button" onclick="CountingDuplicates();">PRESS ME</button><br>
    <a id="task2" class="result">Answer will appear this row</a>
</form>
<p>Задание №3 - Create Phone Number</p>
Напишите функцию, которая принимает массив из 10 целых чисел (от 0 до 9) и возвращает строку этих чисел в виде номера телефона.
<p>Result:</p>
<form id="form3">
    <input maxlength="10" id="input3" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');"><br>
    <button type="button" onclick="showNumber();">PRESS ME</button><br>
    <a id="task3" class="result">Answer will appear this row</a>
</form>
<p>Задание №4 - Count of languages</p>
Вам будет предоставлен ассоциативный массив, представляющий данные о разработчиках, которые подписались на участие в следующей встрече программистов, где вы организатор. Ваша задача — вернуть массив, который включает количество языков программирования, представленных на встрече. Например, учитывая следующий входной массив:
<pre style="display: block; overflow-x: auto;">
    <code id="code4">
<span style="color: orange">$list1</span> <span style="color: #ffa200"> = array (
    array (
        "</span>first_name<span style="color: #ffa200">" => "</span>Noah<span style="color: #ffa200">",
        "</span>last_name<span style="color: #ffa200">" => "</span>M.<span style="color: #ffa200">",
        "</span>country<span style="color: #ffa200">" => "</span>Switzerland<span style="color: #ffa200">",
        "</span>continent<span style="color: #ffa200">" => "</span>Europe<span style="color: #ffa200">",
        "</span>age<span style="color: #ffa200">" => </span>19<span style="color: #ffa200">,
        "</span>language<span style="color: #ffa200">" => "</span>C"<span style="color: #ffa200">
    ),
    array (</span>
        "</span>first_name<span style="color: #ffa200">" => "</span>Anna<span style="color: #ffa200">",
        "</span>last_name<span style="color: #ffa200">" => "</span>R.<span style="color: #ffa200">",
        "</span>country<span style="color: #ffa200">" => "</span>Liechtenstein<span style="color: #ffa200">",
        "</span>continent<span style="color: #ffa200">" => "</span>Europe<span style="color: #ffa200">",
        "</span>age<span style="color: #ffa200">" => </span>52<span style="color: #ffa200">,
        "</span>language<span style="color: #ffa200">" => "</span>JavaScript"<span style="color: #ffa200">
    ),
    array (</span>
        "</span>first_name<span style="color: #ffa200">" => "</span>Ramon<span style="color: #ffa200">",
        "</span>last_name<span style="color: #ffa200">" => "</span>R.<span style="color: #ffa200">",
        "</span>country<span style="color: #ffa200">" => "</span>Paraguay<span style="color: #ffa200">",
        "</span>continent<span style="color: #ffa200">" => "</span>Americas<span style="color: #ffa200">",
        "</span>age<span style="color: #ffa200">" => </span>29<span style="color: #ffa200">,
        "</span>language<span style="color: #ffa200">" => "</span>Ruby"<span style="color: #ffa200">
    ),
    array (</span>
        "</span>first_name<span style="color: #ffa200">" => "</span>George<span style="color: #ffa200">",
        "</span>last_name<span style="color: #ffa200">" => "</span>B.<span style="color: #ffa200">",
        "</span>country<span style="color: #ffa200">" => "</span>England<span style="color: #ffa200">",
        "</span>continent<span style="color: #ffa200">" => "</span>Europe<span style="color: #ffa200">",
        "</span>age<span style="color: #ffa200">" => </span>81<span style="color: #ffa200">,
        "</span>language<span style="color: #ffa200">" => "</span>C"<span style="color: #ffa200">
    )
);</span>
    </code>
</pre>
<p>Result:</p>
<a id="task4" class="result"></a>
<pre><code>Just used that:<br>
<span style="color:orange">$counts</span> = <span style="color: orange">array_count_values(
    array_column(</span><span style="color:green">$list1</span><span style="color: orange">, '</span>language<span style="color: orange">')
);</span></code></pre>

<p>Задание №5 - Who likes it?</p>
Вы, наверное, знаете систему «лайков» из Facebook и других страниц. Люди могут «лайкать» сообщения в блогах, изображения или другие элементы. Мы хотим создать текст, который должен отображаться рядом с таким элементом.
Реализуйте функцию, которая принимает массив, содержащий имена людей, которым понравился элемент. Он должен возвращать отображаемый текст, как показано в примерах:
<pre style="display: block; overflow-x: auto;">
    <code>
[]                                -->  "no one likes this"
["Peter"]                         -->  "Peter likes this"
["Jacob", "Alex"]                 -->  "Jacob and Alex like this"
["Max", "John", "Mark"]           -->  "Max, John and Mark like this"
["Alex", "Jacob", "Mark", "Max"]  -->  "Alex, Jacob and 2 others like this"
    </code>
</pre>
<p>Result:</p>
<a class="result"> <?php echo $Lesson->getLikes(0); ?> </a><br>
<a class="result"> <?php echo $Lesson->getLikes(1); ?> </a><br>
<a class="result"> <?php echo $Lesson->getLikes(2); ?> </a><br>
<a class="result"> <?php echo $Lesson->getLikes(3); ?> </a><br>
<a class="result"> <?php echo $Lesson->getLikes(4); ?> </a><br>
<a class="result"> <?php echo $Lesson->getLikes(25);?> </a><br>

<pre style="display: block; overflow-x: auto;"><code>
<span style="color: orange;">public function</span> <span style="color: yellow;">getLikes</span>(<span style="color: orange;">int</span> <span style="color: violet;">$id</span> = 0): <span style="color: orange;">string</span> {
        <span style="color: orange;">if</span>(<span style="color: violet;">$id</span> < 0 || <span style="color: violet;">$id</span> > sizeof(<span style="color: violet;">$this->likes</span>)) {
        <span style="color: orange;">return</span> 'ERROR: Wrong ID ('.<span style="color: violet;">$id</span>.')';
    }
        <span style="color: violet;">$num</span> = sizeof(<span style="color: violet;">$this->likes[$id]</span>);
    <span style="color: orange;">return match</span> (<span style="color: violet;">$num</span>) {
        0 => 'no one likes this',
        1 => ''.<span style="color: violet;">$this->likes[$id][0]</span>.' likes this',
        2 => ''.<span style="color: violet;">$this->likes[$id][0]</span>.' and '.<span style="color: violet;">$this->likes[$id][1]</span>.' likes this',
        3 => ''.<span style="color: violet;">$this->likes[$id][0]</span>.', '.<span style="color: violet;">$this->likes[$id][1]</span>.' and '.<span style="color: violet;">$this->likes[$id][2]</span>.' likes this',
        <span style="color: orange;">default</span> => ''.<span style="color: violet;">$this->likes[$id][0]</span>.', '.<span style="color: violet;">$this->likes[$id][1]</span>.' and '.(<span style="color: violet;">$num</span> - 2).' others likes this'
    };
}
</code></pre>

<script>
    function task4(){
        let node = document.getElementById('code4');
        let textContent = node.textContent;
        $.ajax({
            url: '/includes/ajax/lesson3_4.php',
            method: 'post',
            dataType: 'html',
            data: {str: textContent},
            success: function (data) {
                document.getElementById('task4').innerHTML = data;
            }
        });
    }

    function showNumber(){
        let phoneNumber = document.getElementById('input3').value;
        if(phoneNumber.length < 10){
            document.getElementById('task3').innerHTML = 'Please, type correct tel number (10 dig).';
        }else {
            $.ajax({
                url: '/includes/ajax/lesson3_2.php',
                method: 'post',
                dataType: 'html',
                data: {num: phoneNumber},
                success: function (data) {
                    document.getElementById('task3').innerHTML = data;
                }
            });
        }
    }

    function resizePage(){
        let panel = document.getElementById('panel3');
        let form = document.getElementById('form3');

        let a = panel.offsetHeight, b = form.offsetHeight;

        panel.style.maxHeight = a + b + "px";
    }

    function CountingDuplicates(){
        let a = document.getElementById('task2');
        let text = document.getElementById('task2input');
        $.ajax({
            url: '/includes/ajax/lesson3.php',
            method: 'post',
            dataType: 'html',
            data: {string: text.value},
            success: function (data) {
                a.innerHTML = data;//string + " " + text.value.length + data;
            }
        });
        setTimeout(resizePage, 200);
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
    getTime();
    btnUpdate();
    task4();
</script>