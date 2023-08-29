import java.io.*;
import java.util.*;
import javax.servlet.*;

public class InvokeServlet extends GenericServlet {
    public void service(ServletRequest req, ServletResponse res) throws ServletException, IOException {
        try (PrintWriter out = res.getWriter()) {
            Enumeration<String> en = req.getParameterNames();
            while (en.hasMoreElements()) {
                String name_received = en.nextElement();
                out.println(name_received + "=");
                String value_received = req.getParameter(name_received);
                if (value_received != null) {
                    out.println(value_received);
                }
            }
        }
    }
}
