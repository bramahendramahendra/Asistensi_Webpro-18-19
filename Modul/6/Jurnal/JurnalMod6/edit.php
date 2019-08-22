    <?php
    require_once("auth.php");
    
    
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['update'])) {
        $name = $_SESSION["user"]["name"];
        $posting = $_POST['data'];
        $time = time();
        // Get id from URL to delete that user
        $id = $_GET['id'];
        // include database connection file
        include_once("config.php");

        // update user data into table
        $query = mysqli_query($mysqli, "UPDATE postingan SET  posting='$posting' WHERE id_posting=$id ");
        
        header("Location:timeline.php");
        // Show message when user added
        // echo "User added successfully. <a href='timeline.php'>View Users</a>";
    }
    ?>