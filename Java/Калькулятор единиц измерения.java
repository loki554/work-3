import java.util.Scanner;

public class Main {
    public static void main(String[] args){

        //КАЛЬКУЛЯТОР ЕДИНИЦ ИЗМЕРЕНИЯ (ТЕМПЕРАТУРА И ВЕС)

        Scanner scanner = new Scanner(System.in);

        //переменные для хранения выбора пользователя
        int baseChoice;
        int choiceTemperature;
        int choiceWeight;

        //переменные для хранения данных, вводимых пользователем
        double originalTemperature;
        double newTemperature;
        double originalWeight;
        double newWeight;

        //запрос данных от пользователя
        System.out.println("Калькулятор единиц измерения");
        System.out.println("1: Температура (°C, ℉)");
        System.out.println("2: Вес (kg, lb)");
        System.out.print("Выберите нужный вариант (1/2): ");

        //проверка выбранного варианта
        baseChoice = scanner.nextInt();
        if (baseChoice == 1) {
            //ВАРИАНТ 1. ТЕМПЕРАТУРА
            System.out.println("Конвертация температуры");
            System.out.println("1: Цельсии в Фаренгейты (°C → ℉)");
            System.out.println("2: Фаренгейты в Цельсии (℉ → °C)");
            System.out.print("Выберите нужный вариант (1/2): ");

            //проверка выбранного варианта
            choiceTemperature = scanner.nextInt();
            if (choiceTemperature == 1) {
                //ВАРИАНТ 1. ЦЕЛЬСИИ В ФАРЕНГЕЙТЫ
                System.out.println("°C → ℉");
                System.out.print("Введите градусы в Цельсиях: ");
                originalTemperature = scanner.nextDouble();
                newTemperature = originalTemperature * 1.8 + 32;
                System.out.printf("%.1f°C равняется %.1f℉", originalTemperature, newTemperature);
            }
            else if (choiceTemperature == 2) {
                //ВАРИАНТ 2. ФАРЕНГЕЙТЫ В ЦЕЛЬСИИ
                System.out.println("℉ → °C");
                System.out.print("Введите градусы в Фаренгейтах: ");
                originalTemperature = scanner.nextDouble();
                newTemperature = (originalTemperature - 32) / 1.8;
                System.out.printf("%.1f°℉ равняется %.1f°C", originalTemperature, newTemperature);
            }
            else {
                //ВАРИАНТ 3. НЕВЕРНЫЙ ВВОД
                System.out.println("Введён несуществующий вариант");
                System.exit(0);
            }
        }
        else if (baseChoice == 2) {
            //ВАРИАНТ 2. ВЕС
            System.out.println("Конвертация веса");
            System.out.println("1: Килограммы в фунты (kg → lb)");
            System.out.println("2: Фунты в килограммы (lb → kg)");
            System.out.print("Выберите нужный вариант (1/2): ");

            choiceWeight = scanner.nextInt();
            if (choiceWeight == 1) {
                //ВАРИАНТ 1. КИЛОГРАММЫ В ФУНТЫ
                System.out.println("kg → lb");
                System.out.print("Введите количество килограмм: ");
                originalWeight = scanner.nextDouble();
                newWeight = originalWeight * 2.2046;
                System.out.printf("%.1fkg равняется %.1flb", originalWeight, newWeight);
            }
            else if (choiceWeight == 2) {
                //ВАРИАНТ 1. ФУНТЫ В КИЛОГРАММЫ
                System.out.println("lb → kg");
                System.out.print("Введите количество фунтов: ");
                originalWeight = scanner.nextDouble();
                newWeight = originalWeight / 2.2046;
                System.out.printf("%.1flb равняется %.1fkg", originalWeight, newWeight);
            }
            else {
                //ВАРИАНТ 3. НЕВЕРНЫЙ ВВОД
                System.out.println("Введён несуществующий вариант");
                System.exit(0);
            }
        }
        else {
            //ВАРИАНТ 3. НЕВЕРНЫЙ ВВОД
            System.out.println("Введён несуществующий вариант");
            System.exit(0);
        }

        scanner.close();
    }
}
