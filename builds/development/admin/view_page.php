<?php
require('../includes/config.inc.php');
require(MYSQL);
$page_title='Add a page';
include('./includes/admin_header.inc.php');
?>
  
    <table id="pages_table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Edit</th>
                <th>Delete</th>     
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
                <th>Content</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
        <tbody>
           <?php
            $q="select * from pages order by date_created";
            
            $r=mysqli_query($dbc,$q);
            
            while($row=mysqli_fetch_array($r,MYSQLI_ASSOC))
            {
                echo "<tr>";
                $q1="select category from categories where id =";
                $r1=mysqli_query($dbc,$q1.$row['categories_id']);
                $row1=mysqli_fetch_row($r1);
                echo "<td>{$row1[0]}</td>";
                echo "<td>{$row['title']}</td>";
                echo "<td>{$row['description']}</td>";
                echo "<td>".preg_replace("/<p>&nbsp;<\/p>/", " ",substr($row['content'],0,50)).".. </td>";
                echo "<td><a href='edit_page.php?id={$row['id']}'>Edit</a></td>";
                
                echo "<td>
                <a href='#' data-href='delete_page.php?deleteItemId={$row['id']}'  data-toggle='modal' data-target='#confirm-delete'><span class='glyphicon glyphicon-remove-circle' aria-hidden='true'></span></a></td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
    
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                                </div>

                                <div class="modal-body">
                                    <p>Are you sure you wanna delete this?</p>

                                    <p class="debug-url"></p>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-danger btn-ok">Delete</a>
                                </div>
                            </div>
                        </div>
     </div>      
<?php
include('./includes/admin_footer.inc.php');
?>