<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo "<a href='profiledoc.php?id={$row['user_id']}'>". $row["user_uid"]. "</a>";?></td>
                    <td><?php echo $row['user_sub1'];?></td>
                    <td><?php echo $row['user_sub2'];?></td>
                    <td><?php echo $row['user_sub3'];?></td>
					<td><?php echo $row['user_price'];?></td>
                </tr>
                <?php endwhile;?>