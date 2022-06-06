import random

#Gerador de números de telefone em python
def gerar_codigos():
    num_1 = random.randrange(1,200)
    num_2 = random.randrange(111111111,999999999)
    res = "" + str(num_1) + "," + str(num_2) + "\n"
    return res

if __name__=="__main__":
    with open('dados/telefones.txt', 'a') as arquivo:
        for i in range(2000):
            arquivo.write(gerar_codigos())
        arquivo.close()