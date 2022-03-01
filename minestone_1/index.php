<?php
/* 
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. 
*/

include 'includes/data/data.php'
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/data/head.php' ?>

<body>
    <main class="bg-main">
        <div class="container h-100 d-flex align-items-center">
            <div class="cards text-center py-4">
                <?php foreach ($albums as $album) : ?>
                    <div class="card py-3">
                        <figure class="d-flex justify-content-center">
                            <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['author'] ?>" class="img-fluid p-3" />
                        </figure>
                        <h5 class="text-white"><?php echo $album['title'] ?></h5>
                        <div class="my-3">
                            <p class="text-secondary"><?php echo $album['author'] ?></p>
                            <p class="text-secondary"><?php echo $album['year'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>

</html>