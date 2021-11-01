<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/data.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>

<main>
    <div class="facts_wrapper">

        <div class="countdown">
            <h3><?php echo "It's $daysLeft days left until MyDog2022!" ?><h3>
                    <img src="images/hero-mydog.jpeg" alt="three dogs">
                    <p>One of Europe's largest dog events. Read more <a href="https://mydog.se/"> here!</a></p>
        </div>
        <ul class="facts">
            <h3>Fun facts about dogs!</h3>
            <?php foreach ($funFacts as $funFact) : ?>
                <li> <?php echo $funFact; ?></li>
            <?php endforeach; ?>
        </ul>

    </div>
</main>

<?php require __DIR__ . '/footer.php'; ?>
