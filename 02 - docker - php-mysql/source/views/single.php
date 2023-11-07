<?php

$id = ( int ) $_GET['id'];

$sql = 'SELECT * 
        FROM sdgs 
        WHERE ID=?
        ORDER BY Titel';

$stmt = $connection->prepare($sql);

$stmt->bind_param('i', $id);


$stmt->execute();


$result = $stmt->get_result();


$sdgItem = mysqli_fetch_assoc($result);

?>
<article>
    <h2>
        <?= $sdgItem['Titel'] ?>
    </h2>
    <img src="/img/<?= $sdgItem['img'] ?>">
    <p>
        <?= $sdgItem['beschrijving'] ?>
    </p>
</article>