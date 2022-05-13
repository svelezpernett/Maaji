#Crear un script en cualquier lenguaje de programación. Que permita calcular
#la edad de una persona teniendo el cuenta el año de nacimient

from datetime import date

def calcularEdad():
    añoDeNacimiento = int(input("Ingrese el año de nacimiento: "))
    mesDeNacimiento = int(input("Ingrese el NUMERO del mes de nacimiento: "))
    diaDeNacimiento = int(input("Ingrese el dia de nacimiento: "))
    fechaActual = date.today()

    edad = fechaActual.year - añoDeNacimiento - ((fechaActual.month, fechaActual.day) < (mesDeNacimiento, diaDeNacimiento)) 

    return edad


print(calcularEdad())