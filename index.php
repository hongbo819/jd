<?php
	
	//header("content-type:text/heml;charset='utf-8'");
	function bin_sch($array,$low,$high,$k){
		if($low<=$high){
			$mid=intval(($low+$high)/2);
		}
		if($array[$mid]==$k){
			return $mid;
		}else if($k<$array[$mid]){
			return bin_sch($array,$low,$mid-1,$k);
		}else{
			return bin_sch($array,$mid+1,$high,$k);
		}
		return -1;
	}
	$arr=array(2,5,7,9,14,37,78);
	echo bin_sch($arr,0,count($arr)-1,78);
	echo 'aaaaaaaaa';
	/*function erfen(&$arr,$findval,$leftindex,$rightindex){
		if($rightindex<$leftindex){
			echo '找不到这个数';return;
		}
		$middleindex=round(($leftindex+$rightindex)/2);
		//return $middleindex;
		if($arr[$middleindex]==$findval){
			return $middleindex;
		}
		if($arr[$middleindex]>$findval){
			
			erfen($arr,$findval,$leftindex,$middleindex-1);
		}else if($arr[$middleindex]<$findval){
			erfen($arr,$findval,$middleindex+1,$rightindex);
		}else{
			echo '找不到这个数';return;
		}
		return -1;
	}
	$arr=array(1,2,3,4,5,7,9,76,688);
	
	
	var_dump($arr);
	
	//echo count($arr);
	echo erfen($arr,9,0,count($arr)-1);*/
  //猴子问题
	/*function king($m,$n){
		for($i=1;$i<$m+1;$i++){
			$arr[]=$i;
		}
		$i=0;
		while(count($arr)>1){
			if(($i+1)%$n==0){
				unset($arr[$i]);
			}else{
				array_push($arr,$arr[$i]);
				unset($arr[$i]);
			}
			$i++;
		}
		return $arr;
	}
	var_dump(king(6,2));*/
//substr(strrchr($file, '.'), 1);
	/*
	//提交过来的用户名需要插入哪个表，通过唯一的uuid进行确定
	$str=explode(' ',microtime());
	//这个uuid是通过当前的时间戳、当前微秒，加上一个随机数实现的。所以不会出现相同
	$uuid=$str[1].ltrim($str[0],'0.').rand(1000,9999).rand(2000,9999);
	//对uuid进行md5处理，这个需要插入数据库中作为用户的唯一标识，因为有时候使用自增id是不可靠的
	$str=md5($uuid);
	
	$baseNum=substr($str,-2);//取出hash值的最后两位生成一个16进制的数
	
	$hz=base_convert($baseNum,16,10)%31;//将十六进制转换为10进制后进行取余，形成表的后缀
	echo "table_".$hz;
	*/
	
	
	/*for($y=0;$y<=20;$y++){
		for($x=0;$x<=(100/3);$x++){
			for($z=0;$z<=100;$z++){
				if($x+$y+$z==100 && (($x*3)+($y*5)+($z/3))==100){
					echo $x.":".$y.":".$z."<br/>";
				}
			}
		}
	}*/
	
	
	//冒泡排序法
	/*$arr=array(2,3,6,9,4,5,8,5);

	$total=count($arr);
	for($i=0;$i<$total-1;$i++){
		for($j=0;$j<$total-1-$i;$j++){
			If($arr[$j]>$arr[$j+1]){
				$tmp=$arr[$j];
				$arr[$j]=$arr[$j+1];
				$arr[$j+1]=$tmp;
			}
		}
	}
	echo '<pre>';
	var_dump($arr);
	echo '</pre>';*/
	//echo 'bb';return;
	
	
	//快速排序发
	/*$a=array(6,5,3,2,9,4,8,5);
	
	function quick_sort($arr){
		if(count($arr)<=1){
			return $arr;
		}
		$left=array();
		$right=array();
		
		
		for($i=1;$i<count($arr);$i++){
			if($arr[$i]<$arr[0]){
				$left[]=$arr[$i];
			}else{
				$right[]=$arr[$i];
			}
		}
		$left=quick_sort($left);
		$right=quick_sort($right);
		return array_merge($left,array($arr[0]),$right);
		
	}
	echo '<pre>';
	var_dump(quick_sort($a));
	echo '</pre>';*/
	