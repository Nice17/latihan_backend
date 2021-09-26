<?php
include "database.php"; ?>
<table border="1">
    <tr>
    <tr>
        <th>
            Nama
        </th>
        <th>
            Alamat
        </th>
    </tr>

    <?php
    foreach ($tampil as $row) {
    ?>

        <tr>
            <td>
                <?php echo $row['nama'] . " "; ?>
            </td>
            <td>
                <?php echo $row['alamat'] . " <br> "; ?>
            </td>
        </tr>
    <?php } ?>
</table>