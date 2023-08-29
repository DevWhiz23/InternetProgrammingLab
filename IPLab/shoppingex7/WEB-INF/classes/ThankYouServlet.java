import javax.servlet.*;
import javax.servlet.http.*;
import java.io.IOException;
import java.io.PrintWriter;

public class ThankYouServlet extends HttpServlet {
    public void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        out.println("<html>");
        out.println("<head>");
        out.println("<title>Thank You Page</title>");
        out.println("</head>");
        out.println("<body>");
        out.println("<h2>Thank You for Your Purchase!</h2>");
        out.println("</body>");
        out.println("</html>");
    }
}
