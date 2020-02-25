<nav>
    <?php
        foreach($data['menu'] as $button){
            print '<a class="menu-link" href="/' . CONFIG['site_path']
             . $button['link'] . '">' . $button['name'] . '</a>';
        }
    ?>
</nav>