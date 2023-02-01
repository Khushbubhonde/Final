import pandas as pd
from sklearn import linear_model
import pickle
import sys
num_1 = sys.argv[1]
num_2 = sys.argv[2]
num_3 = sys.argv[3]  
num_4 = sys.argv[4]

data=[[int(num_3),int(num_4)]] 

pickle_in = open("Astro_model.pickle", "rb")
linear = pickle.load(pickle_in)
 
d=linear.predict(data) 
 
if d==1:
    print("You can continue your further education with PCM group")
elif d==2 :
    print("You can continue your further education with PCB group")
else: 
    print("You can continue your further education with PCMB group") 
    
