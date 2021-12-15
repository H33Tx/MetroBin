<ul class="v-menu">
    <li class="menu-title"><?= $lang["welcome-to"].$name ?>.</li>
    <li><a href="<?= $url ?>paste" data-hotkey="Alt+N"><span class="mif-folder-plus icon fg-green"></span> <?= $lang["new-paste"] ?></a></li>
    <li><a href="<?= $url ?>recent" data-hotkey="Alt+H"><span class="mif-calendar icon"></span> <?= $lang["recent"] ?></a></li>
    <li><a href="<?= $url ?>about"><span class="mif-info icon"></span> <?= $lang["about"] ?></a></li>
    <li><a href="<?= $url ?>rules"><span class="mif-verified icon"></span> <?= $lang["rules"] ?></a></li>
    <?php if($rPage=="view") { ?>
    <li class="menu-title"><?= $lang["related"] ?></li>
    <li>
        <a href="#" data-hotkey="Alt+E"><span class="mif-library icon"></span> <?= $lang["controls"] ?></a>
        <ul class="v-menu" data-role="dropdown">
            <li class="divider"></li>
            <li><a href="<?= $url ?>edit/<?= $pasteID ?>"><span class="mif-pencil icon"></span> <?= $lang["edit"] ?></a></li>
            <li><a href="#"><span class="mif-share icon"></span> <?= $lang["share"] ?></a></li>
            <li><a href="<?= $url ?>delete/<?= $pasteID ?>"><span class="mif-bin icon fg-red"></span> <?= $lang["delete"] ?></a></li>
            <li><a href="#" onclick="report_paste()"><span class="mif-flag icon fg-red"></span> <?= $lang["report"] ?></a></li>
        </ul>
    </li>
    <?php } ?>
    <li class="menu-title"><?= $lang["support"] ?></li>
    <li><a href="https://github.com/saintly2k/MetroBin" target="_blank"><span class="mif-github icon"></span> GitHub</a></li>
    <li><a href="https://paypal.me/WOLFRAMEdev" target="_blank"><span class="mif-paypal icon"></span> PayPal</a></li>
    <li><a href="https://twitter.com/saintly2k" target="_blank"><span class="mif-twitter icon"></span> Twitter</a></li>
</ul>
