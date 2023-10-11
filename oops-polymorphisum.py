# Polymorphisum :
        
#     poly  : many
    
#     morphism : forms



# 1) Compile time polymorphism
#     operator overloading
#     method overloading
    
# 2) run time polymorphism
#     mthod overrinding

# duck typing


# method overloading : 


# class cls1:
#     def somethis(self, a, b, c):
#         zx = a + b + c
#         print(zx)
    
#     def somethis(self, a, b):
#         zx = a + b
#         print(zx)
    
#     def somethis(self, a):
#         zx = a
#         print(zx)

# obj = cls1()

# obj.somethis(12, 10)



# class cls1:
#     def showthis(self, a = None, b = None, c = None):
#         if a != None and b != None and c != None:
#             zx = a + b + c
#             print(zx)
        
#         elif a != None and b != None:
#             zx = a + b
#             print(zx)
        
#         elif a != None:
#             zx = a
#             print(a)

# obj = cls1()

# obj.showthis(12, 100, 1)





# method overridding

# a = 10
# a = 100

# class cls1:
#     def showdata(self):
#         print("i am fom class 1")
    
# class cls2(cls1):
#     def showdata(self):
#         print("i am from class 2")

# obj = cls2()
# obj.showdata()


# class cls1:
#     def xyz(self):
#         print("i am from class 1")

# class cls2:
#     def xyz(self):
#         print("i am from class 2")
    
# obj = cls1()
# obj1 = cls2()


# def pqr(q):
#     q.xyz()
    
# pqr(obj)











# operator overloading...

# 10 + 20

class cls1:
    def __init__(self, a, b):
        self.num1 = a
        self.num2 = b
    
    def show(self):
        print(self.num1 + self.num2)
    
    def __add__(new, other):
        qw = new.num1 + other.num1
        wq = new.num2 + other.num2
        sum = cls1(qw, wq)
        return sum
    
obj = cls1(12, 10)
obj1 = cls1(10, 20)

zx = obj + obj1

print(zx.num2)
