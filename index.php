<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/data.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>

<main>

    <!-- <h1>This is a website with cute dogs!</h1> -->

    <div class="dogs_wrapper">
        <?php foreach ($dogs as $dog) : ?>
            <div class="allDogs">
                <h2><?php echo $dog['name']; ?></h2>
                <p class="dogSize"><?php if ($dog['big'] === true) {
                                        echo 'This is a big dog!';
                                    } else {
                                        echo 'This is a small dog!';
                                    } ?></p>
                <img src="<?php echo $dog['image']; ?>" alt="<?php echo $dog['name']; ?>">
                <p class="dogInfo"><?php echo $dog['info']; ?></p>

            </div>
        <?php endforeach; ?>
    </div>




    <!-- <div class="facts_wrapper">
        <ul class="facts">
            <h3>Fun facts about dogs!</h3>
            <?php foreach ($funFacts as $funFact) : ?>
                <li> <?php echo $funFact; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php echo "Today it's $daysLeft days left until My Dog" ?>
            -->
</main>

<?php require __DIR__ . '/footer.php'; ?>
