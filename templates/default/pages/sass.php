<div class="content" id="CP">
    <div class="content-pages" id="empty-CP"></div>
    <script>
        const box = document.getElementById('empty-CP');

        if (box.textContent.trim() === '') {
            box.innerHTML = "Hello!<br>\n<img src=\'files\/empty.gif\'><br>\nSorry, but this page isn\'t created yet."
            box.className += " empty";
        }
    </script>
</div>