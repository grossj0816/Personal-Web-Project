<?php
include 'header.php';

$val1 = trim(filter_input(INPUT_POST, 'demon', FILTER_VALIDATE_INT));

require_once '../../models/database.php';

$stmt = $db->prepare("SELECT * FROM userposts WHERE PostID = :pid");

$stmt->bindValue(":pid", $val1);

$stmt->execute();

$stmts = $stmt->fetch();

?>
<body>
  <?php include 'navigation.php'; ?>
  <main>
    <div class="container">
      <div class="row">
        <h2>Let's delete a post!!</h2>
      </div>
      <div class="row">
        <form action="delete_post.php" method="post">
          <input type="hidden" name="demon" value="<?php echo $stmts['PostID']?>">
          <table>
            <tr>
              <td>
                <label>FirstName</label>
              </td>
              <td>
                <?php echo $stmts['FirstName']; ?>
              </td>
            </tr>
            <tr>
              <td>
                <label>LastName</label>
              </td>
              <td>
                <?php echo $stmts['LastName']; ?>
              </td>
            </tr>
            <tr>
              <td>
                <label>Console</label>
              </td>
              <td>
                <?php echo $stmts['Console']; ?>
              </td>
            </tr>
            <tr>
              <td>
                <label>Favorite Game Description</label>
              </td>
              <td>
                <?php echo $stmts['FavGameDesc']; ?>
              </td>
            </tr>
            <tr>
              <td>
                <label>Would you like to delete this post?</label>
              </td>
              <td>
                <a class="waves-effect waves-light btn"><input type="submit" value="Yes"></a 7Y>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="../../js/initscript.js"></script>
</body>
<?php include 'footer.php'; ?>
