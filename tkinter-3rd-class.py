import tkinter as tk
import mysql.connector

con = mysql.connector.connect("askdvashvjd")
mycurser = con.cursor()

def savedata():
    zx = entr.get()
    qw = entr1.get()
    print(zx, qw, "iweuuiweriwruweiur")

    mycurser.execute(f"insert into tablename values('{zx}', {qw})")
    con.commit()
    
app = tk.Tk()

app.geometry("600x400")
app.title("My Form")

lbl = tk.Label(app, text="Name : ", font=("robort", 20, "bold"))
entr = tk.Entry(app, font=("robort", 20, "italic"))

lbl1 = tk.Label(app, text="Number : ", font=("robort", 20, "bold"))
entr1 = tk.Entry(app, font=("robort", 20, "italic"))

btn = tk.Button(app, text="Submit", font=("robort", 17, "bold"), command=savedata)

lbl.grid(row=0, column=0, ipadx=70, ipady=10)
lbl1.grid(row=1, column=0)
entr.grid(row=0, column=1)
entr1.grid(row=1, column=1)

btn.grid(row=2, column=1, pady=10, ipadx=5, ipady=5)



app.mainloop()
