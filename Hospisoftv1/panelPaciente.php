<?php
session_start();
if (!isset($_SESSION['usuarioActivo'])) {
    header('Location: index.php');
}else{


require_once 'plantillas/cabeceraP.php';
?>
<!-- inicio del contenido -->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h5>GRÁFICAS</h5>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis velit accusantium tempore itaque sit natus molestiae dolor earum quas nostrum officia deserunt assumenda omnis, animi fuga soluta id nesciunt? Quas.
                Aliquid ducimus officiis, ab praesentium, quisquam esse laboriosam dicta, perferendis quidem atque rerum mollitia eius labore voluptates. Praesentium est odio, consectetur ab at quis dolores porro, fugiat, illum dolorum fuga?
                Cumque corrupti ab nemo. Possimus sit odit asperiores beatae error tenetur rem? Ab rem voluptatibus asperiores libero harum est dolorum, possimus adipisci consectetur, provident deserunt, quo at rerum alias repellendus.
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="images/médicos-influencers-en-Instagram.jpg" alt="">
            </div>
        </div>
    </div>
</main>


<?php
require_once 'plantillas/footer.php';
}
?>