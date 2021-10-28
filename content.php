<main>





    <section class="dog-info">
        <div class="box">
            <?php foreach ($dogs as $dog) : ?>
                <img src="<?php echo $dog['image']; ?>" alt="<?php echo $dog['name']; ?>">
                <h2><?php echo $dog['name']; ?></h2>
                <p><?php echo $dog['info']; ?></p>
            <?php endforeach; ?>
        </div>
    </section>





    <div class="facts">
        <ul>
            <h3>Fun facts about dogs!</h3>
            <?php foreach ($funFacts as $funFact) : ?>
                <li> <?php echo $funFact; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</main>
