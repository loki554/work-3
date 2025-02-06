import java.util.Random;
import java.util.Scanner;

public class Main {
    public static void main(String[] args){

        //NUMBER GUESSING GAME

        Random random = new Random();
        Scanner scanner = new Scanner(System.in);

        //variables
        int min = 0;
        int max = 0;
        int difficulty;
        int attempts = 0;
        int attemptsUsed = 0;
        int guess;
        int randomNumber;
        String playAgainOrExitGame = "yes";

        //while loop cycle for game restart (if user wants to)
        while (playAgainOrExitGame.equals("yes")) {
            System.out.println("\nWELCOME TO NUMBER GUESSING GAME");
            System.out.println("\nEnter a range of numbers");

            playAgainOrExitGame = "yes";

            //init number range from user
            while (min <= 0) {
                System.out.print("Number 1: ");
                min = scanner.nextInt();
                if (min <= 0) {
                    System.out.println("The number must be positive! Try again");
                }
            }
            while (min > max) {
                System.out.print("Number 2: ");
                max = scanner.nextInt();
                if (min > max) {
                    System.out.println("Second number must be greater than the first! Try again");
                }
            }

            //generating random number
            randomNumber = random.nextInt(min, max + 1);
            //clearing scanner buffer
            scanner.nextLine();

            //difficulty select
            do {
                System.out.println("\nSelect a difficulty mode");
                System.out.println("1: EASY (15 attempts) 2: MEDIUM (10 attempts) 3: HARD (5 attempts)");
                System.out.print("Difficulty: ");
                difficulty = scanner.nextInt();
                if (difficulty != 1 && difficulty != 2 && difficulty != 3) {
                    System.out.printf("%s is not a valid difficulty! ", difficulty);
                }
            } while (difficulty != 1 && difficulty != 2 && difficulty != 3);

            switch (difficulty) {
                case 1 -> attempts = 15;
                case 2 -> attempts = 10;
                case 3 -> attempts = 5;
            }

            //game start
            System.out.println("\nGame started!");
            System.out.printf("Guess a number between %d and %d\n",min, max);

            //game is progressing as long as user have enough attempts
            //number of attempts depends on difficulty
            do {
                System.out.printf("\n%d attempts remaining. Enter your guess: ", attempts);
                guess = scanner.nextInt();
                attempts--;
                attemptsUsed++;

                //hints for user
                if (guess < randomNumber) {
                    System.out.println("TOO LOW! Try a bigger number");
                }
                else if (guess > randomNumber) {
                    System.out.println("TOO HIGH! Try a smaller number");
                }
            } while (guess != randomNumber && attempts > 0);

            //end of the game
            if (attempts == 0) {
                System.out.printf("\nYOU LOSE! The number was %d. ", randomNumber);
                System.out.println("Play again? (Yes/No)");
            }
            else {
                System.out.printf("\nCORRECT! The number was %d", randomNumber);
                System.out.printf("\n# of attempts: %d", attemptsUsed);
                System.out.println("\nPlay again? (Yes/No)");
            }

            //clearing scanner buffer
            scanner.nextLine();
            //init game restart or exit
            playAgainOrExitGame = scanner.nextLine().toLowerCase();

            //game restart or exit
            while (!playAgainOrExitGame.equals("yes") && !playAgainOrExitGame.equals("no")) {
                System.out.println("Incorrect input! Try again");
                System.out.println("Play again? (Yes/No)");
                playAgainOrExitGame = scanner.nextLine().toLowerCase();
            }
            if (playAgainOrExitGame.equals("no")) {
                System.out.println("\nThanks for playing!");
            }
            //clearing min & max variables for game restart
            min = 0;
            max = 0;
            attempts = 0;
        }
        scanner.close();
    }
}
