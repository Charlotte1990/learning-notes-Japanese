class Calculator {
    public static void main(String args[]){
      int val1 = 0;  /*最初の数値*/
      int val2 = 0; /*次の数値*/
      String ope;    /*演算子*/
      int result;     /*結果を格納*/

      if(args.length != 3){
        errDisp("引数は3個入力してください");
      }
  try{
      val1 = Integer.parseInt(args[0]);
      val2 = Integer.parseInt(args[2]);
  }
  catch(NumberFormatException e){
      errDisp("数値でない値が入力されています");
  }

      ope = args[1];

      boolean errFlag = true;
      String opeStr[] = {"waru", "tasu", "hiku", "kake"};

       for (int i=0 ; i<=3 ; i++){
        if(ope.equals(opeStr[i])){
            errFlag = false;
        }
       }

      if (errFlag == true){
        System.out.println("演算子は kake waru tasu hiku の四つです");
        System.exit(0);
      }

       if(ope.equals("kake")){
         result= val1 * val2;
       }else if(ope.equals("tasu")){
         result = val1 + val2; 
       }else if(ope.equals("hiku")){
         result = val1 - val2; 
       }else{
           if(val2 == 0){
             errDisp("0 で割ろうとしました");
           }
         result = val1/val2;
       }
       
      System.out.println("入力された式は " + val1 + " " + ope + " " + val2 + " です");
      System.out.println("計算結果は " + result + " です");
    }

    private static void errDisp(String errStr){
       System.out.println("Usage : java dentaku 数値 演算子 数値");
       System.out.println(errStr);
       System.exit(0);  /* プログラムを終了する */
    }

}