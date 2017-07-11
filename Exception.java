package in.woir.http;
public class Exception {

 public static void main(String[] args) {
int i=0;
int j=10;
int result;
 System.out.println("Hello, World");
 try{
result = j/i;
System.out.println("Hello, World");
}
catch(Exception e){
System.out.println("Hello, World" + e.getMessage());
 }
}
}


