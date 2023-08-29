import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class Second extends HttpServlet {
    protected void doGet(HttpServletRequest request,HttpServletResponse response) throws ServletException,IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out=response.getWriter();
       //get Parameter from hidden field
       String user=request.getParameter("user");
       out.println("Welcome"+ user);      
    }
}
