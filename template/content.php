 <?php 
    if (isset($_GET['page'])) {
        $page = "pages/" . $_GET['page'] . ".php";
        if (file_exists($page)) {
            include $page;
        } else {
            header("location: 404.php");
        }
    } else {
        include "pages/home.php";
    }
?>