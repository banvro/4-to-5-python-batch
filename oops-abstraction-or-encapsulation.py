# Abstraction : i used for data hiding....  

# abc => abstract base class 

# from abc import ABC, abstractmethod
# # interface

# class xyz(ABC):
#     @abstractmethod
#     def car(self):
#         print("i am a car")
    
#     def bus(self):
#         print("i am a bus")


# class pqr(xyz):
#     def ui(self):
#         print("i am ui")
    
#     def car(self):
#         print("hello word")


# obj = pqr()

# obj.car()



# Encapsulation :

# access spacifiers:
    # 1) public mambers
    # 2) private mambers    __
    # 3) protected mambers   _



class xyz:
    def __init__(self, a, b):
        self._a = a
        self.b = b
    
    def showme(self):
        print(self._a)

class ghi(xyz):
    def showthis(self):
        print(self._a)

class hij:
    def showthis(self):
        print(self._a)


obj = ghi("kriss", "moris")

obj.showthis()
# print(obj.a)




# polymorhism
