<body>

    <form method="get">
     <br>
      Input first number<br>
        <input name="num1"><br>
        Input second number<br>
        <input name="num2"><br>
        <br>
        <button type="+" name="+" value="+"> + </button>
        <button type="-" name="-" value="-"> - </button>
        <button type="*" name="*" value="*"> * </button>
        <button type="/" name="/" value="/"> / </button>
    </from>
    <br>
    <br>
    <?php
    if(isset($_GET["+"]))
    {
        $fn = $_GET['num1'];
        $sn = $_GET['num2'];
        echo $fn + $sn; 
    }
    else if(isset($_GET["-"]))
    {
        $fn = $_GET['num1'];
        $sn = $_GET['num2'];
        echo $fn - $sn; 
    }
    else if(isset($_GET["*"]))
    {
        $fn = $_GET['num1'];
        $sn = $_GET['num2'];
        echo $fn * $sn; 
    }
    else if(isset($_GET["/"]))
    {
        $fn = $_GET['num1'];
        $sn = $_GET['num2'];
        echo $fn / $sn; 
    }
   ?>
   
</body>
