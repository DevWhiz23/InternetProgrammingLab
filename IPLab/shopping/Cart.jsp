<%@ page language="java" contentType="text/html; charset=UTF-8" %>
<%@ page import="javax.servlet.http.HttpSession" %>
<html>
<head>
    <title>Cart Page</title>
</head>
<body>
    <h1>Welcome, <%= session.getAttribute("username") %></h1>
    <h2>Cart</h2>
    <form action="Billing.jsp" method="post">
        <table>
            <tr>
                <th>Product Name</th>
                <th>Product ID</th>
                <th>Price</th>
                <th>Add to Cart</th>
            </tr>
            <tr>
                <td>Blender</td>
                <td>1</td>
                <td>$50</td>
                <td><input type="checkbox" name="product" value="1"></td>
            </tr>
            <tr>
                <td>Fork</td>
                <td>2</td>
                <td>$2</td>
                <td><input type="checkbox" name="product" value="2"></td>
            </tr>
            
        </table>
        <br>
        <input type="submit" value="Proceed to Billing">
    </form>
</body>
</html>
