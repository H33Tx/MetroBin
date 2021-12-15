<title><?= $paste["title"] ?> | <?= $name ?></title>


<div class="dialog" data-role="dialog" id="reportContainer" data-show="false">
    <div class="dialog-title">Use Windows location service?</div>
    <div class="dialog-content">
        Bassus abactors ducunt ad triticum.
        A fraternal form of manifestation is the bliss.
    </div>
    <div class="dialog-actions">
        <button class="button js-dialog-close">Disagree</button>
        <button class="button primary js-dialog-close">Agree</button>
    </div>
</div>

<div class="window">
    <div class="window-content p-2">
        <h3><?= $paste["title"] ?> <small><?= $lang["paste-by"] ?> <?php if(!empty($paste["author"])) { ?><?= $paste["author"] ?><?php } else { ?>Anonymous<?php } ?></small></h3>
        <div class="row">
            <div class="cell-4">
                <button class="button success" data-hotkey="Ctrl+C" style="width:100%" onclick="copy_to_clipboard()"><?= $lang["copy-to-clipboard"] ?> (Ctrl+C)</button>
            </div>
            <div class="cell-4">
                <button class="button primary" style="width:100%" onclick="open_paste()"><?= $lang["view-raw-paste"] ?></button>
            </div>
            <div class="cell-4">
                <button class="button info" disabled style="width:100%" onclick="download_paste()"><?= $lang["download-as-text"] ?></button>
            </div>
        </div>
        <textarea data-role="textarea" data-clear-button="false" readonly id="paste"><?= $paste["content"] ?></textarea>
    </div>
</div>

<script>
    var options = {
        showTop: true,
    }

    function copy_to_clipboard() {
        Metro.toast.create("Paste copied to Clipboard!", null, 2000, "bg-green fg-white", options);
        document.getElementById('paste').select();
        document.execCommand('copy');
    }

    function open_paste() {
        window.open("<?= $url ?>raw/<?= $paste["id"] ?>", "_blank");
    }

    function download_paste() {
        // WIP
    }

    function report_paste() {
        $('#reportContainer').data('show'); // gets value
        $('#reportContainer').data('show', 'true'); // sets value
    }

</script>
