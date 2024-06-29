#!/usr/bin/env python

import tkinter as tk
from tkinter.messagebox import showinfo

root =tk.Tk()

def show_message():
    message_window = tk.Toplevel(root)
    message_window.title("Message")
    message_label = tk.Label(message_window, text="Hello World!")
    message_label.pack(padx=20, pady=20)
    
btn = tk.Button(root, text="Click Me", command=show_message)
btn.pack()

root.mainloop()