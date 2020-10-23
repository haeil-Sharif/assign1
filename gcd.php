<body>

    <form method="get">
     <br>
      Input first number<br>
        <input name="num1"><br>
        Input second number<br>
        <input name="num2"><br>
        <br>
        <button type="submit" name="submit" value="submit"> Submit </button>
    </form>

<?php
if(isset($_GET["submit"]))

  $fn = $_GET['num1'];
  $sn = $_GET['num2'];
    function getGCD($num1, $num2)
    {
      if($num2 == 0)
      echo $num1;
      if($num2 != 0)
      return getGCD($num2, $num1%$num2);
    }
    $gcd = getGCD($fn, $sn);

?>

</body>