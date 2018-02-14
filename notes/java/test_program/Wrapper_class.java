class Wrapper_class{
   public static void main(String args[]){
      int i = 84;
      Integer oi = new Integer(i);

      System.out.println(oi.intValue());

      /*オートボクシングを利用*/
      Long ol = 153L;

      System.out.println(ol.longValue());

    /*値の取得*/
      double d = 7.6;
      Double od = new Double(d);
      System.out.println(od.doubleValue());
      System.out.println(od);

    /*文字列へ変換*/
      String str1 = oi.toString();
      String str2 = String.valueOf(i);
      String str3 = "" + i;

      System.out.println(str1);
      System.out.println(str2);
      System.out.println(str3);

      /*文字列から数値へ変換*/
      String str4 = "1254";
      String str5 = "75";
      String str6 = "4.789";

      i = Integer.parseInt(str4);
      Byte ob = new Byte(str5);
      od = Double.valueOf(str6);

      System.out.println(i);
      System.out.println(ob.byteValue());
      System.out.println(od.doubleValue());

   }
  

}