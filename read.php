<?php
    include "connection.php";
    $read="select * from mycrud";
    $query=mysqli_query($db,$read);

    $num=mysqli_num_rows($query);
    if($num>0){?>
        <div style="display: flex; justify-content:center; align-content:center; ">
            <div> <a href="index.php"> add user</a> </div>
            <table style="border: solid black 2px;">
                    <tr>
                        <th style="border: solid black 2px;">id</th>
                        <th style="border: solid black 2px;" >user</th>
                        <th style="border: solid black 2px;">emai</th>
                        <th style="border: solid black 2px;" >password</th>
                        <th style="border: solid black 2px;" >action</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row=mysqli_fetch_assoc($query)){?>
                    <tr>
                        <td style="border: solid black 2px;"><?php echo $row['id'];?></td>
                        <td style="border: solid black 2px;"><?php echo $row['user'];?></td>
                        <td style="border: solid black 2px;"><?php echo $row['email'];?></td>
                        <td style="border: solid black 2px;"><?php echo $row['pass'];?></td>
                        <td style="border: solid black 2px;"> <a href="edit.php?editid=<?php echo $row['id'];?>"> edit </a>
                    </td>
                        <td style="border: solid black 2px;"> <a href="delete.php?deleteid=<?php echo $row['id'];?>"> delete</a>
                    </td>
                <?php }?>
                </tbody>
            </table>
        </div>

    <?php
        
    }


    
?>