import java.util.LinkedList;

class Linked_list{
  public static void main(String args[]){
    LinkedList<String> array = new LinkedList<String>();

    array.offer("色が違う");
    array.offer("サイズが合わない");
    array.offer("壊れていた");

    for (int i = 0 ; i < array.size() ; i++){
      String item = array.get(i);
      System.out.println(i + item);
    }
    System.out.println("\n");

    System.out.println("削除：" + array.poll());
    System.out.println("削除：" + array.poll() + "\n");

    for (int i = 0 ; i < array.size() ; i++){
      String item = array.get(i);
      System.out.println(item);
    }
    System.out.println("\n");

    array.offer("商品が違う");

    for (int i = 0 ; i < array.size() ; i++){
      String item = array.get(i);
      System.out.println(item);
    }
    System.out.println("\n");

    System.out.println("削除：" + array.poll());
    System.out.println("削除：" + array.poll());

  

  }
}