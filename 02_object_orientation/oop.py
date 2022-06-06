"""
2. [Orientação a Objetos] Dado a classe Python:
class X:
    def processa(self, n):
        return n * n

Escreva uma subclasse Y da classe X, que receba um número m como atributo de instância e utilize-o
para dividir o valor retornado pelo método processa(n) da classe-mãe.
"""


class X:
    def processa(self, n):
        return n * n


class Y(X):
    def __init__(self, m):
        super().__init__()
        self.m = m

    def divide(self, n):
        """
        Takes a number and divides it by the instance attribute belonging to the class
        """
        res = super().processa(n) / self.m
        return res


y = Y(2)
print(y.divide(10))
