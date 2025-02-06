import java.util.Scanner;
import java.util.Random;

public class Main {

    public static void main(String[] args) {

        Random random = new Random();
        Scanner scanner = new Scanner(System.in);

        int userBalance = 100;
        int bet;
        String[] symbols = {"🍒", "🍉", "🍋", "🔔", "⭐️", };
        String[] randomRoll = new String[3];

        System.out.println("*****************");
        System.out.println("JAVA*SLOT*MACHINE");
        System.out.println("*****************");
        System.out.println("Ваш баланс: $" + userBalance);

        while (userBalance > 0) {
            do {
                System.out.print("Ставка: ");
                bet = scanner.nextInt();
                if (bet > userBalance) {
                    System.out.println("Недостаточно средств!");
                }
                else if (bet <= 0) {
                    System.out.println("Некорректная ставка!");
                }
            } while (bet <= 0 || bet > userBalance);

            userBalance -= bet;
            scanner.nextLine();

            for (int i = 0; i < 3; i++) {
                randomRoll[i] = symbols[random.nextInt(symbols.length)];
            }

            System.out.println("*****************");
            System.out.println("| " + randomRoll[0] + " | " + randomRoll[1] + " | " + randomRoll[2] + " |");
            System.out.println("*****************");

            if (randomRoll[0].equals(randomRoll[1]) && randomRoll[1].equals(randomRoll[2])) {
                switch (randomRoll[0]) {
                    case "🍒" -> bet *= 3;
                    case "🍉" -> bet *= 5;
                    case "🍋" -> bet *= 10;
                    case "🔔" -> bet *= 25;
                    case "⭐️" -> bet *= 50;

                }
                System.out.println("Вы выиграли: $" + bet);
                userBalance += bet;
            }
            else if (randomRoll[0].equals(randomRoll[1])) {
                switch (randomRoll[0]) {
                    case "🍒" -> bet *= 2;
                    case "🍉" -> bet *= 3;
                    case "🍋" -> bet *= 5;
                    case "🔔" -> bet *= 10;
                    case "⭐️" -> bet *= 20;
                }
                System.out.println("Вы выиграли: $" + bet);
                userBalance += bet;
            }
            else if (randomRoll[1].equals(randomRoll[2])) {
                switch (randomRoll[1]) {
                    case "🍒" -> bet *= 2;
                    case "🍉" -> bet *= 3;
                    case "🍋" -> bet *= 4;
                    case "🔔" -> bet *= 5;
                    case "⭐️" -> bet *= 10;
                }
                System.out.println("Вы выиграли: $" + bet);
                userBalance += bet;
            }
            else {
                System.out.println("Вы проиграли!");
            }
            System.out.println("Ваш баланс: $" + userBalance);
        }
        System.out.println("Игра окончена... Ваш баланс на нуле");
    }
}
