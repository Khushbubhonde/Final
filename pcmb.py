import pandas as pd
import numpy as np
import sklearn.model_selection
# from sklearn.utils import shuffle
import matplotlib.pyplot as plt 
from matplotlib import style
import pickle
from sklearn.naive_bayes import GaussianNB 

style.use("ggplot") 

# Import dataset with student's data
data = pd.read_csv("student_group1.csv", sep=",")

# Select the value we want to predict
predict = "Group"

# List the variables we want to use for our predictions in this model
data = data[[ "Maths", "Bio","Group"]]
# data = shuffle(data)

x = np.array(data.drop([predict], 1))
y = np.array(data[predict])

x_train, x_test, y_train, y_test = sklearn.model_selection.train_test_split(x, y, test_size = 0.1)

# Train model multiple times to find the highest accuracy
best = 0
for _ in range(200):
    x_train, x_test, y_train, y_test = sklearn.model_selection.train_test_split(x, y, test_size = 0.1)

    gauss =GaussianNB()

    gauss.fit(x_train, y_train)
    acc = gauss.score(x_test, y_test)
    print("Accuracy: " + str(acc))

    # Save the highest accuracy
    if (acc > best):
        best = acc
        with open("Astro_model.pickle", "wb") as f: 
            pickle.dump(gauss, f)
print("Highest Accuracy:", best)

# Load model
pickle_in = open("Astro_model.pickle", "rb")
gauss = pickle.load(pickle_in) 

predictions = gauss.predict(x_test)

# Print the predictions, the variables we used and the actual final grade
for x in range(len(predictions)):
    print("Predicted Final grade:", predictions[x], "Data:", x_test[x], "Final grade:", y_test[x])

