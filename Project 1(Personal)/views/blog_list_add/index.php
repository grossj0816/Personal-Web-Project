<?php include ('header.php'); ?>
<body>
  <?php include ('navigation.php'); ?>
  <main>
    <div class="container">
      <div class="row">
        <h2 class="center">Let's add a Post!!!!!</h2>
      </div>
      <div class="row">
        <form action="add_post.php" method="post">
          <table>
            <tr>
              <td>
                <label>First Name</label>
                <input type="text" name="dragon">
              </td>
            </tr>
            <tr>
              <td>
                <label>Last Name</label>
                <input type="text" name="tiger">
              </td>
            </tr>
            <tr>
              <td>
                <label>Console</label>
                <input type="text" name="wolf">
              </td>
            </tr>
            <tr>
              <td>
                <label>Favorite Game and Why?</label>
                <input type="text" name="lion">
              </td>
            </tr>
            <tr>
              <td>
                <label>Are you sure that you want to add a post?</label>
              </td>
              <td>
                <a class="waves-effect waves-light btn"><input type="submit" name="Add Post"></a>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="../../js/initscripts.js"></script>
</body>
<?php include ('footer.php'); ?>
