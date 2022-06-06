import math

def area_triangulo(b,c,ang):
    tri = (b*c*math.sin(ang))/2
    return tri

def area_poligono(arr,ang):
    area_soma = 0
    for i in range(0,len(arr)-1):
        area_soma += area_triangulo(arr[i],arr[i+1],ang)

    area_soma += area_triangulo(arr[len(arr)-1],arr[0],ang)

    return area_soma


if __name__ == "__main__":
    notas = [8.2, 7.8, 7.9, 6.2, 7.3, 8.0, 8.0, 9.3, 8.7]
    ang = 360/len(notas)
    area = area_poligono(notas,ang)
    print("Area do poligono: ",area)