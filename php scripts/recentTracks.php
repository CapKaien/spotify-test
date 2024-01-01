<?php
echo '<table><tr class="tablehead"><td><b>Song</b></td>
         <td><b>Date Played</b></td>
         </tr>';
         while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
             echo '<tr><td class="d-flex px-3 align-items-center"><img src="' . $row['trackImage'] . '" class="img-thumbnail w-25 object-fit-contain trackimg" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $row['trackName'] . '</td><td>' . $row['trackDate'] . '</td></tr>';
         }
         echo '</table>';
         mysqli_free_result($result);
?>