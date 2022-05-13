<ul id="leftmenu">
    <!-- <p style="color: white !important; font-weight: bold;">
        
    </p> -->
<?php
//    Logger::info("> menu.php");
    foreach($pagedata as $pk=>$pd){
?>
    <li class="<?php echo $page == $pk ? 'active' : '' ?>">
        <a href="index.php?page=<?php echo $pk ?>"><?php echo $pd['title_1'] ?></a>
    </li>
<?php
    }
?>
    <!-- <li>
        <a href="logout.php">Logout</a>
    </li> -->
</ul>