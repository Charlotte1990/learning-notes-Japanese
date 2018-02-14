import java.util.ArrayList;

class Array_list{
  public static void main(String args[]){
    ArrayList<String> array = new ArrayList<String>();

    array.add("日本");
    array.add("ブラジル");
    array.add("イングランド");
    array.add("ポルトガル");
    array.add("日本");

    System.out.println("登録データ数:" + array.size());

    System.out.println("\r\n3番目の国を韓国へ置き換えます\r\n");

    array.set(2, "韓国");

    for (int i = 0 ; i < array.size() ; i++){
      String country = array.get(i);
      System.out.println(country);
    }

    String word = "ポルトガル";
    int first = array.indexOf(word);

    System.out.println(word + "について検索します");

    if (first != -1){
      System.out.println("最初のインデックス番号は " + first);
    }

    int last = array.lastIndexOf("日本");
    if (last != -1){
      System.out.println("最後のインデックス番号は " + last);
    }

    System.out.println("2番目の項目を削除します");

    array.remove(1);

    for (int i = 0 ; i < array.size() ; i++){
      String country = array.get(i);
      System.out.println(country);
    }

    System.out.println("「ポルトガル」の項目を削除します");

    array.remove(array.indexOf("ポルトガル"));

    for (int i = 0 ; i < array.size() ; i++){
      String country = array.get(i);
      System.out.println(country);
    }

    System.out.println("全ての項目を削除します");

    array.clear();

    System.out.println("現在の項目数は " + array.size() + " です");

    
  }
}