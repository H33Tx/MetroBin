<?php

if(empty($_GET["paste"])) {
    $hide_popup = "true";
} else {
    $pasteID = $_GET["paste"];
}

if(empty($hide_popup)) {
    $hide_popup = "true";
}

if(isset($_POST["edit_password"])) {
    $pasteID = $_GET["paste"];
    $entered_password = mysqli_real_escape_string($conn, $_POST["password"]);
    $actual_password = $conn->query("SELECT * FROM `pastes` WHERE `id`='$pasteID' LIMIT 1");
    $actual_password = mysqli_fetch_assoc($actual_password);
    $actual_password = $actual_password["password"];
    if($entered_password===$actual_password) {
        $hide_popup = "false"; // Means true
        $paste = $conn->query("SELECT * FROM `pastes` WHERE `id`='$pasteID' LIMIT 1");
        $paste = mysqli_fetch_assoc($paste);
    } else {
        $hide_popup = "true"; // Means false
        header("location: ".$url."edit/$pasteID");
    }
}

?>
<?php if($hide_popup=="true") { ?>
<title><?= $lang["edit-paste"] ?> | <?= $name ?></title>
<div class="dialog" onload="showContainer()" data-role="dialog" id="demoDialog1" data-show="<?= $hide_popup ?>">
    <div class="dialog-title">This file is Password-protected!</div>
    <div class="dialog-content">
        You need to enter the Password you entered when you created this Paste. If you did not enter a Password, you can't edit this Paste :^)
    </div>
    <div class="dialog-actions">
        <form method="post" action="">
            <div class="row">
                <div class="cell-12">
                    <input type="text" value="<?= $_GET["paste"] ?>" hidden name="paste">
                    <input type="text" data-role="materialinput" data-label="Paste Password" placeholder="What's the password for managing this paste?" name="password" maxlength="25">
                </div>
                <div class="cell-12">
                    <input type="submit" class="button success" style="width:100%" name="edit_password" value="Check Password!">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="window">
    <div class="window-content p-2">
        <h3>Edit Paste?</h3>
        <p>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
            ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS! ANIME ROCKS!<br>
        </p>
    </div>
</div>
<?php } else { ?>
<title><?= $lang["edit-paste"] ?> | <?= $name ?></title>
<div class="window">
    <div class="window-content p-2">
        <h3>Edit Paste</h3>
        <form method="post">
            <input type="text" value="<?= $pasteID ?>" hidden name="paste_id">
            <div class="row">
                <div class="cell-12">
                    <input type="text" data-role="materialinput" data-label="Paste Title" placeholder="What is the Title of the paste?" data-informer="This field is requried!" required name="paste_title" minlength="5" maxlength="100" value="<?= $paste["title"] ?>">
                </div>
                <div class="cell-12">
                    <input type="text" data-role="materialinput" data-label="Paste Author" placeholder="Who is the Author?" data-informer="Leave blank for no Author." name="paste_author" minlength="3" maxlength="100" value="<?= $paste["author"] ?>">
                </div>
                <div class="cell-12">
                    <textarea data-role="textarea" data-clear-button="false" placeholder="Your Paste goes here!" name="paste_content" required maxlength="500000"><?= $paste["content"] ?></textarea>
                </div>
                <div class="cell-4">
                    <select data-role="select" name="paste_listed" data-filter="false">
                        <option <?php if($paste["listed"]=="0") { echo "selected"; } ?> value="0">Paste Unlisted</option>
                        <option <?php if($paste["listed"]=="1") { echo "selected"; } ?> value="1">Paste Listed</option>
                    </select>
                </div>
                <div class="cell-8">
                    <input type="text" data-role="materialinput" data-label="Paste Password" placeholder="What's the password for managing this paste?" data-informer="If you leave it blank, you won't have any control over it!" name="paste_password" maxlength="25" value="<?= $paste["password"] ?>">
                </div>
                <div class="cell-12">
                    <input type="submit" class="button success" style="width:100%" name="edit_paste" value="Edit Paste!">
                </div>
            </div>
        </form>
    </div>
</div>

<?php } ?>
