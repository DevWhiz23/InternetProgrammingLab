import javax.servlet.*;
import javax.servlet.http.*;
import java.io.IOException;
import java.io.PrintWriter;

public class RegisterServlet extends HttpServlet {
    public void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String username = request.getParameter("username");
        String password = request.getParameter("password");
        String email = request.getParameter("email");

        // Store username in session cookie for session tracking
        HttpSession session = request.getSession();
        session.setAttribute("username", username);

        // Proceed to cart page
        response.sendRedirect("CartServlet");
    }
}
