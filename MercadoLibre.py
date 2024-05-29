#Importa las librerias
from selenium import webdriver
from selenium.webdriver.firefox.service import Service

import time
import pandas as pd


#Crea input para buscar productos
string = input("¿Que producto quieres buscar?")

# Crear instancia del driver
service = Service(executable_path=r'C:\Users\ProdUp\Desktop\Robot\geckodriver.exe')
driver = webdriver.Firefox(service=service)

# Carga la pagina de Mercado Libre
driver.get('https://www.mercadolibre.com.mx/')

# Buscar productos en Mercado Libre
time.sleep(3)
buscardor = driver.find_element("xpath", '//*[@id="cb1-edit"]')
buscardor.send_keys(string)
boton_buscar = driver.find_element("xpath", '//button[@class="nav-search-btn"]')
boton_buscar.click()

time.sleep(3)

lista_url_productos = []
lista_datos_producto = []

lista_productos = driver.find_elements("xpath", '//li[@class="ui-search-layout__item"]')

for i, producto in enumerate(lista_productos):
    url_producto = producto.find_element("xpath", './/a[@class="ui-search-item__group__element ui-search-link"]').get_attribute('href')
    lista_url_productos.append(url_producto)

for url_producto in lista_url_productos:
    
    driver.get(url_producto)
    time.sleep(3)

    fotos_producto = 'Sin Foto'
    nombre_producto = 'Sin Nombre'
    precio_producto = 'Sin Precio'
    puntuacion_producto = 'Sin Puntuacion'

    try:
        fotos_producto = driver.find_element("xpath", '//img[@class="ui-pdp-image ui-pdp-gallery__figure__image"]')
        nombre_producto = driver.find_element("xpath", '//h1[@class="ui-pdp-title"]').text
        precio_producto = driver.find_element("xpath", '//div[@class="ui-pdp-price__second-line"]//span[@class= "andes-money-amount ui-pdp-price__part andes-money-amount--cents-superscript andes-money-amount--compact"]').text
        puntuacion_producto = driver.find_element("xpath", '//p[@class="ui-review-capability__rating__average ui-review-capability__rating__average--desktop"]').text

    except Exception as e:
        pass

    print(f'NUMERO PRODUCTO -> {i}')
    print(f'FOTO_PRODUCTO -> {fotos_producto}')
    print(f'NOMBRE_PRODUCTO -> {nombre_producto}')
    print(f'PRECIO_PRODUCTO -> {precio_producto}')
    print(f'PUNTUACION_PRODUCTO -> {puntuacion_producto}')

    datos_productos = [fotos_producto, nombre_producto, precio_producto, puntuacion_producto]

    lista_datos_producto.append(datos_productos)

    driver.back()

#Generar reporte con la DATA extraida

columnas = ['Fotos', 'Nombre', 'Precio', 'Puntuacion']
df_mates = pd.DataFrame(lista_datos_producto, columns=columnas)
df_mates.to_excel("DataProductos.xlsx", sheet_name="ML", index=False)