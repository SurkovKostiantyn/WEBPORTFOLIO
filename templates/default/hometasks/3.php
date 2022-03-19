<p>Задание №1 - Clock</p>
Часы показывают h часов, m минут и s секунд после полуночи. Ваша задача — написать функцию, которая возвращает время с полуночи в миллисекундах.
<pre>
    Для справки: в 1 с - 1000 мс.
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

<script>
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
            url: '/ajax/lesson3.php',
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
</script>