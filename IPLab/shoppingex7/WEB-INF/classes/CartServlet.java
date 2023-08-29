import javax.servlet.*;
import javax.servlet.http.*;
import java.io.IOException;
import java.io.PrintWriter;

public class CartServlet extends HttpServlet {
    public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        // Retrieve username from session cookie
        HttpSession session = request.getSession();
        String username = (String) session.getAttribute("username");

        out.println("<html>");
        out.println("<head>");
        out.println("<title>Cart Page</title>");
        out.println("</head>");
        out.println("<body>");
        out.println("<h2>Welcome " + username + "</h2>");
        out.println("<form action=\"BillingServlet\" method=\"post\">");
        out.println("<h3>Products:</h3>");
        out.println("<input type=\"checkbox\" name=\"product\" value=\"1\">Pastry Wheel - ID: 1, Price: $5<br>");
        out.println("<input type=\"checkbox\" name=\"product\" value=\"2\">Food Processor - ID: 2, Price: $50<br><br>");
        out.println("<input type=\"submit\" value=\"Pay\">");
        out.println("</form>");
        out.println("</body>");
        out.println("</html>");
    }
}
