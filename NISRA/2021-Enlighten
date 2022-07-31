# NISRA Enlightened 2021 write-up

這次的隱寫術 a.k.a~~飲血術~~出的很佛
除了基本的知識以外
沒考什麼艱澀難懂的~~通靈~~法

由於這次的研習是給新手接觸資安的新朋友們的課程
我write up也會盡量寫詳細簡單一點

首先先從取得final CTF token的那題開始好了
雖然這題是練習的CTF題，不過截至final CTF開始前，答題率似乎很慘(15/98=15.3%)
~~欸不是到我要寫writeup的時候才21個人解是怎麼回事???~~

# Steganography
## (一)Token of Final
這題題目:
`本題也是彩蛋之一，大家想想看哪裡可能藏 flag 歐，此 flag 也是明天 final CTF 的註冊 token，大家試著找找看吧~`

解題思路:
可以去~~通靈~~感覺一下出題者的表達方式，如果靶機全部都翻過一遍，全部都沒有結果，那依照題目給的感覺就是用隱寫術藏在某個圖片裡。

#### 1.我們先上靶機看看
按(fn+)f12看看開發人員工具
![](https://i.imgur.com/AVlHXm6.png)

然後順勢翻一下images，裡面有很多圖片(理論上要一張一張找啦 不過我直接破梗就是第一張stars.png)
對旁邊小圖按右鍵儲存就可以了

#### 2.工具Stegsolve翻翻 
對工具裡選項一個一個慢慢翻
最後在Data Extract裡的
![](https://i.imgur.com/rUC0eOx.png)

翻到flag~~
```gherkin=
NISRA{w3lc0me_4o_ENL1GHT3N3D_final}
```
## (二)Header 0x1
解題思路:沒什麼好思考的，檔名已經提示你要用winhex看flag了
#### 1.用winhex看吧~~(我是用HxD，一樣的分析工具沒有差別)
![](https://i.imgur.com/M3bMBlx.png)

header的地方告訴我們，它實際上是個pdf檔
#### 2.好吧pdf就pdf囉~
![](https://i.imgur.com/KPBkIc8.png)

我們直接把副檔名改成pdf順它的意
然後打開這個檔
![](https://i.imgur.com/jJIl8iZ.png)
打開後是全白的，但反白可以發現有一個地方是有東西的
我們也不用再思考怎麼看到這串東西，直接複製貼上就有flag了
'''
NISRA{w1nh3X_1s_be5t_to0l}`

## (三)Header 0x2
解題思路:也是在檔名上了，它告訴我們它是png檔
#### 1.一樣用winhex開吧!
既然他要png就png啊 誰怕誰
直接把它pdf的magic number`25 50 44 46`
改成png的`89 50 4E 47 0D 0A 1A 0A`

#### 2.出來再把副檔名.pdf改成.png就有flag了

## (四)Bin x walk
解題思路:在題目上了，就是用binwalk
#### 1. binwalk
下指令
`binwalk -e Lab_Binwalk.jpg`
之後看匯出的那個檔案裡面就有flag了

## (五)Mysterious Words
解題思路:這題偏通靈而且沒有教到怎麼看flagQQ
#### 1.打開檔案
出現的就是NISRA Enlightened的招生文案而已沒什麼
但是實際上有些東西藏在裡面

#### 2.看"隱藏文字"
`左上角的檔案>左邊最下的選項>顯示>隱藏文字`
打開隱藏文字的選項就有flag囉

## (六)QR code Master
解題思路:QR CODE的基本知識
#### 1.打開圖檔
打開後是個被切割過的QR CODE
我是直接暴力解
放到`小畫家`做裁剪成四個分割後的QRCODE
#### 2. 線上工具真香
我用的是
[fotor圖片拼圖工具](https://www.fotor.com/tw/features/collage.html)

四個拼起來，記得拚的時候要將有
![](https://i.imgur.com/rQi4TGo.png)
J個東東的放在四個角

## (七)Header 0x3
解題思路:`Where is the header?`這告訴我們它的header不見了，也意謂著要補header給它

#### 1.png檔header好朋友
打開winhex檢查真的沒有header，就把它副檔名的png檔的header還給它
又是這個啦~png的header`89 50 4E 47 0D 0A 1A 0A`
記得貼上的時候要選`貼上插入`而不是貼上寫入

出來後打開就有flag啦~

## (八)Secret Document
解題思路:平常有解包的習慣這題應該算簡單

這題的解壓縮方式是.zip檔，所以如果直接右鍵解壓縮全部
它一定會叫你輸入密碼

這時候只要改成用.7z解的話(我自己是用7zip來解)，就能直接繞過
密碼的限制了~

# 其他的有空再補囉
