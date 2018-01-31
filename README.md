# prueba_fandango

1. En un concurso se establece que la cantidad de ganadores sea igual al número de ronda en la que se está participando, para elegir a los ganadores se obtiene un número aleatorio que será igual a la suma de los números de los participantes.
Ejemplo:

Se tiene que en el concurso están participando los números [10, 20, 80, 2, 0, 1, -3]

En la ronda #1 sale el número 20, entonces el ganador es el número 20 de los participantes.

En la ronda #2 sale el número 12, entonces los ganadores son 10 y 2

En la ronda #3 sale el número 83, entonces los ganadores son 80, 2, 1

En la ronda #4 sale el número 80, entonces los ganadores son 80, 2, 1, -3

Así hasta la ronda n.

Implementa una función donde le pueda indicar los participantes, la ronda y el número aleatorio, el cual debe indicarme quiénes son los ganadores según la ronda indicada.

2. You have a list of dishes. Each dish is associated with a list of ingredients used to prepare it. You want to group the dishes by ingredients, so that for each ingredient you'll be able to find all the dishes that contain it (if there are at least 2 such dishes).
Return an array where each element is a list with the first element equal to the name of the ingredient and all of the other elements equal to the names of dishes that contain this ingredient. The dishes inside each list should be sorted alphabetically. The result array should be sorted alphabetically by the names of the ingredients in its elements.

Ejemplo:

For
o      dishes = [["Salad", "Tomato", "Cucumber", "Salad", "Sauce"],
o                ["Pizza", "Tomato", "Sausage", "Sauce", "Dough"],
o                ["Quesadilla", "Chicken", "Cheese", "Sauce"],
o                ["Sandwich", "Salad", "Bread", "Tomato", "Cheese"]]
the output should be

  groupingDishes(dishes) = [["Cheese", "Quesadilla", "Sandwich"],
                            ["Salad", "Salad", "Sandwich"],
                            ["Sauce", "Pizza", "Quesadilla", "Salad"],
                            ["Tomato", "Pizza", "Salad", "Sandwich"]]
For
o      dishes = [["Pasta", "Tomato Sauce", "Onions", "Garlic"],
o                ["Chicken Curry", "Chicken", "Curry Sauce"],
o                ["Fried Rice", "Rice", "Onions", "Nuts"],
o                ["Salad", "Spinach", "Nuts"],
o                ["Sandwich", "Cheese", "Bread"],
o                ["Quesadilla", "Chicken", "Cheese"]]
the output should be

  groupingDishes(dishes) = [["Cheese", "Quesadilla", "Sandwich"],
                            ["Chicken", "Chicken Curry", "Quesadilla"],
                            ["Nuts", "Fried Rice", "Salad"],
                            ["Onions", "Fried Rice", "Pasta"]]
Input/Output

o    [input] array.array.string dishes

An array of dishes. dishes[i] for each valid i contains information about the ith dish: the first element of dishes[i] is the name of the dish and the following elements are the ingredients of that dish. Both the dish name and the ingredient names consist of English letters and spaces. It is guaranteed that all dish names are different. It is also guaranteed that ingredient names for one dish are also pairwise different.

Guaranteed constraints:
1 ≤ dishes.length ≤ 500,
2 ≤ dishes[i].length ≤ 10,
1 ≤ dishes[i][j].length ≤ 50.

o    [output] array.array.string

The array containing the grouped dishes.
