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

    <section>
    <form action="." method="get">
            <input type="hidden" name="action" value="list_vehicles">
            <select name="vehicle_id" required>
                <option value="0">View All Vehicles</option>
                <?php foreach($vehicles as $vehicle) : ?>
                <?php if ($vehicle_id == $vehicle['vehicleID']) { ?>
                    <option value="<?= $vehicle['vehicleID'] ?>" selected>
                <?php } else { ?>
                    <option value="<?= $vehicle['vehicleID'] ?>">
                <?php } ?>
                        <?= $vehicle['price'] ?>
                    </option>
                    <?php endforeach; ?>
            </select>
            <button>Go</button> 
        </form>
    </section>


</main>
<?php include('view/footer.php') ?>


