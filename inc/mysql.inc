<?php
class mysql{
    //连接服务器、数据库以及执行SQL语句的类库
    public $database;
    public $server_username;
    public $server_userpassword;
    public $link;
    //public $conn;
    function mysql()
  	{  //构造函数初始化所要连接的数据库
       $this->server_username="xiaom";
       $this->server_userpassword="xiaom";
       $this->database="voice";
       $this->link=mysqli_connect('localhost',$this->server_username,$this->server_userpassword,$this->database);
       
       }//end mysql()
  function link($database)
  	{  //连接服务器和数据库
       //设置所有连接的数据库
        if ($database==""){
            
            }else{
            $this->database=$database;
            }
        //连接服务器和数据库
     	if(@$id=mysql_connect('localhost',$this->server_username,$this->server_userpassword)){
		     //echo "数据库连接错误111！！！";
          if(!mysql_select_db($this->database,$id)){
		       echo "数据库连接错误222！！！";
               exit;
               }
 	       }else{
               echo "服务器正在维护中，请稍后重试！！！";
               exit;
      	   }
	}//end link($database)
	function excu($query)
    {     //执行SQL语句
    	$conn=new mysqli('localhost',$this->server_username,$this->server_userpassword,$this->database);
    		if($result=$conn->query($query)){
    			$conn->close();
				return $result;
        	}else{
             	echo "sql语句执行错误！！！请重试!!!";
       		    exit;
        	}
    } //end  exec($query)
} //end class mysql

	function my_query($sql){
		$conn=new mysqli('localhost',$this->server_username,$this->server_userpassword,$this->database);
		$res_arr=new ArrayObject();
		$result=$mysqli->query($query);
		if ($result) {
			if($result->num_rows>0){                                               //判断结果集中行的数目是否大于0
				$i=0;
				while($row =$result->fetch_array() ){                        //循环输出结果集中的记录
				 	$res_arr->append($row);
				 	//$i++;
				}
			}
		}else {
			echo "查询失败";
		}
		$result->free();
		$conn->close();
		return $res_arr;
	}
?>
