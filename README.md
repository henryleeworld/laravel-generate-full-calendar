# Laravel 9 產生 FullCalendar 行事曆

引入 dhonions 的 laravel-calendar 套件來擴增設計一套滿版、且可拖曳事件的行事曆，可用來紀錄節日、日程或會議的安排、追蹤待辦事項並予以提醒通知。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/full-calendar` 來進行行事曆瀏覽。

----

## 畫面截圖
![](https://i.imgur.com/aDADWlv.png)
> 在右上角選擇：[今天]、[月]、[週]、[天]變更日曆檢視模式

![](https://i.imgur.com/VbzMIAP.png)
> 行事曆不只是日曆，而可以作為生活與工作上的管理工具來使用