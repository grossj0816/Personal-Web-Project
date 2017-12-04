<?php include ('header.php'); ?>
<body>
  <?php include ('navigation.php'); ?>
  <main>
    <div class="container">
      <div class="row">
        <h3 class="center">Let's add a Post!!!!!</h3>
      </div>
      <div class="row">
        <form action="add_post.php" method="post">
          <table>
            <tr>
              <td>
                <input type="text" name="dragon" value="First Name">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="tiger" value="Last Name">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="wolf" value="Console">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="lion" value="Favorite Game and Why?">
              </td>
            </tr>
          </table>
          <a class="waves-effect waves-light btn blue-grey darken-3"><input type="submit" name="Add Post"></a>
        </form>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="../../js/initscript.js"></script>
</body>
<?php include ('footer.php'); ?>
