# Cookie

## php source code:
the source code tell us that `user_id` must be `0` 
![image](https://user-images.githubusercontent.com/75651364/186179876-f73a20b9-5c41-485e-a1f6-d4f4057f915c.png)

## cookie:
![image](https://user-images.githubusercontent.com/75651364/186179678-fd68613c-fbd0-4942-a262-7b0164719787.png)

the value has been url encode, you can url decode first.
![image](https://user-images.githubusercontent.com/75651364/186179993-cd9d9344-5f78-44b8-832c-a2fa27ab692f.png)

after decode it. 
add value:`\0` in `user_id`, and encode it.
![image](https://user-images.githubusercontent.com/75651364/186180826-4eb744df-a134-44db-845f-0918964e3036.png)

put the new encode value to cookie where `W16_data`.
![image](https://user-images.githubusercontent.com/75651364/186181837-dd5ec6d8-9953-45ec-aff2-709086b42f1a.png)

...
F5
...

**Flag:**
`HITCON{=.=|||=.=|||=.=|||==.==|||===.===|||=.=|||}`
