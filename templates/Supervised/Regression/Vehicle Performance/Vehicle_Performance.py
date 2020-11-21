#!/usr/bin/env python
# coding: utf-8

# In[1]:


import pandas as pd
import numpy as np


# In[2]:


raw_data = pd.read_csv('Vehicle.csv')
raw_data.head()


# In[3]:


data = raw_data[raw_data.horsepower != '?']
data.shape


# In[4]:


data_1 = data.copy(deep = True)
data_1.origin = data_1.origin.astype('object')


# In[5]:


data_1[["manufacturer", "model"]] = data_1["name"].str.split(" ", n=1, expand=True)
data_1.drop("name", axis=1, inplace=True)


# In[6]:


errors = {
         "vokswagen" : "volkswagen", 
         "vw" : "volkswagen", 
         "toyouta" : "toyota", 
         "mercedes-benz" : "mercedes", 
         "chevroelt": "chevrolet",
         "chevy" : "chevrolet", 
         "maxda" : "mazda"
         }

data_1.manufacturer = data_1.manufacturer.map(errors).fillna(data_1.manufacturer)


# In[7]:


import re
def alphanumeric(x):
    return re.sub('[^A-Za-z0-9]+', '', (str(x)))

data_1["model"] = data_1.model.apply(lambda x: alphanumeric(x))

print(len(data_1.model.unique()))


# In[8]:


data_2 = data_1.copy(deep = True)

data_2['log_mileage'] = np.log(data_2.Mileage)

data_2.head()


# In[9]:


data_3 = data_2.copy(deep = True)

#data_3.cylinders = data_3.cylinders.astype('object')


# In[11]:


# check correlation
data_num = data_3.drop(['origin'],axis = 1)
corr = data_num.corr()
corr


# In[14]:


import matplotlib.pyplot as plt
import seaborn as sns
sns.set()
#correlation map
f,ax = plt.subplots(figsize=(10, 10))
sns.heatmap(data_num.corr(), annot=True, linewidths=.5, fmt= '.1f',ax=ax)


# In[18]:


drop_list = ['manufacturer', 'model','origin','Mileage']
data_cleaned = data_3.drop(drop_list,axis = 1 )        
data_cleaned.tail()


# In[21]:


data_cleaned.drop('log_mileage' , axis = 1).set_index('cylinders').to_csv('standard.csv')


# In[22]:


data_cleaned.head()


# In[24]:


# Scale Data
from sklearn.preprocessing import MinMaxScaler

x = data_cleaned.drop(['log_mileage'],axis = 1)

scaler = MinMaxScaler()
scaler.fit(x)


# In[27]:


X = scaler.fit_transform(x)
y = data_cleaned.log_mileage


# In[28]:


from sklearn.model_selection import train_test_split
# let us now split the dataset into train & test
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.20, random_state=10)

# print the shape of 'x_train'
print("X_train ",X_train.shape)

# print the shape of 'x_test'
print("X_test ",X_test.shape)

# print the shape of 'y_train'
print("y_train ",y_train.shape)

# print the shape of 'y_test'
print("y_test ",y_test.shape)


# In[30]:


from sklearn.linear_model import LinearRegression
# build the model
OLS_model = LinearRegression()

# fit the model
OLS_model.fit(X_train, y_train)


# In[41]:


y_pred = OLS_model.predict(X_test)


# In[42]:


plt.scatter(y_test,y_pred)
plt.xlabel('Targets' ,size = 18)
plt.ylabel('Predictions',size = 18)
plt.show()


# In[43]:


# compute the R-Squared
r_squared_OLS = OLS_model.score(X_train,y_train)

# Number of observation or sample size
n = 313 

# No of independent variables
p = 9

#Compute Adj-R-Squared
Adj_r_squared_OLS = 1 - (1-r_squared_OLS)*(n-1)/(n-p-1)

# Compute RMSE
from sklearn.metrics import mean_squared_error
from math import sqrt

rmse_OLS = sqrt(mean_squared_error(y_test, y_pred))


# In[44]:


cols = ['Model', 'R-squared', 'Adj R-squared', 'RMSE']
result_tabulation = pd.DataFrame(columns = cols)
OLS_metrics = pd.Series({'Model': "OLS",
                 'R-squared' : r_squared_OLS, 'Adj R-squared' : Adj_r_squared_OLS , 'RMSE' :rmse_OLS})
result_tabulation = result_tabulation.append(OLS_metrics , ignore_index = True)
print(result_tabulation)


# In[47]:


# dump the model
import pickle


# In[48]:


pickle.dump(OLS_model, open('performance.pkl', 'wb'))


# In[ ]:




