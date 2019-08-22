    <?php
    require_once("auth.php");
    
    
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['posting'])) {
        $name = $_SESSION["user"]["name"];
        $posting = $_POST['data'];
        $time = time();

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $query = mysqli_query($mysqli, "INSERT INTO postingan (name, posting, timestamp) VALUE ('$name', '$posting', '$time')");
        header("Location:timeline.php");
        // Show message when user added
        // echo "User added successfully. <a href='timeline.php'>View Users</a>";
    }
    ?>