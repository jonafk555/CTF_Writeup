# Supercalifragilisticexpialidocious
- 這題可以輸入一段 php 去做檢查
- 根據程式碼我們可以知道以下邏輯：
1. 在輸入框輸入的值會被傳入到`code`的`GET`參數裡。
2. `code`參數的值會被拼接到`create_function()`，並且回傳`valid`。
3. 解析錯誤的值則會回傳`syntax error`。
![image](https://github.com/user-attachments/assets/92d3a2b8-3df9-4803-bc7e-4caae2d41c83)

由上述邏輯可知，當攻擊者輸入一段任意php code則可以達成**php code injection**
拿這段來看：
```php=
create_function('', $code);
echo "valid";
```
解題步驟：
1. 如果我們輸入`;`可以先截斷`create_function()`；`}`則可以截斷`try{}`。
2. 截斷後可以以php function執行任意指令，我們想達成RCE則可以用像`stsyem()`、`eval()`、`shell_exec()` ... etc。
    - 我們使用`system()`來執行任意指令，可以先用，system('ls')來看這個目錄下有什麼檔案。

3. 最後結束為了符合syntax，我們要先以`;`結束`system()`，再以`/*`註解掉後面被我們截斷的程式碼。

- 到目前為止整個拼起來就是`;}system(%27ls%27);/*`
    - 可以讀到：![image](https://github.com/user-attachments/assets/93f51a23-e63a-4d2e-a739-302eac3334c6)

4. 我們繼續讀檔，可以找到根目錄有一個`flag.txt`，嘗試：`;}system(%27cat /flag.txt%27);/*`，但卻讀不到。
5. 再以`;}system(%27ls -al /flag.txt%27);/*`查看，必須要`root`權限才能讀。
    - ![image](https://github.com/user-attachments/assets/da6a1054-a402-4aab-b26b-6bce87316557)

6. 但發現根目錄底下也有一個編譯後的檔案：`/readflag`
7. 嘗試執行：`;}system(%27/readflag%27);/*`
    - ![image](https://github.com/user-attachments/assets/4226013e-15c0-433f-a87f-b99fc9ed5f86)

