<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Product Discount Calculator</title>
</head>
<body>
<h1> Product Discount Calculator</h1>
    <form action="display_discount.php" method="post">
        Product Desciption:  <input type="text" name="desciption">
        <br><br>
        List Price:  <input type="text" name="price">
        <br><br>
        Discount Percent:  <input type="text" name="percent"> %
        <br><br>
        <input type="submit" value="Calculate DisCount">
    </form>
</body>
</html>