package in.woir.http;
import java.io.File;
import java.io.FileReader;
public class Frex {

 public static void main(String[] args) throws Exception {
int i=0;
int j=10;
int result;
 System.out.println("Hello, World");
 try{
 File file = new File("home/my/file504.txt");
 FileReader fr = new FileReader(file);

result = j/i;
System.out.println("Hello, World");
}
catch(Exception e){
System.out.println("Hello, World" + e.getMessage());
 }
}
}


