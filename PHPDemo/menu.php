<nav>
    <ul>
        <?php
        foreach($pages as $pageKey => $pageArray)        {
            echo "<li><a href='?page=$pageKey'>$pageArray[0]</a></li>";
        }

        ?>
    </ul>
</nav>

<?php

?>