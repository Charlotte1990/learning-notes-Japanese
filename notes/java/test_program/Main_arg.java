class Main_arg{
  
  public static void main(String args[]){
    if (args.length != 2){
      System.out.println("引数を2つ指定して下さい");
      System.out.println("Main_arg 値1 値2");
      System.exit(1);
    }

     System.out.println(args[0]);
     System.out.println(args[1]);
  }
}