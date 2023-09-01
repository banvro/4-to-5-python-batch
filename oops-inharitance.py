# Inharitance : 
#     1) single inharitance
#     2) multipal inharitance
#     3) mutilevel inharitance
#     4) hirricahical inharitance
#     5) hybrid inharitance


# single inharitance

# class cls1:
#     def mthd1(self):
#         print("i am from class1")
    
#     def mthd2(self):
#         print("i am also from class 1")

# class cls2(cls1):
#     def mthd3(self):
#         print("i am form class 2")
        
# obj = cls2()
# obj.mthd1()
        
        
        
# multipal inhariatnce

# class cls1:
#     def mthd1(self):
#         print("i am from class1")
    
#     def mthd2(self):
#         print("i am also from class 1")

# class cls2:
#     def mthd3(self):
#         print("i am form class 2")

# class cls3(cls1, cls2):
#     def mthd4(self):
#         print("i am from class 3")
        
# obj = cls3()
# obj.mthd1()
        
        
# multilevel inharitance:
        
# class cls1:
#     def mthd1(self):
#         print("i am from class1")
    
#     def mthd2(self):
#         print("i am also from class 1")

# class cls2(cls1):
#     def mthd3(self):
#         print("i am form class 2")

# class cls3(cls2):
#     def mthd4(self):
#         print("i am from class 3")
        
# obj = cls3()
# obj.mthd3()
       
       
# hiriricahical inharitnce

# class cls1:
#     def mthd1(self):
#         print("i am from class1")
    
#     def mthd2(self):
#         print("i am also from class 1")

# class cls2(cls1):
#     def mthd3(self):
#         print("i am form class 2")

# class cls3(cls1):
#     def mthd4(self):
#         print("i am from class 3")
        
# obj = cls3()
# obj.mthd3()
        
        
        
# Hybrid inharitance


# class cls1:
#     def mthd1(self):
#         print("i am from class1")
    
#     def mthd2(self):
#         print("i am also from class 1")

# class cls2(cls1):
#     def mthd3(self):
#         print("i am form class 2")

# class cls3(cls1):
#     def mthd4(self):
#         print("i am from class 3")

# class cls4(cls2, cls3):
#     def mthd5(self):
#         print("i am from class 4")
        
# obj = cls4()
# obj.mthd1()


# class cls1:
#     def __init__(self, a, b):
#         self.name = a
#         self.age = b
    
#     def saveinfo(self):
#         print(f"username is : {self.name} and user age is : {self.age}")

# obj = cls1("kriss", 10)
# obj.saveinfo()
# obj1 = cls1("xyz", 20)
# obj1.saveinfo()

# class cls2(cls1):
#     def __init__(self, a, b, c):
#         super().__init__(a, b)
#         self.phone_number = c
    
#     def saveinfo(self):
#         print(f"username is : {self.name} and user age is : {self.age} and user phone number is {self.phone_number}")
        

# objx = cls2("newuser", 20, 91826398)
# objx.saveinfo()





class cls1:
    def mthd1(self):
        print("i am from class1")
    
    def mthd2(self):
        print("i am also from class 1")

class cls2(cls1):
    def mthd3(self):
        print("i am form class 2")

class cls3(cls1):
    def mthd4(self):
        print("i am from class 3")
    
class cls4(cls2, cls3):
    def mthd5(self):
        print('i am from class 4')
        
obj = cls4()
obj.mthd1()
        





