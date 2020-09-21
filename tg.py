import os, sys
intro = r""" 
 _______    _               _____           _
|__   __|  | |             / ____|         | |
   | | ___ | | _____ _ __ | |  __ _ __ __ _| |__
   | |/ _ \| |/ / _ \ '_ \| | |_ | '__/ _` | '_ \
   | | (_) |   <  __/ | | | |__| | | | (_| | |_) |
   |_|\___/|_|\_\___|_| |_|\_____|_|  \__,_|_.__/


"""
os.system("clear")
print(intro)
print("Введите порт например 4040 или 8080")
port = input("[PORT] : ")
if port == "":
	os.system("php -S localhost:8080")
os.system("php -S localhost:" + port)
