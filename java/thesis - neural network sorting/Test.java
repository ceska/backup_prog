import java.io.*; 
import java.nio.file.Files; 
import java.nio.file.*; 
import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

class Column {
   private String fileName;
   private String desc;

   public Column(String fileName, String desc) {
	this.fileName = fileName;
	this.desc = desc;
   }

   public String getName() {
	return this.fileName;
   }

   public String getDesc() {
	return this.desc;
   }
}

public class Test { 
    public static void main(String[] args) throws IOException { 

        ArrayList<Column> list = new ArrayList<Column>();   
        File file = new File("list.txt");
        Scanner sc = new Scanner(file);

        while(sc.hasNextLine()){
            String[] input = sc.nextLine().split(",");
            String fileName = input[0];
            String desc = input[1];
            list.add(new Column(fileName, desc));
        }

        Path temp;
        String tfolder;
        for (Column x : list) {
            if (x.getDesc().contains("|")) {
                tfolder = "Mixed";
            } else {
                switch (x.getDesc()) {
                    case "Atelectasis":
                        tfolder = "Atelectasis"; break;
                    case "Cardiomegaly":
                        tfolder = "Cardiomegaly"; break;
                    case "Effusion":
                        tfolder = "Effusion"; break;
                    case "Infiltration":
                        tfolder = "Infiltration"; break;
                    case "Mass":
                        tfolder = "Mass"; break;
                    case "Nodule":
                        tfolder = "Nodule"; break;
                    case "Pneumonia":
                        tfolder = "Pneumonia"; break;
                    case "Pneumothorax":
                        tfolder = "Pneumothorax"; break;
                    case "Consolidation":
                        tfolder = "Consolidation"; break;
                    case "Edema":
                        tfolder = "Edema"; break;
                    case "Emphysema":
                        tfolder = "Emphysema"; break;
                    case "Fibrosis":
                        tfolder = "Fibrosis"; break;
                    case "Pleural_Thickening":
                        tfolder = "Pleural_Thickening"; break;
                    case "Hernia":
                        tfolder = "Hernia"; break;
                    default :
                        tfolder = "No Finding"; break;
                }
            }
            temp = Files.move(Paths.get("C:\\Users\\Ces\\Desktop\\dump\\a good dayle\\data\\images_002\\"+x.getName()), Paths.get("C:\\Users\\Ces\\Desktop\\dump\\a good dayle\\data\\images_002\\"+tfolder+"\\"+x.getName()));
        } 
    }
}  