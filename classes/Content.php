<?php
$content = new Content();

class Content
{
    private string $pagesDir = 'templates/default/pages';
    private string $menu = '';
    private string $nav = '';

    public function getPagesList($class): string
    {
        $files = scandir($this->pagesDir, 0);

        for($i = 0; $i < sizeof($files); $i++) {
            if (str_contains($files[$i], '.php') && !str_contains($files[$i], 'main')) {
                $name = str_replace(".php", null, $files[$i]);
                $this->menu .= '<a class="' . $class . '" href="/?page=' . $name . '">' . strtoupper($name) . '</a>';
            }
        }
        return $this->menu;
    }

    public function getMenuList(): string
    {
        $files = scandir($this->pagesDir, 0);

        for($i = 0; $i < sizeof($files); $i++) {
            if (str_contains($files[$i], '.php') && !str_contains($files[$i], 'main')) {
                $name = str_replace(".php", null, $files[$i]);
                $url = str_replace(".php", null, $_SERVER['REQUEST_URI']);
                $class = null;
                if(str_contains($url, $name)){
                    $class .= 'class="active"';
                }
                $this->nav .= '<a ' . $class . ' href="/?page=' . $name . '">' . strtoupper($name) . '</a>';
            }
        }
        return $this->nav;
    }
}

?>