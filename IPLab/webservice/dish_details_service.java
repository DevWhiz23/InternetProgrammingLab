dish_details_service.java
// Import required packages
package dishes;

import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import java.util.*;

// Server-side web service
@WebService(serviceName = "dish_details_service")
public class dish_details_service {
    Map<String, String[]> DishMap = new HashMap<String, String[]>();

    @WebMethod(operationName = "dish_details")
    public String[] dish_details(@WebParam(name = "dish_name") String dish_name) {
        // Creating data for dishes
        String[] dishInformation;

        dishInformation = new String[] { "Spaghetti", "Italian", "Pasta dish with tomato sauce and meatballs",
                "Main course", "Vegetarian and Non-vegetarian" };
        DishMap.put("Spaghetti", dishInformation);

        dishInformation = new String[] { "Pizza", "Italian",
                "Flatbread topped with tomato sauce, cheese, and various toppings", "Main course",
                "Vegetarian and Non-vegetarian" };
        DishMap.put("Pizza", dishInformation);

        dishInformation = new String[] { "Cake", "Various",
                "Sweet baked dessert typically made with flour, sugar, eggs, and flavorings", "Dessert", "Vegetarian" };
        DishMap.put("Cake", dishInformation);

        dishInformation = new String[] { "Burger", "American",
                "Sandwich consisting of a cooked patty of ground meat, typically beef, placed inside a sliced bread roll",
                "Main course", "Vegetarian and Non-vegetarian" };
        DishMap.put("Burger", dishInformation);

        String[] description = DishMap.get(dish_name);
        return description;
    }}
