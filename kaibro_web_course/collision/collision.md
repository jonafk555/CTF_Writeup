# collision

```
if($user == "admin") {
    if($pass != "QNKCDZO" && md5($pass) == md5("QNKCDZO")) {
        die($flag);
    }
}
```

**user=admin 且 pass 不等於 `QNKCDZO` 的情況下，md5 hash 要符合 `QNKCDZO` 的 md5 hash**
直接上網找 `QNKCDZO` 有什麼其他字串跟他的md5 hash collision就可以解題

payload：user=admin&pass=240610708
