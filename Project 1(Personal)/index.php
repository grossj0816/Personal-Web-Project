<?php include ('views/index/header.php'); ?>
<body>
  <!--Navigation-->
  <?php include ('views/index/navigation.php'); ?>
  <main>
    <!--Parallax Section-->
    <div class="parallax-container">
      <div class="parallax">
        <img src="imgs/parallax-images/ps4vsxboxone.jpg" alt="Xbox VS PlayStation">
      </div>
    </div>
    <div class="container">
        <h3 class="center">Top 3 Most Popular Games of 2017</h3>
        <br />
        <!--List of 10 popular games-->
        <div class="row">
          <ul class="collection center">
            <li class="collection-item" id="item1">Alvin</li>
            <li class="collection-item" id="item2">Alvin</li>
            <li class="collection-item" id="item3">Alvin</li>
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
                <img class="activator" src="imgs/card-images/destiny2.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Destiny 2<i class="material-icons right">more_vert</i></span>
                <p><a href="https://www.destinythegame.com/" class="">Buy Destiny 2</a></p>
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
                <img class="activator" src="imgs\card-images\tekken7.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Tekken 7<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Buy Tekken 7</a></p>
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
                <img class="activator" src="imgs/card-images/mariokart8.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Mario Kart 8 Deluxe Ed.<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Buy Mario Kart 8 Deluxe Ed.</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Mario Kart 8 Deluxe Ed.<i class="material-icons right">close</i></span>
                <p id="gameInfo3">Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
        </div>
      </div>
      <br />
      <br />
      <br />
      <div class="row">
        <div class="col l3 offset-l1 m3 offset-m1 s4">
          <a class="btn blue-grey darken-3" onclick="Materialize.toast('Sixty-five percent of American households are home to someone who plays video games regularly..', 4000)">Video Game Fact 1</a>
        </div>
        <div class="col l3 offset-l1  m3 offset-m1 s4">
          <a class="btn blue-grey darken-3" onclick="Materialize.toast('Fifty-three percent of the most frequent video game players report playing video games with others.', 4000)">Video Game Fact 2</a>
        </div>
        <div class="col l3 offset-l1  m3 offset-m1 s4">
          <a class="btn blue-grey darken-3" onclick="Materialize.toast('Seventy-four percent of PC/console VR headset owners use their device to play single player video games.', 4000)">Video Game Fact 3</a>
        </div>
      </div>
    </div>
    <br />
  </main>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="js/initscript.js"></script>
  <script type="text/javascript" src="js/collectionscript.js"></script>
  <script type="text/javascript"src="js/cardinfoscript.js"></script>
</body>
<?php include ('views/index/footer.php'); ?>
