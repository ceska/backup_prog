import java.util.Scanner;
public class Sticks {
  public static void main(String[] args) {
    Scanner ces = new Scanner(System.in);
    String[] nk = (ces.nextLine()).split("\\s+");
    long[] arr = stickParse(nk);
    System.out.println(stickWin(arr));
  }
  
  private static long[] stickParse(String[] x) {
    long[] a = new long[x.length];
    for (int i=0; i<x.length; i++) {
      a[i] = Long.parseLong(x[i]);
    }
    return a;
  }
 
  private static String stickWin(long[] y) {
    long a = y[0]; long b = y[1];
    if ((a/b)%2 == 1) {
      return "YES";
    } else {
      return "NO";
    }
  }
}