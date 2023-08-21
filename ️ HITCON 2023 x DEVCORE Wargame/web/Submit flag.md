# Submit flag

這題我一開始完全沒有頭緒，後來在比賽結束後直接在 HITCON 詢問了第二名的kaibro，才知道這題是**race condition**

進入到網頁，有一個`username`的輸入框，隨意輸入一個username
![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/69401726-fe71-4ffd-91ad-f2961ae39644)

將`FLAG{this_is_the_first_flag}`放到輸入框裡，即可以獲得一分，
但因為這題的弱點是race condition，意思是 **送出一個flag --> 得一分**，但在還沒返回分數時，短時間內送出大量的`FLAG{this_is_the_first_flag}`，即可以獲得5分
![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/139605bd-f4bf-45a5-94fb-9398fd01cf23)

將`FLAG{this_is_the_first_flag}`放入輸入框中，快速連續點擊`submit`，即可達成攻擊。
![image](https://github.com/jonafk555/My_CTF_Writeup/assets/75651364/91abcb89-a694-400c-b341-517861481a31)
