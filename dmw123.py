import pandas as pd
from sklearn import linear_model
import pickle
import numpy as np
import sys

num_1 = sys.argv[1]
num_2 = sys.argv[2]
num_3 = sys.argv[3]  
num_4 = sys.argv[4]
num_5 = sys.argv[5]  

data=[[int(num_1),int(num_2),int(num_3),int(num_4),int(num_5)]] 
pickle_in = open("model.pickle", "rb")
linear = pickle.load(pickle_in) 
              
d1=linear.predict(data)   
print(str(np.round(d1[0],3)))  