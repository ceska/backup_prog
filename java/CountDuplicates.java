package countduplicates;
public class CountDuplicates {

    //static String text2="";
    
    public static void main(String[] args) {
        String tryout1 = "abcde"; String tryout2 = "aabbcde";
        String tryout3 = "indivisibility"; String tryout4 = "aA11";
        String tryout5 = "ABBA";
        System.out.println(tryout1 +" = " +count(tryout1)); //ans:0
        System.out.println(tryout2 +" = " +count(tryout2)); //ans: 2
        System.out.println(tryout3 +" = " +count(tryout3)); //ans: 1
        System.out.println(tryout4 +" = " +count(tryout4)); //ans: 2
        System.out.println(tryout5 +" = " +count(tryout5)); //ans: 2
    }
    
    public static int count(String text) {
        int counter=0; //count duplicates
	String text2 = text.toLowerCase();
	String temp = "";
	for (int a=0; a<text2.length(); a=0) {
                temp = Character.toString(text2.charAt(a));
		//System.out.println("initial: "+ text2.length() +", "+ temp);
		if (foundMatch(text2, temp)) {
			counter++;
		}
		text2 = text2.replaceAll(temp, "");
                //System.out.println("final:"+ counter +", "+ text2);
                //System.out.println("");
	}
        return counter;
    }

    public static boolean foundMatch(String text, String index) {
	String temp=""; boolean counter=false;
	for (int a=1; a<text.length(); a++) {
		temp = Character.toString(text.charAt(a));
                //System.out.println(index +" > "+ temp);
		if (index.equals(temp)) {
                    counter=true;
                    //System.out.println("- yay match -");
                    break;
		} else { counter=false; }
	}
	return counter;
    }
}
