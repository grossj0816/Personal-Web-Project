  <?php

  require_once('../../models/database.php');

  $stmt = $db->prepare("SELECT * FROM userposts");
  $stmt->execute();

  include ('header.php');
  ?>
  <body>
    <?php include ('navigation.php'); ?>
    <!--Parallax Section-->
    <div class="parallax-container">
      <div class="parallax">
        <img src="#" alt="#">
      </div>
    </div>
    <!--Container-->
    <div class="container">
        <div class="row center">
          <table id="tableContents" class="bordered">
            <tr>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Console</th>
              <th>Favorite Game and Why?</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
            </tr>
            <?php foreach ($stmt as $indStmt) : ?>
            <tr>
                <td><?php echo $indStmt['FirstName'] ?></td>
                <td><?php echo $indStmt['LastName'] ?></td>
                <td><?php echo $indStmt['Console'] ?></td>
                <td><?php echo $indStmt['FavGameDesc'] ?></td>
                <td>
                  <form action="../blog_list_update" method="post" id="blog_list_update">
                    <input type="hidden" name="god" value="<?php echo $indStmt['PostID'];?>">
                    <a class="waves-effect waves-light btn"><input type="submit" value="Update"></a>
                  </form>
                </td>
                <td>
                  <form action="../delete_post.php" method="post" id="blog_list_delete">
                    <input type="hidden" name="demon" value="<?php echo $indStmt['PostID'];?>">
                    <a class="waves-effect waves-light btn"><input type="submit" value="Delete"></a>
                  </form>
                </td>
            </tr>
            <?php endforeach; ?>
          </table>
          <br />
          <a href="../blog_list_add">Add a New Game Post!</a>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="../../js/initscript.js"></script>

  </body>
  <?php include ('footer.php'); ?>
