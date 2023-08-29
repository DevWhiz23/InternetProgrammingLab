<%@ page import="java.util.List" %>
<%@ page import="java.util.ArrayList" %>
<%@ page import="com.example.User" %>

<%
    String username = request.getParameter("username");
    String password = request.getParameter("password");
    
    // Define a list of registered users (replace with your actual user data)
    List<User> registeredUsers = new ArrayList<>();
    registeredUsers.add(new User("john", "password123"));
    registeredUsers.add(new User("jane", "secret"));
    
    // Perform user validation
    boolean isValidUser = false;
    for (User user : registeredUsers) {
        if (user.getUsername().equals(username) && user.getPassword().equals(password)) {
            isValidUser = true;
            break;
        }
    }
    
    if (isValidUser) {
        HttpSession sessionObj = request.getSession();
        sessionObj.setAttribute("username", username);
        response.sendRedirect("Cart.jsp");
    } else {
        // Display an error message or perform other actions for invalid users
        response.sendRedirect("InvalidUser.jsp");
    }
%>
