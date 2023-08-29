import javax.servlet.*;
import javax.servlet.http.*;
import java.io.IOException;
import java.io.PrintWriter;

public class BillingServlet extends HttpServlet {
    public void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String[] products = request.getParameterValues("product");

        // Calculate total bill amount
        double totalAmount = 0;
        for (String productId : products) {
            if (productId.equals("1")) {
                totalAmount += 5;
            } else if (productId.equals("2")) {
                totalAmount += 50;
            }
        }

        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        out.println("<html>");
        out.println("<head>");
        out.println("<title>Billing Page</title>");
        out.println("</head>");
        out.println("<body>");
        out.println("<h2>Billing Page</h2>");
        out.println("<h3>Total Bill Amount: $" + totalAmount + "</h3>");

        // Payment details form
        out.println("<form action=\"ThankYouServlet\" method=\"post\">");
        out.println("<label for=\"cardNumber\">Card Number:</label>");
        out.println("<input type=\"text\" id=\"cardNumber\" name=\"cardNumber\"><br><br>");
        out.println("<label for=\"cardHolder\">Card Holder:</label>");
        out.println("<input type=\"text\" id=\"cardHolder\" name=\"cardHolder\"><br><br>");
        out.println("<label for=\"expirationDate\">Expiration Date:</label>");
        out.println("<input type=\"text\" id=\"expirationDate\" name=\"expirationDate\"><br><br>");
        out.println("<label for=\"cvv\">CVV:</label>");
        out.println("<input type=\"text\" id=\"cvv\" name=\"cvv\"><br><br>");
        out.println("<input type=\"submit\" value=\"Pay\">");
        out.println("</form>");

        out.println("</body>");
        out.println("</html>");
    }
}
