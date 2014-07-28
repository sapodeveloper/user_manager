<?php

# 共通Applicationテンプレート
class Controller_Application extends Controller_Template
{

	# 共通before処理
	# テンプレートを使用するための処理を実行する	
	public function before()
	{
		parent::before();
	}

	# 共通after処理
	# Responseオブジェクトを返す
	public function after($response)
    {
        $response = parent::after($response);
        return $response;
    }

}
