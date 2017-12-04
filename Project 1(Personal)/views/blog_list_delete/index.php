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
        <h3 class="center">Let's delete a post!!</h3>
      </div>
      <div class="row">
        <form action="delete_post.php" method="post">
          <input type="hidden" name="demon" value="<?php echo $stmts['PostID']?>">
          <table>
            <tr>
              <td class="delValues">
               <label class="labelStyle">First Name</label>
               <br />
               <?php echo  $stmts['FirstName']; ?>
              </td>
            </tr>
            <tr>
              <td class="delValues">
                <label class="labelStyle">Last Name</label>
                <br />
                <?php echo $stmts['LastName']; ?>
              </td>
            </tr>
            <tr>
              <td class="delValues">
                <label class="labelStyle">Console</label>
                <br />
                <?php echo  $stmts['Console']; ?>
              </td>
            </tr>
            <tr>
              <td class="delValues">
                <label class="labelStyle">Favorite Game and Why?</label>
                <br />
                <?php echo  $stmts['FavGameDesc']; ?>
              </td>
            </tr>
            <tr>
              <td class="delValues">
                <label class="labelStyle">Would you like to update this post?</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a class="waves-effect waves-light btn blue-grey darken-3"><input type="submit" value="Yes"></a>
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
