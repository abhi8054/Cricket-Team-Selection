<?php
$task = $_GET['action'];

switch($task){
    case 'getplayer':
        ?>
    <table class="ptable" style="margin-top:1rem ;">
    <caption>Select New Players</caption>

                    <thead>
                        <tr>
                            <th>S No.</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Role</th>
                            <th>Official Team</th>
                            <th>Base Price</th>
                            <th>Select</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php 
                include_once "../partialpages/connection.php";
                $sql = "SELECT * FROM `players`";
                $count = 0;
                $res = mysqli_query($conn,$sql);
                if(mysqli_num_rows($res) > 0 ){
                    while($row = mysqli_fetch_array($res)){
                        $count++;
                      ?>
                    <tr>
                        <td> <?php echo $count ?></td>
                        <td><?php echo $row[1] ?></td>
                        <td><?php echo $row[2] ?></td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?></td>
                        <td><?php echo $row[5] ?></td>
                        <td>
                            <label>Select</label>
                            <input type="checkbox" name="playerid[]" value=<?php echo $row[0] ?>>
                        </td>
                    </tr>
                    <?php
                    }
                }else{
                    echo "<div style='width:100%;background-color:#e63720a4;font: size 1.5rem;padding:1rem;margin:1rem 0;color:white'>There is no Player Found</div>";
                }
                ?>
                    </tbody>
                </table>
<?php
}
?>