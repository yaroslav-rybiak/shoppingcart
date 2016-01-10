<?php
if (isset($_GET['action']) && $_GET['action'] == 'add') {

}
?>

<h1>Games List</h1>
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