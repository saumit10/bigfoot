#!/usr/bin/env python
# coding: utf-8

# In[12]:


import pandas as pd
import numpy as np


# In[13]:


raw_data = pd.read_csv('mobile_price.csv')
raw_data.head()


# In[14]:


# get the shape
print(raw_data.shape)


# In[15]:


raw_data.info()


# In[16]:


data = raw_data.copy(deep = True)


# In[17]:


data['price_range'] = data['price_range'].astype("object")


# In[18]:


# get the count of missing values
missing_values = data.isnull().sum()

# print the count of missing values
print(missing_values)


# In[19]:


data.head()


# In[20]:


from sklearn.model_selection import train_test_split
# Split the data into 40% test and 60% training
X = data.drop(['price_range'],axis = 1)
y = data['price_range'].astype('int64')

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.4, random_state=0)


# In[21]:


from sklearn.ensemble import RandomForestClassifier
# Create a random forest classifier
clf = RandomForestClassifier(n_estimators=10000, random_state=0, n_jobs=-1)

# Train the classifier
clf.fit(X_train, y_train)


# In[22]:


feat_labels = X.columns.values
# Print the name and gini importance of each feature
feature_importance = []
for feature in zip(feat_labels, clf.feature_importances_):
    #rint(feature)
    feature_importance.append(feature)


# In[23]:


from sklearn.feature_selection import SelectFromModel
# Create a selector object that will use the random forest classifier to identify
# features that have an importance of more than 0.01
sfm = SelectFromModel(clf, threshold=0.01)

# Train the selector
sfm.fit(X_train, y_train)


# In[24]:


selected_features = []
# Print the names of the most important features
for feature_list_index in sfm.get_support(indices=True):
    selected_features.append(feat_labels[feature_list_index])

data_selected = data[selected_features]
data_selected.head()


# In[25]:


selected_features


# In[29]:


data_selected.set_index('battery_power').to_csv('scale.csv')


# In[26]:


# Standardise the data
from sklearn.preprocessing import MinMaxScaler

scaler = MinMaxScaler()

scaler.fit(data_selected)


# In[27]:


data_standardised = scaler.fit_transform(data_selected)


# In[32]:


from sklearn.model_selection import train_test_split
# let us now split the dataset into train & test
X = data_standardised
y = data['price_range'].astype('int64')
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.30, random_state=10)

# print the shape of 'x_train'
print("X_train ",X_train.shape)

# print the shape of 'x_test'
print("X_test ",X_test.shape)

# print the shape of 'y_train'
print("y_train ",y_train.shape)

# print the shape of 'y_test'
print("y_test ",y_test.shape)


# In[33]:


from sklearn.svm import SVC
# define model
svm = SVC(kernel="linear",decision_function_shape='ovo')
# fit model
svm.fit(X_train, y_train)


# In[34]:


# predict the values
y_pred_svm  = svm.predict(X_test)

from sklearn import metrics
svm_metrics = pd.Series({'Model': "SVM",   
                 'Precision Score': metrics.precision_score(y_test, y_pred_svm,average="macro"),
                 'Recall Score': metrics.recall_score(y_test, y_pred_svm,average="macro"),
                 'Accuracy Score': metrics.accuracy_score(y_test, y_pred_svm),
                  'f1-score':metrics.f1_score(y_test, y_pred_svm,average="macro")})


# In[35]:


# appending our result table
result_tabulation = pd.DataFrame(svm_metrics)

# view the result table
result_tabulation


# In[36]:


import pickle
pickle.dump(svm,open('Mobile_price.pkl','wb'))


# In[ ]:




