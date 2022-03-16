<p>
    Also on this site I'll post my home tasks from Onix Academy courses in such blocks as HTML/CSS and PHP.
</p>

<button class="accordion">Lesson 1 (HTML/CSS block)</button>
<div class="panel">
    <?php
        include 'templates/default/hometasks/1.php';
    ?>
</div>

<button class="accordion">Lesson 2 (PHP block)</button>
<div class="panel">
    <?php
        include 'templates/default/hometasks/2.php';
    ?>
</div>

<button class="accordion">Lesson 3</button>
<div class="panel">
    3th home task.
</div>

<script>
    let acc = document.getElementsByClassName("accordion");
    for (let i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>