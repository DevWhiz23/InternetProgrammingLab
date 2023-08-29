
<%@ page language="java" contentType="text/html; charset=UTF-8" %>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1>User Registration</h1>
    
    <form action="Authenticate.jsp" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
