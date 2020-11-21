import pandas as pd
import numpy as np
import pickle
from sklearn.model_selection import train_test_split
from sklearn.svm import SVC
from sklearn.preprocessing import LabelEncoder
from sklearn.preprocessing import StandardScaler
df = pd.read_csv('iris.data')

X = np.array(df.drop('Iris-setosa' , axis = 1))
y = np.array(df['Iris-setosa'])

print(X)
print(y)

le = LabelEncoder()
Y = le.fit_transform(y)

#scaler = StandardScaler()
#scaler.fit(X)
#x = scaler.fit_transform(X)
#X_train, X_test, y_train, y_test = train_test_split(x, Y, test_size=0.1)

X_train, X_test, y_train, y_test = train_test_split(X, Y, test_size=0.2)

sv = SVC(kernel='linear').fit(X_train, y_train)

pickle.dump(sv, open('iris.pkl', 'wb'))

