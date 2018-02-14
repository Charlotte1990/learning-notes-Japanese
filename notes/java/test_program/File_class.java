import java.io.File;
import java.io.IOException;

class File_class{
   public static void main (String args[]){
        //list of file name
        File cddirectory1 = new File ("./test");
        String filelist1[] = cddirectory1.list();

        for (int i = 0 ; i < filelist1.length ; i++){
            System.out.println(filelist1[i]);
        }
       

       //list of file path
        File cddirectory2 = new File("file_test");
        File filelist2[] = cddirectory2.listFiles();

        //get path
        String path = cddirectory2.getAbsolutePath();
        System.out.println("File: " + path);
        System.out.println("\n");

         for (int j= 0; j< filelist2.length ; j++){
             if(filelist2[j].isFile()){
                 System.out.println("[F]" + filelist2[j]);            
             }else if (filelist2[j].isDirectory()){
                 System.out.println("[D]" + filelist2[j].getName());
             }else{
                 System.out.println("[?]" + filelist2[j].getName());
             }

         }

        //new file
         File newFile = new File("./new.txt");
          try{
              if(newFile.createNewFile()){
               System.out.println("ファイルの生成に成功しました");
              }else{
               System.out.println("ファイルの生成に失敗しました");
              }

          }catch(IOException e){
              System.out.println(e);

          }

         //new directory
         File newDirectory = new File("./newDirectory");
          
              if(newDirectory.mkdir()){
                  System.out.println("ディレクトリの生成に成功しました");
              }else {
                 System.out.println("ディレクトリの生成に失敗しました"); 
              }

        //new directorys
         File newDirectorys = new File("./d1/d2/d3/newDe");
          
              if(newDirectorys.mkdirs()){
                  System.out.println("複数ディレクトリの生成に成功しました");
              }else {
                 System.out.println("複数ディレクトリの生成に失敗しました"); 
              }

         //file delete
          File deleteDirectory = new File("./TXT");
            if(deleteDirectory.exists()){
               if(deleteDirectory.delete()){
                   System.out.println("ディレクトリの削除に成功しました");
               }else {
                 System.out.println("ディレクトリの削除に失敗しました"); 
               }
            }else{
                  System.out.println("ファイルが見つかりません"); 
            }
               
        //read and write permission
          File file = new File("./test/read_write.txt");

            checkPermission(file);

           if (file.setReadOnly()){
               System.out.println("ファイルを読み取り専用にしました");
           }else{
              System.out.println("読み取り専用に変更が失敗しました");
          }

            checkPermission(file);
  }
   private static void checkPermission(File file){
              if (file.canRead()){
                  System.out.println("ファイルは読み込み可能です");
               }

              if (file.canWrite()){
                 System.out.println("ファイルは書き込み可能です");
              }
   }
}