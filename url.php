<?php 
if( isset($_POST['submit']) ){
$country=$_POST['country'];
$states=$_POST['states'];
$district=$_POST['district'];
$branch=$_POST['branch'];
}


$empty = '';
if ( $states != '' ) {
$stat ="'$$hashKey':'object:1353','$state':(store:appState),meta:(alias:!n,disabled:!f,index:jobs,key:State,negate:!f,value:'$states'),query:(match:(State:(query:'$states',type:phrase)))";
}
else
{
$stat = $empty;

}
if ( $district != '' ) {
$dist ="'$$hashKey':'object:1525','$state':(store:appState),meta:(alias:!n,disabled:!f,index:jobs,key:District,negate:!f,value:$district),query:(match:(District:(query:$district,type:phrase)))";

}else{
$dist = $empty;
}

if ( $branch != '' ) {
$brch ="'$state':(store:appState),meta:(alias:!n,disabled:!f,index:jobs,key:Branch,negate:!f,value:$branch),query:(match:(Branch:(query:$branch,type:phrase)))";
}else{
$brch = $empty;
}
$url="http://52.221.87.131:5601/app/kibana#/dashboard/84ce4240-370a-11e7-ba4e-f9bf046f7cd3?embed=true&_g=(refreshInterval:(display:Off,pause:!f,value:0),time:(from:now-17y,mode:quick,to:now))&_a=(filters:!(($stat),($dist),($brch)),options:(darkTheme:!f),panels:!((col:1,id:Total-Count,panelIndex:4,row:6,size_x:4,size_y:3,type:visualization),(col:1,id:Departmentwise_Detail,panelIndex:2,row:12,size_x:6,size_y:3,type:visualization),(col:7,id:Collegewise_detail,panelIndex:5,row:9,size_x:6,size_y:3,type:visualization),(col:7,id:'87ec8490-2f3b-11e7-8efa-4909738d4eea',panelIndex:7,row:3,size_x:6,size_y:3,type:visualization),(col:1,id:ed1e4790-2f3b-11e7-8efa-4909738d4eea,panelIndex:8,row:9,size_x:6,size_y:3,type:visualization),(col:5,id:fcbfc920-2f3c-11e7-8efa-4909738d4eea,panelIndex:9,row:6,size_x:4,size_y:3,type:visualization),(col:9,id:'3e3c01c0-2f3d-11e7-8efa-4909738d4eea',panelIndex:10,row:6,size_x:4,size_y:3,type:visualization),(col:7,id:Companywise_Detail,panelIndex:12,row:12,size_x:6,size_y:3,type:visualization),(col:1,id:ce2fd350-333a-11e7-8ce9-39016fff511d,panelIndex:13,row:3,size_x:6,size_y:3,type:visualization),(col:1,id:'51666370-461d-11e7-ac7b-bb094dd40415',panelIndex:14,row:1,size_x:12,size_y:2,type:visualization)),query:(query_string:(analyze_wildcard:!t,query:'*')),title:'Job%20Dashoboard',uiState:(P-2:(vis:(legendOpen:!t)),P-7:(vis:(legendOpen:!t))))";

/*$url = file_get_contents('http://192.168.0.19:5601/app/kibana#/dashboard/Job-Dashoboard?_g=(refreshInterval:(display:Off,pause:!f,value:0),time:(from:now-5y,mode:quick,to:now))&_a=(filters:!(('$$hashKey':'object:94','$state':(store:appState),meta:(alias:!n,disabled:!f,index:jobs,key:Branch,negate:!f,value:$branch),query:(match:(Branch:(query:$branch,type:phrase))))),options:(darkTheme:!f),panels:!((col:1,id:Total-Count,panelIndex:4,row:1,size_x:3,size_y:2,type:visualization),(col:4,id:Companywise_Detail,panelIndex:1,row:1,size_x:4,size_y:3,type:visualization),(col:8,id:Departmentwise_Detail,panelIndex:2,row:1,size_x:5,size_y:3,type:visualization),(col:2,id:Tablewise_detail,panelIndex:3,row:4,size_x:10,size_y:2,type:visualization),(col:1,id:Collegewise_detail,panelIndex:5,row:6,size_x:5,size_y:2,type:visualization),(col:6,id:Yearwise_detail,panelIndex:6,row:6,size_x:7,size_y:2,type:visualization)),query:(query_string:(analyze_wildcard:!t,query:'*')),title:'Job%20Dashoboard',uiState:(P-3:(vis:(params:(sort:(columnIndex:1,direction:asc))))))',true);*/


echo
"<iframe src=\"$url\" width=100% height=1500px></iframe>";

?>

