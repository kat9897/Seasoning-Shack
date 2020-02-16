import java.util.*;
import java.io.*;
import java.io.File;


public class Recipe {
    private String name;

    private Queue<Object[]> ingredientList;
    /*-------------------------------------------------
    [0] contains the String name of the ingredient
    [1] contains the int quantity of the ingredient
    -------------------------------------------------*/

    private Queue<String> instructions;
    private File sourceFile;
    private Scanner fileReader;

    public Recipe(String pathname) {
        sourceFile = new File(pathname);
        ingredientList = new LinkedList<Object[]>();
        instructions = new LinkedList<String>();
        try {
        	fileReader = new Scanner(sourceFile);
        } catch(Exception e) {

        }
    }

    public void buildRecipe() {
        //Scanner pointer @ first char of first line
        name = fileReader.nextLine();
        //Scanner pointer at beginning of first ingredient
        
        fileReader.nextLine();
        String currLine = fileReader.nextLine();
        
        while(!currLine.equals("")) {
            Object[] ingredient = new Object[2];
            int quantity = Integer.parseInt(currLine.substring(0,currLine.indexOf(" ")));
            String ingredientName = currLine.substring(currLine.indexOf(" ") + 1);
            ingredient[0] = ingredientName;
            ingredient[1] = quantity;
            ingredientList.add(ingredient);
            currLine = fileReader.nextLine();
        }
        
        fileReader.nextLine();
        while(fileReader.hasNext()) {
        	instructions.add(fileReader.nextLine());
        }




    }


    /*---------------------
    Warning:
    DO NOT use this class method for anything other than debugging, the printing of the ingredient
    will infact cause the destruction of the information within the recipe.
    ---------------------*/
    public void testPrint() {
    	System.out.println(name + "\n");

    	System.out.println("Ingredients:\n");

    	while(!ingredientList.isEmpty()) {
    		Object[] ingTemp = ingredientList.peek();
    		System.out.println(ingTemp[1] + " " + ingTemp[0]);
    		ingredientList.remove();
    	}
    }

  
}

