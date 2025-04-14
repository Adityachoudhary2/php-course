<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Button-click PHP</title>
</head>
<body>
    <h1>Button Click</h1>
    <form method="post">
        <button type="submit" name="button" value="btn1">Call Function</button>
    </form>
</body>
</html>
 <?php
function btn_click_test(){
    echo "Button Clicked!";
}

if(isset($_POST['button'])){
    btn_click_test();
}
?>