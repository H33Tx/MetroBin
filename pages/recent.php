<div class="window">
    <div class="window-content p-2">
        <table class="table" data-role="table" data-rows-steps="-1, 25, 50, 100" data-rows="50">
            <thead>
                <tr>
                    <th>Title</th>
                    <th data-size="1">Author</th>
                    <th data-sortable="true" data-size="2">Added</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM `pastes` WHERE `listed`='1' AND `deleted`='0' ORDER BY `id` DESC LIMIT 500");

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {?>
                <tr>
                    <td><a href="<?= $url ?>view/<?= $row["id"] ?>"><?= $row["title"] ?></a></td>
                    <td><?php if(empty($row["author"])) { echo "Anonymous"; } else { echo $row["author"]; } ?></td>
                    <td><?= $row["added"] ?></td>
                </tr>
                <?php 
                    }
                }                
                ?>
            </tbody>
        </table>
    </div>
</div>
