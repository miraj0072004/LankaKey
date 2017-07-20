<?php
require('../includes/config.inc.php');
require(MYSQL);
$page_title='Add a page';
include('./includes/admin_header.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Check for a title:
    if (!empty($_POST['title'])) {
        $t = escape_data(strip_tags($_POST['title']), $dbc);
        } else {
        $add_page_errors['title'] = 'Please enter the title!';
    }

    // Check for a category:
    //echo "The category chosen is ".$_POST['category'];
    if (filter_var($_POST['category'], FILTER_VALIDATE_INT, array('min_range' => 1))) {
        $cat = $_POST['category'];
        } else { // No category selected.
        $add_page_errors['category'] = 'Please select a category!';
    }

    // Check for a description:
    if (!empty($_POST['description'])) {
        $d = escape_data(strip_tags($_POST['description']), $dbc);
        } else {
        $add_page_errors['description'] = 'Please enter the description!';
    }

    // Check for the content:
    if (!empty($_POST['page_content'])) {
        $allowed = '<div><p><span><br><a><img><h1><h2><h3><h4><ul><ol><li><blockquote>';
        $c = escape_data(strip_tags($_POST['page_content'], $allowed), $dbc);
        } else {
        $add_page_errors['content'] = 'Please enter the content!';
    }

    if (empty($add_page_errors)) { // If everything's OK.

        // Add the page to the database:
        $q = "INSERT INTO pages (categories_id, title, description, content) VALUES ($cat, '$t', '$d', '$c')";
        $r = mysqli_query($dbc, $q);

        if (mysqli_affected_rows($dbc) === 1) { // If it ran OK.

        // Print a message:
        echo '<div class="alert alert-success"><h3>The page has been added!</h3></div>';

        // Clear $_POST:
        $_POST = array();

        // Send an email to the administrator to let them know new content was added?

        } else { // If it did not run OK.
        trigger_error('The page could not be added due to a system error. We apologize for any inconvenience.');
        }

    } // End of $add_page_errors IF.

}

?>

        <div class="row">
            <section class="col-xs-12">

                <form action="add_page.php" method="post"  class="form-horizontal" name="page_add_form">
                    <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="title" name="title" placeholder="Title" required>
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="category" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="category" name="category">                          
                                <?php
                                // Retrieve all the categories and add to the pull-down menu:
                                    $q = "SELECT id, category FROM categories ORDER BY category ASC";
                                    $r = mysqli_query($dbc, $q);
                                    while ($row = mysqli_fetch_array($r, MYSQLI_NUM)) {
                                    echo "<option value=\"$row[0]\"";
                                    // Check for stickyness:
                                    if (isset($_POST['category']) && ($_POST['category'] == $row[0]) ) echo ' selected="selected"';
                                    echo ">$row[1]</option>\n";
                                    }                                    
                                ?>

                            </select>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="page_content" class="col-sm-2 control-label">Content</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="page_content" name="page_content"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            
                            <input type="submit" name="submit_button" value="Add Article" id="submit_button" class="btn btn-default" />
                        </div>
                    </div>
                </form>
                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                <script type="text/javascript">
                tinyMCE.init({
                // General options
                selector : "#page_content",
                width : 800,
                height : 400,
                browser_spellcheck : true,

                plugins: "paste,searchreplace,fullscreen,hr,link,anchor,image,charmap,media,autoresize,autosave,contextmenu,wordcount",

                toolbar1: "cut,copy,paste,|,undo,redo,removeformat,|hr,|,link,unlink,anchor,image,|,charmap,media,|,search,replace,|,fullscreen",
                toolbar2: "bold,italic,underline,strikethrough,|,alignleft,aligncenter,alignright,alignjustify,|,formatselect,|,bullist,numlist,|,outdent,indent,blockquote,",

                // Example content CSS (should be your site CSS)
                content_css : "../css/bootstrap.min.css",

                });
                </script>
                <!-- /TinyMCE -->

            </section>
        </div>
        
        
<?php
include('./includes/admin_footer.inc.php');
?>