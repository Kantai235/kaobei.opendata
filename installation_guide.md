# 純靠北工程師.資料開放平台  參與者建置指南(草稿)

## 簡介
這是一項純靠北工程師的開源專案，我們採用 [Laravel 5.8 Boilerplate](https://github.com/rappasoft/laravel-5-boilerplate) 下去進行開發。

## 概略
這個平台本身架設在第三方服務上。資料庫及伺服器均使用雲端服務商提供之環境，
實際執行狀況及注意事項可能因為該服務商而變動。
開發測試期間以以下環境作為標準：

 * Apache (version ???)
 * MySql (X.xx.xx)
 * PHP (7.x.x)
 
    使用整合產品如XAMPP時請務必注意以上各項的版本。尤其當版本間有較大變化時。
## Laravel 
	本網站以Laravel框架建構

## 本平台之開發使用以下第三方工具
	* Composer
	* NodeJS(yarn 相依於此)
	* Yarn
	
## 安裝流程 - Windows10 
* 此處將簡單闡述使用XAMPP安裝包的操作流程。由於PHP及Apache間自動
程度較低，因此不建議自行建構，建議以XAMPP代勞。

       以下安裝程序將假設您已完成 PHP 網頁伺服器的架設。在此對XAMPP的安裝不多做敘述。

![INSTALL XAMPP]()
1. 下載並安裝 Composer(https://getcomposer.org)
2. 下載並安裝 NodeJS(https://nodejs.org/en/)
3. 下載並安裝 Yarn(https://yarnpkg.com/)
4. 開啟 cmd 指令： 專案目錄 > composer install
	* 如果發生問題，可以嘗試 composer install --no-scripts。
5. 開啟 cmd 指令： 專案目錄 > yarn
6. 安裝MySql
	* 6.1 一路按確認直到設定頁
	* 6.2 注意MySql在使用者認證上這幾個版本有些問題(安裝經驗)，建議使用Legacy，畢竟是測試用，安全性問題無須在意。
	* 6.3 記錄此處設定的port、使用者名稱與密碼等相關資料，後面的設定會用到
	
	![MYSQL SERVER PORT AND CREDENTIAL SETUP](https://i665.photobucket.com/albums/vv12/Ysuallkarl/GIthub/my_sql_setup_zpsnoxgnxat.png)
	* 6.4 找到MySQL CommandeLineClient，登入
	* 6.5 建立一個空資料庫，請務必記下這個資料庫的名字，若您不熟悉SQL指令，可以直接複製下面的SQL指令。

    CREATE DATABASE KBD_Test;
7. 準備資料庫
	* 7.1 進入專案資料夾，找到 .env.example 檔案 以任何編輯器開啟。
	* 7.2 將檔案另存為 .env
	* 7.3 修改 DB 的部分為剛才的資料庫，實際設定請參考下圖。
	
	![ENV SETUP EXAMPLE](https://i665.photobucket.com/albums/vv12/Ysuallkarl/GIthub/env_setup_example_zpsrl9qpiak.png)
	* 7.4 存檔
	

8. 資料庫轉移及設定
	* 8.1 開啟 cmd，cd道專案目錄，依序下達以下指令：

         php artisan key:generate
	
	     php artisan migrate

	     php artisan db:seed

		 npm run watch


9. 啟動伺服器 
10. 打開瀏覽器，輸入localhost，檢查網站是否運作正常
	