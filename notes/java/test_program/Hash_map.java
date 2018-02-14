import java.util.HashMap;

class Hash_map{
   public static void main(String args[]){
     HashMap<String, String> map = new HashMap<String, String>();

     map.put("りんご", "Apple");
     map.put("ぶどう", "Grapes");

     if(map.containsKey("りんご")){
       System.out.println("りんごを英語にすると");
       System.out.println(map.get("りんご"));
     }else{
      System.out.println("指定したキーは存在しません");
     }

    map.remove("ぶどう");
      if(map.containsKey("ぶどう")){
       System.out.println("りんごを英語にすると");
       System.out.println(map.get("ぶどう"));
     }else{
      System.out.println("指定したキーは存在しません");
    }

   }
}
