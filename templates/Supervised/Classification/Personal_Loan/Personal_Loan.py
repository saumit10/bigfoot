#!/usr/bin/env python
# coding: utf-8

# In[1]:


import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import seaborn as sns
# Set default setting of seaborn
sns.set()


# In[3]:


# read the data
raw_data = pd.read_csv('personal_loan.csv')
raw_data.head()


# In[6]:


raw_data.shape


# In[4]:


data = raw_data.drop(['ID','ZIP Code'],axis= 1)
data.head()


# In[5]:


data[['Experience']] = data[['Experience']].replace([-3,-2,-1],np.NaN)


# In[7]:


data = data.dropna()

data.describe()


# In[8]:


# get the count of missing values
missing_values = data.isnull().sum()

# print the count of missing values
print(missing_values)


# In[9]:


# check correlation
data_num = data.drop(['Personal Loan','Family','Education','Online','Securities Account','CD Account','CreditCard'], axis=1)
corr = data_num.corr()
corr


# In[29]:


drop_list = ['Age']
data_cleaned = data.drop(drop_list,axis = 1 )        
data_cleaned.head()


# In[38]:


y = data_cleaned['Personal Loan']
x = data_cleaned.drop(['Personal Loan'],axis = 1)


# In[39]:


from sklearn.preprocessing import MinMaxScaler

scaler = MinMaxScaler()
scaler.fit(x)

X = scaler.transform(x)
y = np.array(y)


# In[40]:


x.set_index('Experience').to_csv('scale.csv')


# In[41]:


# Oversample and plot imbalanced dataset with SMOTE
from collections import Counter
from sklearn.datasets import make_classification
from imblearn.over_sampling import SMOTE
from matplotlib import pyplot
from numpy import where


# In[42]:


print(Counter(y),len(X))


# In[43]:


# transform the dataset
oversample = SMOTE()


# In[44]:


X, y = oversample.fit_resample(X, y)


# In[46]:


# summarize the new class distribution
counter = Counter(y)
print(counter,len(X))


# In[48]:


from sklearn.model_selection import train_test_split
# let us now split the dataset into train & test
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.30, random_state=10)

# print the shape of 'x_train'
print("X_train ",X_train.shape)

# print the shape of 'x_test'
print("X_test ",X_test.shape)

# print the shape of 'y_train'
print("y_train ",y_train.shape)

# print the shape of 'y_test'
print("y_test ",y_test.shape)


# In[49]:


from sklearn.naive_bayes import GaussianNB

# build the model
GNB_smote = GaussianNB()

# fit the model
GNB_smote.fit(X_train, y_train)


# In[50]:


# predict the values
y_pred_smote  = GNB_smote.predict(X_test)


# In[54]:


from sklearn import metrics
# compiling the required information
GNB_smote_metrics = pd.Series({'Model': "Navie bayes model",
                     'AUC Score' : metrics.roc_auc_score(y_test, y_pred_smote),
                 'Precision Score': metrics.precision_score(y_test, y_pred_smote),
                 'Recall Score': metrics.recall_score(y_test, y_pred_smote),
                 'Accuracy Score': metrics.accuracy_score(y_test, y_pred_smote),
                  'f1-score':metrics.f1_score(y_test, y_pred_smote)})



# appending our result table
result_tabulation = pd.DataFrame(GNB_smote_metrics)

# view the result table
result_tabulation


# In[55]:


import pickle


# In[56]:


pickle.dump(GNB_smote,open('Personal.pkl','wb'))


# In[ ]:




