from machine import Pin, PWM
import network   #import des fonction lier au wifi
import urequests #import des fonction lier au requetes http
import utime #import des fonction lier au temps
import ujson #import des fonction lier aà la convertion en Json

bt = Pin(14, mode=Pin.IN, pull=Pin.PULL_UP) # declaration d'une variable de type pin ici la 14 
                                                    #et on prescise que c'est une pine d'entré de courant (IN)
oldSate=1

url="http://192.168.46.76/twitter/envoieauto.php"
while True: 
    if bt.value()==0 and oldState==1:
        print("GET")
        r = urequests.get(url) 
        r.close()
    oldState=bt.value()
    print(bt.value())
    utime.sleep(.1)