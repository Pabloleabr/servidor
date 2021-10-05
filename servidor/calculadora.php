<p style="font-size: xx-large;">
<?php 
switch ($_GET["oprando"]) {
    case '+': 
        echo $_GET["o1"] + $_GET["o2"];
        break;
    
    case '-':
        echo $_GET["o1"] - $_GET["o2"];
        break;

    case '*':
        echo $_GET["o1"] * $_GET["o2"];
        break;

    case '/':
        echo $_GET["o1"] / $_GET["o2"];
        break;
}
?>

</p>
