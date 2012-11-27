<?php include Doo::conf()->SITE_PATH .  Doo::conf()->PROTECTED_FOLDER . "viewc/pertial/header.php"; ?>

<?php foreach($data['response']['data'] as $k1=>$v1): ?>
    <li>
        <?php echo $v1['filter']; ?>
        <?php echo $v1['created_time']; ?>
        
        <?php echo $v1['likes']; ?>
        <li>s:
        <a href="<?php echo $v1['link']; ?>" target="_blank">
            <img src="<?php echo $v1['images']['thumbnail']['url']; ?>">
        </a>
        <li>
        <li>caption :
            <li></li>
        </li>
        <li>username :@<?php echo $v1['user']['username']; ?></li>
        <li><a href="<?php echo $v1['user']['website']; ?>" target="_blank">website</a></li>
        <li>bio :<?php echo $v1['user']['bio']; ?></li>
        <li><img width="25px" src="<?php echo $v1['user']['profile_picture']; ?>"></li>
        <!--
        <li>m:
        <a href="<?php echo $v1['link']; ?>" target="_blank">
            <img src="<?php echo $v1['images']['low_resolution']['url']; ?>">
        </a>
        <li>
        <li>L:
        <a href="<?php echo $v1['link']; ?>" target="_blank">
            <img src="<?php echo $v1['images']['standard_resolution']['url']; ?>">
        </a>
        <li>
        -->
    <?php foreach($v1['comments']['data'] as $k2=>$v2): ?>
            <!--<li>created_time : <?php echo $v1['created_time']; ?></li>-->
            
    <?php endforeach; ?>
    </li>
<?php endforeach; ?>

<?php include Doo::conf()->SITE_PATH .  Doo::conf()->PROTECTED_FOLDER . "viewc/pertial/footer.php"; ?>