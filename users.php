<?php include 'templates/header.php'; ?>
<?php include 'includes/db.php'; ?>

<h2>Registered Users</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php
    // Fetch all users from the database
    $stmt = $conn->query("SELECT name, email FROM users");
    while ($row = $stmt->fetch()) {
        echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td></tr>";
    }
    ?>
</table>

<?php include 'templates/footer.php'; ?>
