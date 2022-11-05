<?php require "db.php"; ?>
<?php

// Get id & type from header
$id = $_GET['id'];
$type = $_GET['type'];

if ($conn) {
    switch ($type) {

        case "clients":
            delete($conn, $type, $id, "clients/client_read");
            break;

        default:
            break;
    }
} else {
    echo 'Error: ' . $e->getMessage();
}


function delete($conn, $type, $id, $goto)
{
    $dataId = "client_id";

    try {
        // sql to delete a record
        $sql = "DELETE FROM $type WHERE $dataId = $id";

        // use exec() because no results are returned
        $conn->exec($sql);

        echo "$type Deleted Successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;

    header("Location: ../$goto", true, 301);
    exit;
}
?>