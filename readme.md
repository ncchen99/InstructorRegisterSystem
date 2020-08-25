# 彰中教官室表單系統

## 佈署教學 🐻

### 安裝 git

- CentOS
  ```
  yum install git
  ```
- Ubuntu
  ```
  sudo apt-get install git
  ```

### 克隆下來

切換到 server 軟體的 root 目錄，譬如：

```
cd /var/www
```

接著來全部克隆下來的這裡 🐡

```
git clone https://github.com/ncchen99/InstructorRegisterSystem.git ./
```

### 新增 config.php 檔案

做檔案

```
touch config.php
```

用文字編輯器修改內容

```
vim config.php
```

貼上以下內容，並修改為自己的 mysql 資訊一下！

```php
 <?php
    $username = '帳號';
    $password = '密碼';
    $host = '127.0.0.1　之類的';
    $port = '3306　通常是安餒';　
    $hostport ='127.0.0.1:3306'
 ?>
```

### 建立資料酷

1. 登入 phpMyAdmin
2. 新增一個叫做`account`的資料庫
3. 接著匯入`account.sql`的檔案

### 開始使用

使用

```
user :     admin
password : admin
```

登入進入管理頁面即可新增、刪除、修改使用者資訊
或者直接進入資料酷修改 users 分頁簿內容也可。

#### 資料的架構

- 使用者ㄉ資訊是存在 account ㄉ users 分頁簿裡頭ㄉ
- 問卷的內容是存在 account ㄉ questions 分頁簿裡頭ㄉ
- 問卷的回應是存在 account ㄉ answers 分頁簿裡頭ㄉ
