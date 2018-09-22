<?php

	class token {
   
		public static function checkToken($tokenCsrf,$cookieCsrf){
			if($cookieCsrf == $tokenCsrf){
				return true;
			}
		}
	}
?>