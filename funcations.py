# Python functions : code optimization


# lambda functions : 

# lambda arguments : expresion

# x = lambda a, b : a + b 

# print(x(12, 10))

# z = lambda a : a + 10

# print(z(10))

# 1) map()
# 2) filter()
# 3) reduce()

# map()

# map(function, itreater)

# a = [12, 23, 34, 45, 67, 100]

# zx = map(lambda x : x + 10, a)

# print(list(zx))


# filter : filter(function, itreaeter)

# xc = [2, 4, 5, 1, 2, 4, 90, 100]

# sd = filter(lambda x : x%2 != 0, xc)

# print(list(sd))


# from functools import reduce

# ax = [1, 2, 3, 4, 5, 7, 10, 7, 1]

# xc = reduce(lambda a, b : a + b, ax)

# print(xc)








# decorators 


def decorte(fun):
    def wrper(*args, **kwargs):
        print("wecpome this is my function")
        
        fun(*args, **kwargs)
        
        print("thank you for using me")
    
    return wrper

@decorte
def sumthis(a, b):
    # print("i am a sunthis function")
    c = a + b
    print(c)


sumthis(12, 10)





