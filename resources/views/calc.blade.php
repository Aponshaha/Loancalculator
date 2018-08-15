
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Banking System</title>
  <link rel="stylesheet" href="style.css">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    Balance Check
    <div class="container" style="margin-top:20px;" >
    <div class="col-md-6">  
     <div class="row">
     <form action="/calc" method="post" >
        {{ csrf_field() }}
        
        <label for="Curr_Blnc">Your Balance:</label>
        <input placeholder="A" id="Curr_Blnc" value="" name="a" />
        <br>
        <br>
        
        <input placeholder="B" value="" name="b" />

        <select name="action">
            <option @if ($action == '+') selected="selected" @endif>Deposite</option>
            <option @if ($action == '-') selected="selected" @endif>Transfer money</option>
            <option @if ($action == '*') selected="selected" @endif>Loan</option>
            <option @if ($action == '/') selected="selected" @endif>FDR</option>
        </select>
        @if (isset($result))
            <strong> Your Current Balance: {{ $result }}</strong>
        @endif
        <button class="btn btn-success">Check Balance</button>
     </form>
     </div>
     </div>
    <div class="col-md-6">
    <div class="row">
     <form action="/calc" method="post" >
        {{ csrf_field() }}
       
        <input placeholder="Deposite/Loan amount" id="Blnc" value="" name="x" />
        <input placeholder="Year/Payment per installment" value="" name="y" />
        <input placeholder="interest rate=5%" value="{{ .05 }}" name="e" />

        <select name="action">
            <option @if ($action == '*') selected="selected" @endif>Intr</option>
            <option @if ($action == '/') selected="selected" @endif>Loan</option>
        </select>
        @if (isset($r) && $action == 'Intr')
            <strong> Interest will be: {{ $r }}</strong>
        @else
            <strong> Number of payment: {{ $r }}</strong>    
        @endif
        <button class="btn btn-success">Check </button>
     </form>
     </div>

     </div>
    </div>


    
</body>
</html>

