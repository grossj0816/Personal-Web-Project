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
                <input type="text" name="dragon" placeholder="First Name">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="tiger" placeholder="Last Name">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="wolf" placeholder="Console">
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" name="lion" placeholder="Favorite Game and Why?">
              </td>
            </tr>
          </table>
          <a class="waves-effect waves-light btn"><input type="submit" name="Add Post"></a>
        </form>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="../../js/initscript.js"></script>
</body>
<?php include ('footer.php'); ?>
