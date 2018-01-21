<?php
include 'header.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

$sql = "SELECT * FROM items;";
$result = mysqli_query($item, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['item_uid'] == '1') {
            ?>
            <div id="products">
                <form>
                    <div class="prod">
                        <div class="prod-img">
                            <img src="<?php echo $row['item_url']; ?>">
                        </div>
                        <hr>
                        <div class="prod-info">
                            <p><?php echo $row['item_name']; ?></p>
                            <p><?php echo $row['item_price']; ?></p>
                            <div class="add-card">
                                <button type="submit" name="addCart" class="styleSign signUp">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <?php
        }
    }
}
?>