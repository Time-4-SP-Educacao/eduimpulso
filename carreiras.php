<?php
session_start();
if(!isset($_SESSION['id_user'])){
    header("Location: cadastro.php");
    exit;
}
require_once('./nav/menu.html');
?>
<div class="container d-flex justify-content-center align-items-center my-3">
    <div class="row d-flex justify-content-center">
        <?php
            $json = file_get_contents("http://localhost/eduimpulso/servidor/apicourses.php");
            $data = json_decode($json, true);
            foreach ($data as $key => $row){
                $id = $row['id_curso']
        ?>
            <div class="list-group col-12 m-1">
                <a href="<?php echo"./servidor/course.php?id=$id"?>" class="list-group-item list-group-item-action">
                    <?php echo $row["nome"];?>
                </a>
            </div>
        <?php
            }
        ?>

    </div>
</div>

<?php
require_once('./nav/footer.html');
?>
