class X:
	def processa(self, n):
		return n * n

class Y(X):
    def __init__(self, m):
        super().__init__()
        self.m = m

    def dividir(self, n):
        return (super().processa(n) / self.m)

if __name__=='__main__':
    y = Y(5)
    print(y.dividir(10))
