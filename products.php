<?php
if (isset($_GET['action']) && $_GET['action'] == 'add') {

    $id = intval($_GET['id']);
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    }
    else {
        $sql_s = "SELECT * FROM products WHERE id = {$id}";
        $query_s = mysqli_query($link, $sql_s);
        if (mysqli_num_rows($query_s) != 0) {
            //$row_s = mysqli
            }
        else {
            $message = "This product id is invalid.";
        }
    }
}
?>

<h1>Games List</h1>
<?php
if (isset($message)) {
    echo "<h2>$message</h2>";
}
?>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <?php
    $sql = "SELECT id, name, description, price FROM products ORDER BY name ASC";
    $query = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($query)) {;
        ?>
        <tr>
            <td><?=$row["name"]?></td>
            <td><?=$row["description"]?></td>
            <td>$<?=$row["price"]?></td>
            <td><a href="index.php?page=products&action=add&id=<?=$row['id']?>">Add to cart</a></td>
        </tr>
    <?php } ?>
</table>