<div class="navbar navbar-default">
    <a class="navbar-brand" href="#">Title</a>
    <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?page=about">About</a></li>
        <li><a href="index.php?page=contactme">Contact</a></li>
        <?php if(isset($_SESSION['user'])){?>
            <?php if($_SESSION['user']['tipeuser'] == "admin"){?>
                <li><a href="index.php?page=siswa">siswa</a></li>
            <?php }?>
        <?php }?>
        <li><a href="index.php?page=contact">contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php if(!isset($_SESSION['user'])){?>
        <li><a href="login.php">login</a></li>
        <?php }else{?>
            <li><a href="#"><?php echo $_SESSION['user']['nama']?></a></li>
        <li><a href="logout.php">logout</a></li>
        <?php }?>
</ul>
</div>