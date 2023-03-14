<!DOCTYPE html>
<div
class="p-1 text-center bg-image"
style="
  background-image: url('brown.png');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 120vh;
  Width: 50;">

   

<!DOCTYPE html>
<html>
<head>
  <title>Checkout Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body>
    <div class="col-md-4 container bg-default">
      
      <h4 class="my-4">
          Billing Address
      </h4>
      
      <form>
        <div class="form-row">
          <div class="col-md-6 form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" placeholder="First Name">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-md-6 form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" placeholder="Last Name">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="username">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>  
              <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                Your username is required.
              </div>
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
        </div>

        <div class="form-group">
          <label for="adress">Address</label>
          <input type="text" class="form-control" id="adress" placeholder="1234 Main Street" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 form-group">
            <label for="country">Country</label>
            <select type="text" class="form-control" id="country">
              <option value>Choose...</option>
              <option>Philippines</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-4 form-group">
            <label for="city">City</label>
            <select type="text" class="form-control" id="city">
              <option value>Choose...</option>
              <option>Muntinlupa City</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
            
          <div class="col-md-4 form-group">
            <label for="postcode">Postcode</label>
            <select type="text" class="form-control" id="postcode">
              <option value>Choose...</option>
              <option>1772</option>
            </select>
            <div class="invalid-feedback">
              Postcode required.
            </div>
          </div>
        </div>

        <hr>
        
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="shipping-adress"> 
            Shipping address is the same as my billing address
          <label for="shipping-adress" class="form-check-label"></label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="same-adress">
            Save this information for next time
          <label for="same-adress" class="form-check-label"></label>          
          </div>

        <hr>

        <h4 class="mb-4">Payment</h4>
        
        <div class="form-check">
          <input type="radio" class="form-check-input" id="credit" name="payment-method" checked required>
          <label for="credit" class="form-check-label">Cash on Delivery</label>
        </div>

        <div class="cart-btn">  
      <a href="End.php" class="btn btn btn-primary bt-lg btn-block">proceed to checkout</a>
   </div>
  

      </form>
    </div>
</body>
</html>