
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Dada's App</title>
</head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="/phpmailer/send.php" method="post">
<div class="container">
  <div class="form-group">
    <label for="name">Name / Nickname</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div> 
      <input id="name" name="name" placeholder="your name..." type="text" required="required" class="form-control"> 
      <div class="input-group-append">
        <div class="input-group-text">
          <i class="fa "></i>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="tel">Telaphone</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-phone"></i>
        </div>
      </div> 
      <input id="tel" name="tel" placeholder="your phone #" type="text" required="required" class="form-control"> 
      <div class="input-group-append">
        <div class="input-group-text">
          <i class="fa "></i>
        </div>
      </div>
    </div>
  </div>
  
    <div class="form-group">
    <label for="select">Pick 1 or more...</label> 
    <div>
      <select multiple="multiple" id="select" name="select" class="custom-select" required="required">
        <option value="weed">Weed</option>
        <option value="tina">Tina</option>
        <option value="adderal">Adderal</option>
        <option value="xanax">Xanax</option>
        <option value="xtcy">Xtcy</option>
      </select>
    </div>
  </div> 
  
  
  
  <div class="form-group">
    <label></label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" required="required" class="custom-control-input" value="pickup"> 
        <label for="radio_0" class="custom-control-label">Pickup</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" required="required" class="custom-control-input" value="delivery"> 
        <label for="radio_1" class="custom-control-label">Delivery</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="address">Delivery Address</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card-o"></i>
        </div>
      </div> 
      <input id="address" name="address" placeholder="if for delivery type your address" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="message">Message</label> 
    <textarea id="message" name="message" cols="40" rows="5" class="form-control"></textarea>
  </div> 
   <input type="hidden" id="custId" name="email" value="marcos60649@gmail.com">
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</form>
</body>
<script>
      function formatPhoneNumber(value) {
        if (!value) return value;
        const phoneNumber = value.replace(/[^\d]/g, '');
        const phoneNumberLength = phoneNumber.length;
        if (phoneNumberLength < 4) return phoneNumber;
        if (phoneNumberLength < 7) {
          return `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3)}`;
        }
        return `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(
          3,
          6
        )}-${phoneNumber.slice(6, 9)}`;
      }

      function phoneNumberFormatter() {
        const inputField = document.getElementById('phoneNumber');
        const formattedInputValue = formatPhoneNumber(inputField.value);
        inputField.value = formattedInputValue;
      }
    </script>

</html>
