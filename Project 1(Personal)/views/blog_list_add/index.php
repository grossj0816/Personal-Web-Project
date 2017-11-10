<?php include ('header.php'); ?>
<body>
  <?php include ('navigation.php'); ?>
  <h2>Let's add a Post!!!!!</h2>
  <form action="add_post.php" method="post" id="blog_list_add">
    <label>First Name</label>
    <input type="text" name="dragon">
    <label>Last Name</label>
    <input type="text" name="tiger">
    <label>Console</label>
    <input type="text" name="wolf">
    <label>Favorite Game and Why?</label>
    <input type="text" name="lion">
  </form>
</body>
<?php include ('footer.php'); ?>
