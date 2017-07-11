package in.woir.http;
public class WOIR {
 private String batch;
 private String training_name ;
 public String getBatch(){
 return batch;
 }
 public String getTraining(){
 return training_name;
 }
 public void setTraining( String name){
 training_name = name ;
 }
 public void setBatch( String name){
 batch = name ;
 }
}
