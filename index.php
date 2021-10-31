<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/data.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>

<main>



    <div class="dogs_wrapper">
        <?php foreach ($dogs as $dog) : ?>
            <div class="allDogs">
                <h2><?php echo $dog['name']; ?></h2>
                <p><?php if ($dog['big'] === true) {
                        echo 'This is a big dog!';
                    } else {
                        echo 'This is a small dog!';
                    } ?></p>
                <img src="<?php echo $dog['image']; ?>" alt="<?php echo $dog['name']; ?>">
                <p class="dogInfo"><?php echo $dog['info']; ?></p>

            </div>
        <?php endforeach; ?>
    </div>

</main>

<?php require __DIR__ . '/footer.php'; ?>
