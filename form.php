<?php
session_start();
require 'header.php'; ?>

<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>交通積分審核</h2>
    <p class="lead">積分很重要</p>
  </div>
  <!--<div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Product name</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$12</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Second product</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$8</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Third item</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-$5</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>$20</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>-->
  <style>
    .col {
      padding-left: 0;
      padding-right: 30px;
      min-width: auto;
    }
  </style>
  <?php
  echo '<div class="row"><label>填表人</label></div>
  <div class="row">
  <div class="col">';
  echo '<input class="form-control" id="disabledInput" type="text" placeholder="', $_SESSION['user']['realname'], '" disabled>';
  ?>
</div>
<div class="col-md-5">
  <a href="../logout.php"><button class="btn btn-primary btn-sm" type="submit">登出</button></a></div>
</div>

<form class="needs-validation" action="form_output.php" method="post" novalidate>
  <?php
  $pdo = new PDO('mysql:host=whsh.site;port=3306;dbname=account;charset=utf8', 'ncchen', 'ncchen1234');
  foreach ($pdo->query('select * from questions') as $row) {
    switch ($row['genre']) {

      case 'dropDownMenu':
        echo '
        <div class="row">
            <label>', $row['question'];
        echo '</label>
            <select class="custom-select d-block w-100" name="';
        echo $row['id'], '" required>';
        $opts = explode(",", $row['options']);
        foreach ($opts as $opt) {
          echo '<option value="', $opt, '">', $opt, '</option>';
        }
        echo '</select>
            <div class="invalid-feedback">
              必填！
            </div>
        </div>';
        break;

      case 'shortAnswerQuestions':
        echo '<div class="row">
                  <label>';
        echo $row['question'], '</label>
                  <input type="text" class="form-control" name="';
        echo $row['id'], '" placeholder="" value="" required>
                <div class="invalid-feedback">
                    必填！
                  </div>
              </div>';
        break;

      case 'yesNoQuestions':
        echo '<div class="d-block my-3">';
        echo '<label>', $row['question'], '</label>';
        echo '<div class="custom-control custom-radio">
            <input name="';
        echo $row['id'], '"id="debit" type="radio" class="custom-control-input" value="是" checked required>
            <label class="custom-control-label" for="debit"> 是 </label>
            </div>
              <div class="custom-control custom-radio">
              <input name="';
        echo $row['id'], '"id="paypal" type="radio" class="custom-control-input" value="否" required>
              <label class="custom-control-label" for="paypal"> 否 </label>
              </div>
            </div>';
        break;
    }
  }
  ?>





  <!--<div class="mb-3">
      <label for="email">Email <span class="text-muted">(Optional)</span></label>
      <input type="email" class="form-control" id="email" placeholder="you@example.com">
      <div class="invalid-feedback">
        Please enter a valid email address for shipping updates.
      </div>
    </div>

    <div class="mb-3">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
      <div class="invalid-feedback">
        Please enter your shipping address.
      </div>
    </div>

    <div class="mb-3">
      <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
      <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
    </div>

    <div class="row">
      <div class="col-md-5 mb-3">
        <label for="country">Country</label>
        <select class="custom-select d-block w-100" id="country" required>
          <option value="">Choose...</option>
          <option>United States</option>
        </select>
        <div class="invalid-feedback">
          Please select a valid country.
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="state">State</label>
        <select class="custom-select d-block w-100" id="state" required>
          <option value="">Choose...</option>
          <option>California</option>
        </select>
        <div class="invalid-feedback">
          Please provide a valid state.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="zip">Zip</label>
        <input type="text" class="form-control" id="zip" placeholder="" required>
        <div class="invalid-feedback">
          Zip code required.
        </div>
      </div>
    </div>
    <hr class="mb-4">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="same-address">
      <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
    </div>
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="save-info">
      <label class="custom-control-label" for="save-info">Save this information for next time</label>
    </div>
    <hr class="mb-4">


    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="cc-name">Name on card</label>
        <input type="text" class="form-control" id="cc-name" placeholder="" required>
        <small class="text-muted">Full name as displayed on card</small>
        <div class="invalid-feedback">
          Name on card is required
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="cc-number">Credit card number</label>
        <input type="text" class="form-control" id="cc-number" placeholder="" required>
        <div class="invalid-feedback">
          Credit card number is required
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 mb-3">
        <label for="cc-expiration">Expiration</label>
        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
        <div class="invalid-feedback">
          Expiration date required
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="cc-expiration">CVV</label>
        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
        <div class="invalid-feedback">
          Security code required
        </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="username">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control" id="username" placeholder="Username" required>
        <div class="invalid-feedback" style="width: 100%;">
          Your username is required.
        </div>
      </div>
    </div>-->

  <hr class="mb-4">
  <button class="btn btn-primary btn-lg btn-block" type="submit">完成</button>
</form>
</div>
<?php require 'footer.php'; ?>