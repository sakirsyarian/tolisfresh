<!-- Connection database -->
<?php require "db.php"; ?>

<?php
// Get type from header
$type = $_GET['type'];
$urlId = $_GET['id'];
$urlImage = $_GET['img'];

if ($conn) {

    if (isset($_POST["update"])) {
        switch ($type) {

            case "clients":

                // Update DataBase
                $client_name = test_input($_POST["client_name"]);
                $client_address = test_input($_POST["client_address"]);
                $client_district = test_input($_POST["client_district"]);
                $client_city = test_input($_POST["client_city"]);
                $client_province = test_input($_POST["client_province"]);
                $client_zipcode = test_input($_POST["client_zipcode"]);
                $client_image = test_input($_FILES["client_image"]["name"]);

                // Upload Image
                if ($_FILES["client_image"]['error'] === 0) {
                    uploadImage("client_image", "../../upload/clients/");
                } else {
                    $client_image = $urlImage;
                }

                try {

                    $sql = "UPDATE `clients`
                        SET `client_name`= ?, `client_address`= ?,`client_district`= ?, `client_city`= ?, `client_province`= ?, `client_zipcode`= ?, `client_image`= ?
                        WHERE `client_id`= ?";

                    $stmt = $conn->prepare($sql);

                    $stmt->execute([$client_name, $client_address, $client_district, $client_city, $client_province, $client_zipcode, $client_image, $urlId]);

                    // echo a message to say the UPDATE succeeded
                    echo "Category UPDATED successfully";
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                // Go to page
                header("Location: ../clients/client_read", true, 301);
                exit;
                break;

            default:
                break;
        }
    }
} else {
    echo 'Error: ' . $e->getMessage();
}

function uploadImage($name, $dest)
{
    $target_dir = $dest;
    $target_file = $target_dir . basename($_FILES[$name]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES[$name]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES[$name]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES[$name]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
