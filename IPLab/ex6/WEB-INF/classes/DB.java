
//Import necessary packages
import java.io.IOException;
import java.io.PrintWriter;
import java.util.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.sql.*;
import java.sql.DriverManager;
import java.sql.Connection;
import java.sql.SQLException;

public class DB extends HttpServlet {

    public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        response.setContentType("text/html");

        // Setting connection and statement classes as null
        Connection conn = null;
        Statement stmt = null;
        PrintWriter out = response.getWriter();
        try {
            // Connecting to driver file
            Class.forName("com.mysql.jdbc.Driver");

            // Connecting to mysql database
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/members", "root", "");

            stmt = conn.createStatement();
            String sql;
            // Inputtong sql query
            sql = "SELECT * FROM mdets";
            ResultSet rs = stmt.executeQuery(sql);

            // Extract data from result set
            while (rs.next()) {
                String id = rs.getString("id");
                String name = rs.getString("name");
                String email = rs.getString("email");
                String phone = rs.getString("phone");
                String card = rs.getString("card");
                String age = rs.getString("age");

                // Display values
                out.println("<p> ID: " + id + "<br>");
                out.println("Name: " + name + "<br>");
                out.println("Email: " + email + "<br>");
                out.println("Phone: " + phone + "<br>");
                out.println("Card Type: " + card + "<br>");
                out.println("Age: " + age + "<br></p>");
            }

            out.println("</body></html>");
            // Clean-up environment
            rs.close();
            stmt.close();
            conn.close();
        }

        catch (Exception e) {
            System.out.println("Cannot connect to database due to:" + e);
        }
    }
}
