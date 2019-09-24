<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Calculate Discount</title>
</head>
<body>
<form action="/discount" method="post">
    @csrf
    <br>
    <table border="2" style="border-color: darkgreen; width: 255px; height: 200px">
        <tr>
            <td><p style="color: midnightblue">Calculate Discount</p></td>
        </tr>
        <tr>
            <td>Product detail:<input class="btn" style="width: 100%; background-color: aqua" type="text" name="hint" placeholder="Product description">
            </td>
        </tr>
        <tr>
            <td>Product Price:<input class="btn" style="width: 100%; background-color: aqua" type="text" name="price" placeholder="Product price"></td>
        </tr>
        <tr>
            <td>Product Discount:<input class="btn" style="width: 100%; background-color: aqua" type="text" name="discount" placeholder="Discount"></td>
        </tr>
        <tr>
            <td>
                <button type="submit" style="width: 100%; border-color: darkgreen; color: darkgreen;border-radius: 8px">
                    Check Discount
                </button>
            </td>
        </tr>

    </table>
</form>
</body>
</html>
