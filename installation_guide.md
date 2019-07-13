# 純靠北工程師.資料開放平台  參與者建置指南

## 簡介
這是一項純靠北工程師的開源專案，我們採用 [Laravel 5.8 Boilerplate](https://github.com/rappasoft/laravel-5-boilerplate) 下去進行開發。

## 概略
這個平台本身架設在第三方服務上。資料庫及伺服器均使用雲端服務商提供之環境，
實際執行狀況及注意事項可能因為該服務商而變動。
開發測試期間以以下環境作為標準：

 * Apache (version ???)
 * MySql (X.xx.xx)
 * PHP (7.x.x)
##
    使用整合產品如XAMPP時請務必注意以上各項的版本。尤其當版本間有較大變化時。
## Laravel 
	本網站以Laravel框架建構

## 本平台之開發使用以下第三方工具
	* Composer
	* NodePackageManager
	* Yarn
	
## 安裝流程 - Windows10 
* 此處將簡單闡述使用XAMPP安裝包的操作流程。由於PHP及Apache間自動
程度較低，因此不建議自行建構，建議以XAMPP代勞。
1. 安裝 Composer
2. 安裝 NodePackageManager(若不想加入NPM會員，可前往NodeJS網站下)
3. 安裝 Yarn
4. 開啟 cmd 指令： 專案目錄 > composer install --no-scripts
5. 開啟 cmd 指令： yarn
6. 安裝MySql/SqlYoug(建議，但可用同類型軟體代替，能完成管理任務即)
	* 6.1 一路按確認直到設定頁
	* 6.2 注意MySql在使用者認證上這幾個版本有些問題(安裝經驗)，建議使用Legacy，畢竟是測試用，安全性問題無須在意。
	* 6.3 記錄此處設定的port、使用者名稱與密碼等相關資料，後面的設定會用到，
	* 6.4 開啟SQLyoug並且連上剛才安裝的資料庫
	* 6.5 建立一個空資料庫，請務必記下這個資料庫的名字
7. 準備資料庫
	* 7.1 進入專案資料夾，找到 .env.example 檔案 以任何編輯器開啟。
	* 7.2 將檔案另存為 .env
	* 7.3 修改 DB 的部分為剛才的資料庫
	* 7.4 存檔
8. 資料庫轉移及設定
	* 8.1 php artisan key:generate
	* 8.2 php artisan migrate
	* 8.3 php artisan <驗證>
	* 8.3 開啟SQLYoug，檢查是否正確轉移
9. 前往XAMPP 安裝目錄，找到 xamppcontrol.exe，連點打開，選擇Apache，按下start

10. 打開瀏覽器，輸入localhost，檢查網站是否運作正常
	