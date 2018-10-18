<ul class="navbar-nav">
    <?php
        foreach ($navItems as $item){
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"$item[path]\">$item[title]</a></li>";
        }
    ?>
</ul>
