<link rel="stylesheet" href="/assets/css/style.css">
<!-- Grid -->
<div class="w3-row">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
        <!-- Blog entry -->
        <?php DisplayPostsIndex(); ?>
        <!-- END BLOG ENTRIES -->
    </div>

    <!-- Introduction menu -->
    <div class="w3-col l4">
        <!-- About Card -->
        <div class="w3-card w3-margin w3-margin-top">
            <?php DisplayOwner(); ?>
        </div>
        <hr>

        <!-- Posts -->
        <div class="w3-card w3-margin">
            <div class="w3-container w3-padding">
                <h4>Publications populaires</h4>
            </div>
            <ul class="w3-ul w3-hoverable w3-white">
                <?php PopularPosts(); ?>
            </ul>
        </div>
        <hr>

        <!-- Labels / tags -->
        <div class="w3-card w3-margin">
            <div class="w3-container w3-padding">
                <h4>Balise</h4>
            </div>
            <div class="w3-container w3-white">
                <p><?php Tags(); ?></p>
            </div>
        </div>

        <!-- END Introduction Menu -->
    </div>

    <!-- END GRID -->
</div>
<br>
<div class="w3-center">
    <div class="btn-area">
      <b><a href="index.php" class="btn btn-default main_btn" class="w3-bar-item w3-button">Précédent</a></b>
      <b><a href="<?php if($PageNo <= 1){echo "#"; } else { echo "?Page=".($PageNo - 1);} ?>" class="<?php if($PageNo <= 1){echo "w3-disabled"; } ?> w3-bar-item w3-button">&laquo;</a></b>
      <b><a href="<?php if($PageNo >= $TotalPages){ echo "#"; } else { echo "?Page=".($PageNo + 1); } ?>" class="<?php if($PageNo >= $TotalPages){ echo "w3-disabled"; } ?> w3-button">&raquo;</a></b>
      <b><a href="?Page=<?php echo $TotalPages; ?>" class="w3-button" style="">Suivant</a></b>
    </div>
</div>
<!-- END w3-content -->
</div>