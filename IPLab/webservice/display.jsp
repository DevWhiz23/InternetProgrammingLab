<%@page contentType="text/html"pageEncoding="UTF-8"%><!DOCTYPE html><html><head><meta http-equiv="Content-Type"content="text/html; charset=UTF-8"><title>Dish Details</title></head><
    body style = "font-size:30px;"bgcolor="yellow"><%try
    {
    dishes.DishDetailsService_Service service = new dishes.DishDetailsService_Service();
    dishes.DishDetailsService port = service.getDishDetailsServicePort();
    // TODO initialize WS operation arguments here
    java.lang.String dishName = request.getParameter("dish_name");
    // TODO process result here
    java.util.List<java.lang.String> result = port.dishDetails(dishName);
    if(result != null && !result.isEmpty()) {
%>
    <center>
        <!-- Displaying dish details -->
        <h1 align="center">&nbsp;&nbsp;DISH DETAILS</h1>
        <table align="center" style="font-size:30px;">
            <tr>
                <td><b>Dish</b></td>
                <td><b>:</b></td>
                <td><% out.print(dishName); %></td>
            </tr>
            <tr>
                <td><b>Calories</b></td>
                <td><b>:</b></td>
                <td><% out.print(result.get(0)); %></td>
            </tr>
            <tr>
                <td><b>Ingredients</b></td>
                <td><b>:</b></td>
                <td><% out.print(result.get(1)); %></td>
            </tr>
            <tr>
                <td><b>Price</b></td>
                <td><b>:</b></td>
                <td><% out.print(result.get(2)); %></td>
            </tr>
            <tr>
                <td><b>Serving Size</b></td>
                <td><b>:</b></td>
                <td><% out.print(result.get(3)); %></td>
            </tr>
             <tr>
                <td><b>Toppings</b></td>
                <td><b>:</b></td>
                <td><% out.print(result.get(3)); %></td>
            </tr>

        </table>
    </center>
    <p style="margin-top:300px;text-align: right;"><a href="index.html">Go back to home page</a></p>
<%
    } else {
%>
    <h1 style="text-align:center">DISH DETAILS NOT AVAILABLE</h1>
    <p style="margin-top:600px;text-align: right;"><a href="index.html">Go back to home page</a></p>
<%
    }
}catch(
    Exception ex)
    {
    // TODO handle custom exceptions here
    out.println(ex.toString());
}%></body></html
>
