<%@ page language="java" contentType="text/html; charset=UTF-8" %>
<%@ page import="javax.servlet.http.HttpSession" %>
<html>
<head>
    <title>Billing</title>
</head>
<body>
    <h1>Billing Information</h1>

    <% 
        // Sample product prices
        double product1Price = 50.00;
        double product2Price = 2.00;

        // Initialize the total bill amount
        double total = 0.00;

        // Retrieve the selected products from the previous page
        String[] selectedProducts = request.getParameterValues("product");
        if (selectedProducts != null) {
            for (String productId : selectedProducts) {
                if (productId.equals("1")) {
                    total += product1Price;
                } else if (productId.equals("2")) {
                    total += product2Price;
                }
                // Add more conditions for other product prices as needed
            }
        }
    %>

    <p>Amount: $<%= total %></p>
    
    <form action="ThankYou.jsp" method="post">
        <label for="cardNumber">Card Number:</label>
        <input type="text" name="cardNumber" id="cardNumber" required>
        <br><br>
        
        <label for="expiryDate">Expiry Date:</label>
        <input type="text" name="expiryDate" id="expiryDate" required>
        <br><br>
        
        <label for="cvv">CVV:</label>
        <input type="text" name="cvv" id="cvv" required>
        <br><br>
        
        <input type="submit" value="Pay Now">
    </form>
</body>
</html>
