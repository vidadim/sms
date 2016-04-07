<?php 
    include 'app/class/model.php';
    $myDb = new Database;
    $myAssignment = new Assignment($myDb->conn);
 ?>

<div class="container">
        <table>
          <thead>
            <tr>
                <th data-field="id">Title</th>
                <th data-field="asssignment">Assignment</th>
                <th data-field="deadline">Deadline</th>
                <th data-field="status">Status</th>
            </tr>
          </thead>

          <tbody>
            <?php 

              foreach ($myAssignment->getAllAssignments() as $value) {
                 echo "<tr>
                        <td>".$value['title']."</td>
                        <td>".$value['assignment']."</td>
                        <td>".$value['deadline']."</td>
                        <td>".$value['status']."</td>
                      </tr>";
              }
              

             ?>
          </tbody>
      </table>
</div>