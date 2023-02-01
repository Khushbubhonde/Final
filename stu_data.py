import pandas as pd
import sys

df=pd.read_excel("Search_student.xlsx")


num_1=sys.argv[1]
def search_roll(num):
     for i in range(0,len(df)):
            if (num == df.iat[i,0]): 
                if (df.iat[i,3]=="M"):
                    gender="He"
                    his_her="His"
                else: 
                    gender="She"
                    his_her="Her"
                print(f"Roll No of {df.iat[i,1]} {df.iat[i,2]} is {df.iat[i,0]}, {gender} is from {df.iat[i,5]}, {his_her} Birth date is {df.iat[i,4]} ")
                break  

search_roll(int(num_1))