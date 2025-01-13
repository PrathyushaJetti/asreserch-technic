<?php
$meta = [
  'title' => "AS Research and Technical Analysis Services in India",
  'description' => " AS Research and Technical Analysis Services offer expert insights and strategies for market trends, helping clients make informed financial decisions",
  'keywords' => "technical stock analysis, market research technique, technical analysis explained, business research analyst, technical analysis, technical analysis of stocks, stock technical analysis, stock market technical analysis, technical analysis for stock market, stock market analysis, stock market fundamental analysis, fundamental analysis, equity fundamental analysis, fundamental analysis vs technical analysis, equity market analysis,",


];
include('includes/header.php');

?>

<style>
  .body {
    width: 500px;
    margin: 0 auto;
    padding: 50px;
    background-color: #2386c8;
    margin-top: 30px;
  }

  div.elem-group {
    margin: 20px 0;
  }

  div.elem-group.inlined {
    width: 49%;
    display: inline-block;
    float: left;
    margin-left: 1%;
  }

  label {
    display: block;
    font-family: "Nanum Gothic";
    padding-bottom: 10px;
    font-size: 1.25em;
  }

  input,
  select,
  textarea {
    border-radius: 2px;
    border: 2px solid #777;
    box-sizing: border-box;
    font-size: 1.25em;
    font-family: "Nanum Gothic";
    width: 100%;
    padding: 10px;
  }

  div.elem-group.inlined input {
    width: 95%;
    display: inline-block;
  }

  textarea {
    height: 250px;
  }

  hr {
    border: 1px dotted #ccc;
  }

  button {
    height: 50px;
    background: orange;
    border: none;
    color: white;
    font-size: 1.25em;
    font-family: "Nanum Gothic";
    border-radius: 4px;
    cursor: pointer;
  }

  button:hover {
    border: 2px solid black;
  }
</style>


<div class="page-about">
  <center>
    <h1> Regestration </h1>
  </center>
  <div class="container">

    <form action="reservation.php" method="post" class="body">
      <div class="elem-group">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="visitor_name" placeholder="your name " pattern=[A-Z\sa-z]{3,20} required>
      </div>
      <div class="elem-group">
        <label for="email">Your E-mail</label>
        <input type="email" id="email" name="visitor_email" placeholder="mail" required>
      </div>
      <div class="elem-group">
        <label for="phone">Your Phone</label>
        <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872"
          pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
      </div>
      <hr>
      <div class="elem-group ">
        <label for="adult">plans</label>
        <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
      </div>
      <!-- <div class="elem-group inlined">
                  <label for="child">Children</label>
                  <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
                </div> -->
      <!-- <div class="elem-group inlined">
        <label for="checkin-date">Check-in Date</label>
        <input type="date" id="checkin-date" name="checkin" required>
      </div>
      <div class="elem-group inlined">
        <label for="checkout-date">Check-out Date</label>
        <input type="date" id="checkout-date" name="checkout" required>
      </div> -->
      <div class="elem-group">
        <label for="room-selection">Select plan </label>
        <select id="room-selection" name="room_preference" required>
         
          <option value="connecting">Delivery Cash Calls</option>
          <option value="adjoining">Intraday Cash Calls</option>
          <option value="adjacent">Nifty+bank Nifty Futures Calls</option>
          <option value="adjacent">Nifty+nifty Option Calls</option>
          <option value="adjacent">Bank Nifty+bank Nifty Option Calls</option>
          <option value="adjacent">Nifty+ Bank Nifty Option Calls</option>
          <option value="adjacent">Mcx Calls</option>
          <option value="adjacent">Positional Mcx Calls</option>
          <option value="adjacent">Currency Calls</option>
         

        </select>
      </div>
      <hr>
      <div class="elem-group">
        <label for="message">Anything Else?</label>
        <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important."
          required></textarea>
      </div>
      <button type="submit">Book The plans </button>
    </form>
  </div>
</div>
<!-- <script>
  var currentDateTime = new Date();
  var year = currentDateTime.getFullYear();
  var month = currentDateTime.getMonth() + 1;
  var date = currentDateTime.getDate() + 1;

  if (date < 10) {
    date = "0" + date;
  }
  if (month < 10) {
    month = "0" + month;
  }

  var dateTomorrow = year + "-" + month + "-" + date;
  var checkinElem = document.querySelector("#checkin-date");
  var checkoutElem = document.querySelector("#checkout-date");

  checkinElem.setAttribute("min", dateTomorrow);

  checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
  };

</script> -->

<!-- Footer Start -->
<?php ;

include('includes/footer.php');

?>

</html>