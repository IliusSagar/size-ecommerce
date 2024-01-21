<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .button {
  float: left;
  margin: 0 5px 0 0;
  width: 100px;
  height: 40px;
  position: relative;
}

.button label,
.button input {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.button input[type="radio"] {
  opacity: 0.011;
  z-index: 100;
}

.button input[type="radio"]:checked + label {
  background: #20b8be;
  border-radius: 4px;
}

.button label {
  cursor: pointer;
  z-index: 90;
  line-height: 1.8em;
}

    </style>
</head>
<body>

    <div class="row">
        <div class="col-lg-4">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Color</label>
            <select class="form-control input-lg" id="exampleFormControlSelect1" name="color"> @foreach($product_size as $color)
                <option value="{{ $color }}">{{ $color }}</option>
                
           @endforeach
            </select>          		
        </div> 
        </div> 
</body>
</html>