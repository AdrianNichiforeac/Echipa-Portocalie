<?php $active = $_SERVER["REQUEST_URI"]; ?>

<nav>
    <a class="logo" href="/">Amenzi ONLINE</a>
    <ul class="main-menu">
        <li class="item">
            <a <?= $active == '/amenzi.php'?"class='active'":"";?> href="amenzi.php">Amenzi</a>
        </li>
    </ul>
</nav>