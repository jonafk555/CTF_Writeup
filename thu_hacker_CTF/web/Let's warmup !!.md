# Let's warmup !!

1. 原始頁面，沒什麼東西，翻一下F12，有一個 `source.php` 放在HTML 註解裡
![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/d583133d-b0ce-4b59-a0e3-d2fb4e5a73fa)

2. 瀏覽 source.php，發現有source code，是 php，且發現有一個hint.php
![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/534ec908-ae32-4a3d-b89c-d0df35af91fe)

3. 瀏覽 hint.php，告訴我們 flag 在 `ffffllllaaaagggg`
![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/11a23f15-5896-41a7-8913-dce1a6ba865a)
先記著，返回看code

4. 最後一段告訴我們要 request 一個 `file` 參數，並且符合以下三個條件：
- $_REQUEST['file'] 不為空
- $_REQUEST['file'] 的值是一個字串
- $_REQUEST['file'] 的值作為參數傳遞給 `checkFile`做檢查，要為 `true`
![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/610760ed-c03c-4eb4-a013-55c101c75c2f)

6. 
