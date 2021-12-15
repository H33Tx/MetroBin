<?php 

// Thingies for editing
if(isset($_POST["edit_paste"])) {
    $paste = mysqli_real_escape_string($conn, $_POST["paste_id"]);
    
    $title = mysqli_real_escape_string($conn, $_POST["paste_title"]);
    $title = stripslashes($title);
    
    $author = mysqli_real_escape_string($conn, $_POST["paste_author"]);
    $author = stripslashes($author);
    
    $content = mysqli_real_escape_string($conn, $_POST["paste_content"]);
    
    $listed = mysqli_real_escape_string($conn, $_POST["paste_listed"]);
    
    $password = mysqli_real_escape_string($conn, $_POST["paste_password"]);
    
    $conn->query("UPDATE `pastes` SET `title`='$title', `author`='$author', `content`='$content', `listed`='$listed', `password`='$password' WHERE `id`='$paste' LIMIT 1");
    
    header("location: ".$url."view/$paste");
}

// Get Paste Info
if($rPage=="view") {
    $pasteID = $_GET["paste"];
    $paste = $conn->query("SELECT * FROM `pastes` WHERE `id`='$pasteID' LIMIT 1");
    $paste = mysqli_fetch_assoc($paste);
}

// Add Paste
if(isset($_POST["add_paste"])) {
    $title = mysqli_real_escape_string($conn, $_POST["paste_title"]);
    $title = stripslashes($title);
    
    $author = mysqli_real_escape_string($conn, $_POST["paste_author"]);
    $author = stripslashes($author);
    
    $content = mysqli_real_escape_string($conn, $_POST["paste_content"]);
    
    $listed = mysqli_real_escape_string($conn, $_POST["paste_listed"]);
    
    $password = mysqli_real_escape_string($conn, $_POST["paste_password"]);
        
    $conn->query("INSERT INTO `pastes`(`title`,`author`,`content`,`listed`,`password`,`deleted`) VALUES('$title','$author','$content','$listed','$password','0')");
    
    $getPaste = $conn->query("SELECT * FROM `pastes` WHERE `title`='$title' LIMIT 1");
    $getPaste = mysqli_fetch_assoc($getPaste);
    
    header("location: ".$url."view/".$getPaste["id"]);
}

?>
