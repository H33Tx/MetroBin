<title><?= $lang["new-paste"] ?> | <?= $name ?></title>
<div class="window">
    <div class="window-content p-2">
        <h3><?= $lang["new-paste"] ?></h3>
        <form method="post">
            <div class="row">
                <div class="cell-12">
                    <input type="text" data-role="materialinput" data-label="<?= $lang["paste"]["title"] ?>" placeholder="<?= $lang["paste"]["title-of-paste"] ?>" data-informer="<?= $lang["paste"]["title-required"] ?>" required name="paste_title" minlength="5" maxlength="100">
                </div>
                <div class="cell-12">
                    <input type="text" data-role="materialinput" data-label="Paste Author" placeholder="Who is the Author?" data-informer="Leave blank for no Author." name="paste_author" minlength="3" maxlength="100">
                </div>
                <div class="cell-12">
                    <textarea data-role="textarea" data-clear-button="false" placeholder="Your Paste goes here!" name="paste_content" required maxlength="500000"></textarea>
                </div>
                <div class="cell-4">
                    <select data-role="select" name="paste_listed" data-filter="false">
                        <option value="0">Paste Unlisted</option>
                        <option value="1" selected>Paste Listed</option>
                    </select>
                </div>
                <div class="cell-8">
                    <input type="text" data-role="materialinput" data-label="Paste Password" placeholder="What's the password for managing this paste?" data-informer="If you leave it blank, you won't have any control over it!" name="paste_password" maxlength="25">
                </div>
                <div class="cell-12">
                    <input type="submit" class="button success" style="width:100%" name="add_paste" value="Add Paste!">
                </div>
            </div>
        </form>
    </div>
</div>
