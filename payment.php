<?php
session_start();
?>
<?php
   

   if($_SERVER['REQUEST_METHOD']=="POST"&&isset($_POST['submit'])){
     $card_number=$_POST['card_number'];
     $holder_name=$_POST['holder_name'];
     $expiry_month=$_POST['expiry_month'];
     $expiry_year=$_POST['expiry_year'];
     $cvv=$_POST['cvv'];
     $validDetails=true;
     $card_number = preg_replace("/[^0-9]/", "", $card_number);
     if(!preg_match("/^[0-9]{16}$/",$card_number)){
       $validDetails=false;
     }
     if (!preg_match("/^[a-zA-Z ]*$/",$holder_name)) {
       $validDetails=false;
     }
     if(!preg_match("/^[0-9]{2}$/",$expiry_month)){
       $validDetails=false;
     }
     if(!preg_match("/^[0-9]{2}$/",$expiry_year)){
       $validDetails=false;
     }
     if(!preg_match("/^[0-9]{3}$/",$cvv)){
       $validDetails=false;
     }
     if($validDetails){
       header("location:bank.php");
     }
   }

   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>payment</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        background-color: #ebebeb;
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
          sans-serif;
      }
      header {
        padding-top: 1rem;
        padding-left: 1.2rem;
        padding-bottom: 1rem;
        height: 6vh;
        background-color: white;
        box-shadow: inset 0 0 0 2px #dfe3e7;
      }
      header img {
        height: 100%;
      }
      main {
        margin: 0 1.2rem;
        display: flex;
        justify-content: space-between;
        margin-top: 1rem;
        gap: 1rem;
        height: 80vh;
      }
      .payment_card {
        width: 75%;
        background-color: white;
        box-shadow: inset 0 0 0 2px #dfe3e7;
      }
      .recipt {
        width: 25%;
        background-color: white;
        box-shadow: inset 0 0 0 2px #dfe3e7;
        position: relative;
      }
      .heading {
        padding-left: 1rem;
        background-color: #f84464;
        color: white;
        height: 10%;
        display: flex;
        align-items: center;
        /* padding-left: 1rem; */
        font-weight: 300;
        font-size: 1.2rem;
      }
      .enter_text {
        font-weight: 600;
      }
      .payment {
        padding-left: 1.5rem;
      }
      .card {
        display: flex;
        flex-direction: column;
        background: linear-gradient(
          125deg,
          #e5e7eb 0,
          #e0e3e7 50%,
          #d2d6de 51%,
          #d2d6de 100%
        );
        zoom: 1;
        border-radius: 5px;
        color: #969696;
        height: 31vh;
        width: 26vw;
        gap: 5%;
        padding: 1.5rem;
      }
      input {
        height: 1.9rem;
        border: none;
        box-shadow: inset 2px 1px 0 #bec1c9;
        padding-left: 0.7rem;
        outline: none;
      }
      .expiry_inputs {
        display: flex;
        gap: 0.5rem;
      }
      .expiry_inputs input {
        width: 15%;
        height: 2rem;
      }
      .cvv{
        text-align: end;
      }
      .cvv input {
        width: 60%;
      }
      label {
        display: block;
        font-size: 0.7rem;
        margin-bottom: 0.1rem;
      }
      .other_details {
        display: flex;
        width: 100%;
      }
      ::placeholder{
        color: #acacac;
        font-size: 0.6rem;
        word-spacing: 1px;
        letter-spacing: 1px;
      }
      #card_number{
        letter-spacing: 3px;
        width: 95%;

      }
      #holder_name{
        width: 95%;
      }
      .payment_button{
        color: white;
        background-color: #f84464;
        border: none;
        border-radius: 3px;
        padding: 0.7rem 0;
        width: 20%;
        margin-top: 1rem;
      }
      .t_c{
        font-size: 0.7rem;
        color: #969696;
      }
      .t_c a{
        color: #676767;
        font-weight: 700;
        text-decoration: none;
      }
      .recipt::after{
        content: "";
        padding: 1rem;
        border-radius: 50%;
        position: absolute;
        background-color: #ebebeb;
        top: 45%;
        left: -5%;
      }
      .recipt::before{
        content: "";
        padding: 1rem;
        border-radius: 50%;
        position: absolute;
        background-color: #ebebeb;
        top: 45%;
        right: -5%;
      }
      .recipt{
        position: relative;
        padding: 1rem 1.7rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }
      .total_tickets{
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: absolute;
        top: 4%;
        right: 10%;
      }
      .o_s{
        color: #807f7f;
        letter-spacing: 4px;
        font-size: 0.9rem;
      }
      .details{
        font-size: 0.8rem;
        color: #807f7f;
        margin: 0;
        margin-top: 0.4rem;

      }
      hr{
        position: absolute;
        top: 47%;
        right: 0;
        left: 0;
        width: 80%;
        border-right: 0;
        border-left: 0;
        border-bottom: 0;
        border-top: 2px dotted #c9c9c9;
      }
      .extra_charges{
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 0.9rem;
        color: rgb(103, 103, 103);
        margin-bottom: 1rem;
      }
      .amount_payable{
        display: flex;
        justify-content: space-between;
        background-color: #fffcdc;
        padding: 0.9rem 0.6rem;
      }
      .amount_payable #total_amount{
        font-size: 1.3rem;
      }
    </style>
  </head>
  <body>
    
    <header>
      <img src="project_images/logolight.png" alt="" />
    </header>
    <main>
      <div class="payment_card">
        <div class="heading">Payment Through Debit/Credit Card</div>
        <div class="payment">
          <p class="enter_text">Enter your Card details</p>
          <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>
            <div class="card">
              <div class="card_number">
                <label for="card_number">Card Number</label>
                <input
                  type="text"
                  name="card_number"
                  id="card_number"
                  onkeypress='formatCardNumber()'
                  placeholder="Enter Your 16 Digit Card Number"
                />
              </div>
              <div class="card_name">
                <label for="holder_name">Name</label>
                <input type="text" name="holder_name" id="holder_name" placeholder="Name on the card" />
              </div>
              <div class="other_details">
                <div class="expiry">
                  <label for="expiry_date">Expiry Date</label>
                  <div class="expiry_inputs">
                    <input type="text" name="expiry_month" id="expiry_date" placeholder="MM" maxlength="2" />
                    <input type="text" name="expiry_year" id="expiry_dat" placeholder="YY" maxlength="2"/>
                  </div>
                </div>
                <div class="cvv">
                  <label for="cvv">CVV</label>
                  <input type="password" name="cvv" id="cvv"  placeholder="CVV" maxlength="3"/>
                </div>
              </div>
            </div>
            <button class="payment_button" name='submit' type="submit">MAKE PAYMENT</button>
            <p class="t_c">
                By clicking "Make Payment" you agree to the <a href="#">terms and conditions</a> 
            </p>
          </form>
        </div>
      </div>
      <div class="recipt">
        <span class="total_tickets">
            <span style="font-size: 1.2rem; margin: 0;text-align: center;"><?php echo $_SESSION['seats'] ?></span> 
            <span style="font-size: 0.8rem;margin: 0; text-align: center;">Tickets</span>
        </span>
        <hr>
        <div class="first">
            <p class="o_s">ORDER SUMMERY</p>
            <p class="movie_name"><?php echo $_SESSION['movie_name'] ?> (<?php echo $_SESSION['rated'] ?>)</p>
            <p class="details" style='text-transform: capitalize;' ><?php echo $_SESSION['movie_langauage'] ?></p>
            <p class="details"><?php echo $_SESSION['theater_name'] ?> (<?php echo $_SESSION['screen_name'] ?>)</p>
            <p class="details">ticket id <?php echo $_SESSION['ticket_id'] ?></p>
            <p class="details"><?php echo $_SESSION['reg_date'] ?></p>
            <p class="details"><?php echo $_SESSION['reg_time'] ?></p>
        </div>
        <?php
          $amount;
          $c_f=50;
          if(isset($_POST['total_amount'])){
              $_SESSION['total_amount']=$_POST['total_amount'];
              $_SESSION['total_amount']=$_SESSION['total_amount']+$c_f;
          }else{
              echo "";
          }
    ?>
        <div class="second">
            <div class="extra_charges">
                <span>Convenience fees</span>
                <span>Rs. <?php echo $c_f ?></span>
            </div>
            <div class="amount_payable">
                <span>Amount Payable</span>
                <span id="total_amount">Rs. <?php echo $_SESSION['total_amount'] ?></span>
                
            </div>
        </div>
        
      </div>
    </main>
  </body>
  <script>
    let i=0;
    function formatCardNumber() {
    var cardNumber = document.getElementById("card_number");
    var value = cardNumber.value;
    // var value = cardNumber.value.replace(/\D/g, '');
    // var formattedValue = "";
    // for (var i = 0; i < value.length; i++) {
    if (((value.length-i) == 4 || (value.length-i) == 8 ||(value.length-i) == 14 ) && (value.length) > 0 && (value.length) < 18) {
      cardNumber.value += " ";
      cardNumber.style.border='none';
      i++;
    }else if((value.length) > 18){
      cardNumber.style.border='1px solid red';
    }else if((value.length) <= 18){
      cardNumber.style.border='none';
    }

    if(i>=2){
      i=0;
    }
    // formattedValue += value[i];
    }
    // cardNumber.value = formattedValue;
    // }
  </script>
</html>
