<link rel="stylesheet" href="css/table.css">
<main class="table" id="customers_table">

   
        <section class="table__header">
            <h1>Nội Dung</h1>
        </section>
        <?php
              $sql = "SELECT * FROM tintuc  WHERE MaTin = '$_GET[matin]'";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Nội Dung<span class="icon-arrow"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($query)){
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $row['NoiDung']; ?></td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>