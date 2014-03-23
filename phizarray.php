<?php
function replace_weibo($content){
		//匹配网址的正则
		$pattern='/(?:http:\/\/|ftp:\/\/|https:\/\/)*([\w]+[\.]+[\w-]+[\w-.\/\?\%\&\=]*)/i';
		
		//捕获第一个原子的内容并通过\1显示出来
		$content=preg_replace($pattern,"<a href='http://\\1'>\\1</a>", $content);
		
		//给用户自动添加@
		$pattern='/(@)(\S+)\s/i';
		$content=preg_replace($pattern,"<a href='".__APP__."/User/\\2'>\\1\\2</a>", $content);
		
		//表情数据
		$mymode=array (
		  'smile' => '呵呵',
		  'tooth' => '嘻嘻',
		  'laugh' => '哈哈',
		 );

		//匹配表情信息
		$pattern='/\[([^\]]*)\]/i';
		if(preg_match_all($pattern, $content, $arr)){
			foreach ($arr[1] as $k => $v) {
				$key=array_search($v,$mymode);
				if($key){
					//替换字体为表情图片
					$content=str_replace($arr[0][$k],'<img title="'.$v.'" src="'.__ROOT__.'/Public/Images/phiz/'.$key.'.gif">',$content);
				}
			}
		}
			
		return $content;
	}
	function shiyan($content){
		$mymode=include './phiz.php';
		//匹配表情信息
		$pattern='/\[([^\]]*)\]/i';
		if(preg_match_all($pattern, $content, $arr)){
		echo '<pre>';
		var_dump($arr);
		echo '</pre>';
			foreach ($arr[1] as $k => $v) {
				$key=array_search($v,$mymode);
				if($key){
					//替换字体为表情图片
					$content=str_replace($arr[0][$k],'<img title="'.$v.'" src="'.__ROOT__.'/Public/Images/phiz/'.$key.'.gif">',$content);
				}
			}
		}
			
		return $content;
	}
	$con="[呵呵]sfs[呵呵][哈哈][哈哈][呵呵][吃惊][呵呵][呵呵][呵呵]";
	shiyan($con);
	
	