<?php include('view/header.php') ?>

<main>
    <section>     
        <table>
            <tr>
                <th>Year</th>
                <th>Model</th>
                <th>Price</th>
            </tr>
            <tr>
            <?php foreach ($vehicles as $vehicle) : ?>
                <p><?= $vehicle['year'] ?></p>
                <p><?= $vehicle['model'] ?></p>
                <p><?= $vehicle['price'] ?></p>
            <?php endforeach ; ?>
        </table>
    </section>
</main>
<?php include('view/footer.php') ?>