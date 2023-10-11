
import tkinter as tk

def clickme():
    x = entr.get()
    y = entr1.get()

    print(x, y)

app = tk.Tk()

app.geometry("400x400")


lbl = tk.Label(app, text="Name   :  ", font = ("robort", 20, "bold"))
lbl.grid(row=0, column=0)

entr = tk.Entry(app, font = ("robort", 14, "italic"))
entr.grid(row=0, column=1)

lbl1 = tk.Label(app, text="Age   :  ", font = ("robort", 20, "bold"))
lbl1.grid(row=1, column=0)

entr1 = tk.Entry(app, font = ("robort", 14, "italic"))
entr1.grid(row=1, column=1)

btn = tk.Button(app, text = "Submit", font = ("robort", 14, "bold"), command=clickme)
btn.grid(row=2, column=1)

app.mainloop()













