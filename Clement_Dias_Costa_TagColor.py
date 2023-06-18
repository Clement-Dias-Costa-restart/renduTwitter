from machine import Pin, PWM
import network   #import des fonction lier au wifi
import urequests #import des fonction lier au requetes http
import utime #import des fonction lier au temps
import ujson #import des fonction lier aà la convertion en Json

leds = [PWM(Pin(17, mode=Pin.OUT)),PWM(Pin(18, mode=Pin.OUT)),PWM(Pin(19, mode=Pin.OUT))]
for led in leds:
    led.freq(1_000)
    led.duty_u16(0)
    
wlan = network.WLAN(network.STA_IF) # met la raspi en mode client wifi
wlan.active(True) # active le mode client wifi

ssid = 'Mi Note 10 Lite'
password = 'yoyoyoto'
wlan.connect(ssid, password) # connecte la raspi au réseau
url = "http://192.168.46.76/twitter/led.php"

while not wlan.isconnected():
    print("pas co")
    utime.sleep(1)
    pass

colors = {
        "animaux":[255,0,0],
        "sport":[0,255,0],
        "politique":[0,0,255],
        "mode":[255,255,0],
        "divertissement":[0, 255, 255],
        "actualité":[255, 0, 255],
    }


def rvb(couleurs):
    for i in range(3):
        leds[i].duty_u16(couleurs[i]*255)
        print("e")
    
def color(t):
    rvb(colors[t])
    utime.sleep(1)


while(True):
    try:
        print("GET")
        r = urequests.get(url) # lance une requete sur l'url
        print(r.json()[0]["tag"]) # traite sa reponse en Json
        color(r.json()[0]["tag"])
        r.close() # ferme la demande
        utime.sleep(1)  
    except Exception as e:
        print(e)