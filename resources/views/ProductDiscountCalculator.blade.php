<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>ProductDiscountCalculator</h1>
<form action="/viewProductDiscount" method="POST">
    @csrf
    <p>
        <input type="text" name="proDesc" placeholder="Product Description" required>
    </p>
    <p>
        <input type="number" name="listPr" placeholder="List Price" required>
    </p>
    <p>
        <input type="number" name="disPer" placeholder="Discount Percent" required>
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
</body>
</html>