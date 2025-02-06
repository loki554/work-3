import java.util.Scanner;
import java.util.Random;

public class Main {

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        Random random = new Random();

        String[] gameArray = {"КАМЕНЬ", "НОЖНИЦЫ", "БУМАГА"};
        String randomRoll;
        String userChoice;
        String isRunning = "да";

        do {
            userChoice = "";

            System.out.println("*********************");
            System.out.println("КАМЕНЬ НОЖНИЦЫ БУМАГА");
            System.out.println("*********************");
            System.out.print("Ваш выбор: ");
            userChoice = scanner.nextLine().toUpperCase();

            randomRoll = gameArray[random.nextInt(0,3)];

            while (!userChoice.equals(gameArray[0]) && !userChoice.equals(gameArray[1]) && !userChoice.equals(gameArray[2])) {
                System.out.println("******************");
                System.out.println("Неправильный ввод!");
                System.out.println("******************");
                System.out.print("Ваш выбор: ");
                userChoice = scanner.nextLine().toUpperCase();
            }

            System.out.println("Бот выбрал: " + randomRoll);

            if (userChoice.equals(randomRoll)) {
                System.out.println("******");
                System.out.println("Ничья!");
                System.out.println("******");
            }
            else if (userChoice.equals("КАМЕНЬ") && randomRoll.equals("БУМАГА") ||
                    userChoice.equals("БУМАГА") && randomRoll.equals("НОЖНИЦЫ") ||
                    userChoice.equals("НОЖНИЦЫ") && randomRoll.equals("КАМЕНЬ")) {
                System.out.println("*********");
                System.out.println("Проигрыш!");
                System.out.println("*********");
            }
            else {
                System.out.println("*******");
                System.out.println("Победа!");
                System.out.println("*******");
            }
            do {
                System.out.println("Сыграть ещё? (Да/Нет)");
                isRunning = scanner.nextLine().toLowerCase();
                if (!isRunning.equals("да") && !isRunning.equals("нет")) {
                    System.out.println("Неправильный ввод!");
                }
            } while (!isRunning.equals("да") && !isRunning.equals("нет"));
        } while (isRunning.equals("да"));
        
        System.out.println("Выход...");
        
        scanner.close();
    }
}
