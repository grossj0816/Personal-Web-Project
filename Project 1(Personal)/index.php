<?php include ('views/index/header.php'); ?>
<body>
  <!--Navigation-->
  <?php include ('views/index/navigation.php'); ?>
  <main>
    <!--Parallax Section-->
    <div class="parallax-container">
      <div class="parallax">
        <img src="#" alt="#">
      </div>
    </div>
    <div class="container">
        <h3 class="center">Top 5 Most Popular Games of 2017</h3>
        <br />
        <!--List of 10 popular games-->
        <!--TODO: CREATE A SCRIPT TO UPDATE THE DUMMY VALUES-->
        <div class="row">
          <ul class="collection center">
            <li class="collection-item" id="item1">Alvin</li>
            <li class="collection-item" id="item2">Alvin</li>
            <li class="collection-item" id="item3">Alvin</li>
            <li class="collection-item" id="item4">Alvin</li>
            <li class="collection-item" id="item5">Alvin</li>
          </ul>
        </div>
      <br />
      <br />
      <!--Info Cards for the 10 Games-->
      <div class="row">
        <!--One-->
        <div class="col l4 m6 s12">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="images/office.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Destiny 2<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Destiny 2<i class="material-icons right">close</i></span>
                <p id="gameInfo1">Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
        </div>
        <!--Two-->
        <div class="col l4 m6 s12">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="images/office.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Tekken 7<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Tekken 7<i class="material-icons right">close</i></span>
                <p id="gameInfo2">Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
        </div>
        <!--Three-->
        <div class="col l4 m6 s12">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="images/office.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Mario Kart 8 Deluxe Ed.<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Mario Kart 8 Deluxe Ed.<i class="material-icons right">close</i></span>
                <p id="gameInfo3">Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
        </div>
        <!--Four-->
        <div class="col l4 m6 s12">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="images/office.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Horizon Zero Dawn<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Horizon Zero Dawm<i class="material-icons right">close</i></span>
                <p id="gameInfo4">Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
        </div>
        <!--Five-->
        <div class="col l4 m6 s12">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="images/office.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Injustice 2<i class="material-icons right">more_vert</i></span>
                <p><a href="#">This is a link</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Injustice 2<i class="material-icons right">close</i></span>
                <p id="gameInfo5">Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="js/initscript.js"></script>
  <script type="text/javascript" src="js/collectionscript.js"></script>
  <script type="text/javascript"src="js/cardinfoscript.js"></script>
</body>
<?php include ('views/index/footer.php'); ?>
