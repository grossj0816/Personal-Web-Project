<?php include ('header.php'); ?>
<body>
  <?php include ('navigation.php'); ?>
  <!--Parallax Section -->
  <div class="parallax-container">
    <div class="parallax">
      <img src="#" alt="#">
    </div>
  </div>
  <div class="container">
    <div class="row">
      <h4>Search for Video Game Sotres near Hornell, NY</h4>
    <br />
    <br />
    <br />
    <script>
      function showSellers(seller) {
        if (seller == "")
        {
          document.getElementById('sellerInfo').innerHTML = "";
        }
        else
        {
          var xmlHTTP;
          if (window.XMLHttpRequest)
          {
            xmlHTTP = new XMLHttpRequest();
          }
          else
          {
            xmlHTTP = new ActiveXObject("Microsoft.XMLHTTP");
          }

          xmlHTTP.onreadystatechange = function()
          {
            if (this.readyState == 4 && this.status == 200)
            {
              document.getElementById('sellerInfo').innerHTML = this.responseText;
            }
          };
          xmlHTTP.open("GET", "search.php?query=" + seller, true);
          xmlHTTP.send();
        }
      }
    </script>
    <div class="input-field col s12">
      <select name="videoGameSellers" onchange="showSellers(this.value)">
        <option value="">Choose your option</option>
        <option value="1">GameStop</option>
        <option value="2">BestBuy</option>
        <option value="3">Walmart</option>
      </select>
    </div>
    <div id="sellerInfo"></div>
    </div>
    <br />
    <br />
    <div class="row">
      <div class="col l5 m12 s12">
        <h5 class="center">Calculate the amount you will spend on video games?</h5>
        <form id="getGames">
          <table>
            <tr>
              <td>
                <label>Number of Games</label>
                <input type="text" name="numOfGames" id="numOfGames">
              </td>
            </tr>
            <tr>
              <td>
                <label>Price of an Individual Game</label>
                <input type="text" name="gamePrice" id="gamePrice">
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="waves-effect waves-light btn" value="Calculate Price" onclick="calculatePrice()">Calculate Price</button>
                <!-- <input value="Calculate Price" onclick="calculatePrice()"> -->
              </td>
            </tr>
          </table>
        </form>
        <p id="calculate"></p>
      </div>
      <script>
        function calculatePrice()
        {
          var form = document.forms["getGames"];
          var val1 = form.elements["numOfGames"];
          var val2 = form.elements["gamePrice"];

          var numOfGames = 0;
          var gamePrice = 0;
          var total = 0;

          if (val1.value != "" && val2.value != "")
          {
            numOfGames = parseInt(val1.value);
            gamePrice = parseInt(val2.value);

            total = numOfGames * gamePrice;

            document.getElementById('calculate').innerHTML = total;
          }
          else
          {
            document.getElementById('calculate').innerHTML = 'Error!!';
          }
        }
      </script>
      <div class="col l5 offset-l2 m12 s12">
        <h5 class="center">Calculate the product of two numbers?</h5>
        <form id="getMathAnswers">
          <table>
            <tr>
              <td>
                <label>Number One</label>
                <input type="text" name="num1" id="num1">
              </td>
            </tr>
            <tr>
              <td>
                <label>Number Two</label>
                <input type="text" name="num2" id="num2">
              </td>
            </tr>
            <tr>
              <td>
                <button type="button" class="waves-effect waves-light btn" value="Calculate Total" onclick="calculateTotal()">Calculate Total</button>
              </td>
            </tr>
          </table>
        </form>
        <p id="total"></p>
      </div>
      <script>
        function calculateTotal()
        {
          var form = document.forms["getMathAnswers"];
          var val1 = form.elements["num1"];
          var val2 = form.elements["num2"];

          var n1 = 0;
          var n2 = 0;
          var total = 0;

          if (val1.value != "" && val2.value != "")
          {
            numOfGames = parseInt(val1.value);
            gamePrice = parseInt(val2.value);

            total = n1 * n2;

            document.getElementById('total').innerHTML = total;
          }
          else
          {
            document.getElementById('total').innerHTML = 'Error!!';
          }
        }
      </script>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="../../js/initscript.js"></script>
</body>
<?php include ('footer.php'); ?>