#Sitio web de Python https://www.php.net/

#Comentario de una sola linea

"""
Comentario de varias lineas 
"""

'''
Comentario de varias lineas
'''

variable = "primera variable" 
'''En Python no existe la constante sino que hay una convención para que el programador sepa que
variable no mdificar'''
MY_CONSTANTE = "segunda variable"

#tipos de variables
string = "Este es un Sring (cadena de texto)"
integer = 11
floats = 11.56
booleno = True
none = None
lists = [1, 2, 3, 4, 5, 'bob', True, False]
dicionary = {
    "Hola" : "Adios",
    "undefined" : "undefined"
}

print("¡Hola, Python")

print(type(string))
print(type(integer))
print(type(floats))
print(type(booleno))
print(type(none))
print(type(lists))
print(type(dicionary))