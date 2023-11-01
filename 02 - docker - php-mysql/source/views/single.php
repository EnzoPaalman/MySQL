<?php

$sql = 'SELECT 
        FROM sdg 
        WHERE id=?
        ORDER BY titel';


$stmt = $mysqli->prepare($sql);

$stmt->bind_param('i', $ID);


$stmt->execute();


$result = $stmt->get_result();


$sdgItem = mysqli_fetch_assoc($result);

?>
<article>
    <h2>
        <?= $sdgItem['title'] ?>
    </h2>
    <img src="<?= $sdgItem['img'] ?>">
    <p>
        <?= $sdgItem['content'] ?>
    </p>
</article>