import java.io.File;
import java.io.FileWriter;
import java.io.BufferedWriter;
import java.io.IOException;

class File_Write{
  public static void main(String args[]){
    try{
        File file = new File("./file_test/test.txt");

      if (checkBeforeWritefile(file)){
    
        BufferedWriter bw = new BufferedWriter(new FileWriter(file));

        bw.write("お疲れ様です");
        bw.newLine();
        bw.write("Great");
        bw.newLine();

        bw.close();
      }else{
        System.out.println("ファイルに書き込めません");
      }
    }catch(IOException e){
      System.out.println(e);
    }
  }

  private static boolean checkBeforeWritefile(File file){
    if (file.exists()){
      if (file.isFile() && file.canWrite()){
        return true;
      }
    }

    return false;
  }
}