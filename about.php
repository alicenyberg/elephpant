<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/data.php'; ?>
<?php require __DIR__ . '/functions.php'; ?>

<main>
    <div class="facts_wrapper">
        <ul class="facts">
            <h3>Fun facts about dogs!</h3>
            <?php foreach ($funFacts as $funFact) : ?>
                <li> <?php echo $funFact; ?></li>
            <?php endforeach; ?>
        </ul>

        <div class="countdown">
            <?php echo "Today it's $daysLeft days left until My Dog" ?>
        </div>
    </div>
</main>

<?php require __DIR__ . '/footer.php'; ?>
