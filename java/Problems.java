import java.util.Scanner;
/**
 * Solutions for the codeforces problems: #859C, #869B, #879B
 * @author Princess Lyka Dacapias
 */

public class Problems {
    Scanner scan = new Scanner(System.in);

    // 859C - pie rules
    public void pie() {
        int pieNo = scan.nextInt();
        int extra = pieNo + 1;
        int pieces[] = new int[extra];
        for (int a = pieNo; a >= 1; a--) {
            pieces[a] = scan.nextInt();
        }
        int[] total = new int[extra];
        for (int b = 1; b <= pieNo; b++) {
            total[b] = total[b-1] + pieces[b];
        }
        int[] sizes = new int[extra];
        for (int c = 1; c <= pieNo; c++) {
            int temp = total[c] - sizes[c-1];
            if (sizes[c-1] > temp) {
                sizes[c] = sizes[c-1];
            }
            else { sizes[c] = temp; }
        }
        int alice = total[pieNo] - sizes[pieNo];
        int bob = sizes[pieNo];
        System.out.println(alice +" "+ bob);
    }

    // 869B - the eternal immortality
    public void pheonix() { 
        long spaceA = scan.nextLong();
        long spaceB = scan.nextLong();
        long lastDigit = (long) 1;
        if ((spaceB-spaceA) >= 10) {
            System.out.println(0);
        } else {
            for (long i = a+1; i<=b; i++) {
                lastDigit = ((long)1 * lastDigit * (i%10)) % 10;
              }
        System.out.println(lastDigit);
        }
    }

    // 879B - table tennis
    public void tennis() {
        int noPeople = scan.nextInt();
        long noWins = scan.nextLong();
        int power1 = scan.nextInt();
        long temp = 0;
        for (int i = 1; i < noPeople; i++) {
            int power2 = scan.nextInt();
            if (power2 > power1) {
                temp = 1;
                power1 = power2;
            } else {
                temp++;
            }
            if (noWins <= temp) { //power of winner
                break;
            }
        }
        System.out.println(power1);
    }
}