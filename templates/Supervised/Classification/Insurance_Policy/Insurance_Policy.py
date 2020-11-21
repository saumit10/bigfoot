#!/usr/bin/env python
# coding: utf-8

# In[1]:


import pandas as pd
import numpy as np


# In[3]:


raw_data = pd.read_csv('Insurance.csv') # reading a csv file
raw_data.head()


# In[4]:


train_data = raw_data.copy(deep=True) 

# Droping id as it is not usefull in prediction
train_data.drop(['id'] , axis = 1 , inplace=True)
train_data.head()


# In[6]:


new_features = ['percent_paid' , 'days' , 'income' , '3-6_months' , '6-12_months' , 'more_than_12_months' , 
                'writing_score' , 'paid_premiums' , 'channel' , 'area' , 'target']


# In[7]:


train_data.columns = new_features


# In[8]:


from sklearn.impute import KNNImputer

# Creating a function to compute missing values
def compute_missing_values(dataset):
    numeric_data = dataset._get_numeric_data()
    # Chice number of neighbours as 2
    imputer = KNNImputer(n_neighbors=2)
    # Fit the model on our dataset
    imputer.fit(numeric_data)
    # Transform the dataset
    data_imputed = imputer.fit_transform(numeric_data)
    data_no = pd.DataFrame(data_imputed , columns = numeric_data.columns.values)
    return pd.concat([data_no, dataset.select_dtypes(include='object')], axis=1)

train_no_missing = compute_missing_values(train_data)
train_no_missing.head()


# In[9]:


train_no_missing.isna().sum()


# In[12]:


dataset = train_no_missing.copy()
dataset.loc[ dataset['income'] <= 23603.99, 'income'] = 0
dataset.loc[(dataset['income'] > 23603.99) & (dataset['income'] <= 109232.0), 'income'] = 1
dataset.loc[(dataset['income'] > 109232.0) & (dataset['income'] <= 194434.0), 'income'] = 2
dataset.loc[(dataset['income'] > 194434.0) & (dataset['income'] <= 279636.0), 'income'] = 3
dataset.loc[(dataset['income'] > 279636.0) & (dataset['income'] <= 364838.0), 'income'] = 4
dataset.loc[(dataset['income'] > 364838.0) & (dataset['income'] <= 450040.0), 'income'] = 5
dataset.loc[ dataset['income'] > 450040.0, 'income'] = 6


# In[13]:


dataset['area'] = dataset['area'].map( {'Urban' : 1, 'Rural' : 0} )
dataset['channel'] = dataset['channel'].map( {'A' : 0, 'B' : 1, 'C' : 2, 'D' : 3, 'E' : 4} )


# In[14]:


train_modified = dataset.copy()  


# In[16]:


print(train_modified.area.unique())
print(train_modified.channel.unique())


# In[17]:


X = train_modified.drop(['target'] , axis = 1)
y = train_modified['target']


# In[20]:


X.set_index('percent_paid').to_csv('scale.csv')


# In[21]:


# We will standardize the data using Minmaxscaler
from sklearn.preprocessing import MinMaxScaler

# Creating Object of Minmax scaler
scaler = MinMaxScaler()

scaler.fit(X)


# In[22]:


X = scaler.fit_transform(X)


# In[23]:


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


# In[24]:


# Build Model

# Bagging Classifier
from sklearn.ensemble import BaggingClassifier
from sklearn import tree

# build the model
meta_estimator = BaggingClassifier(tree.DecisionTreeClassifier(random_state=10))

# fit the model
meta_estimator.fit(X_train, y_train)


# In[25]:


y_pred = meta_estimator.predict(X_test)


# In[26]:


from sklearn import metrics

# create a list of column names
cols = ['Model', 'AUC Score', 'Precision Score', 'Recall Score','Accuracy Score','f1-score']

# creating an empty dataframe of the colums
result_tabulation = pd.DataFrame(columns = cols)

# compiling the required information
Bagging_Meta_estimator = pd.Series({'Model': "Bagging Meta-estimator",
                     'AUC Score' : metrics.roc_auc_score(y_test, y_pred),
                 'Precision Score': metrics.precision_score(y_test, y_pred),
                 'Recall Score': metrics.recall_score(y_test, y_pred),
                 'Accuracy Score': metrics.accuracy_score(y_test, y_pred),
                  'f1-score':metrics.f1_score(y_test, y_pred)})



# appending our result table
result_tabulation = result_tabulation.append(Bagging_Meta_estimator , ignore_index = True)

# view the result table
result_tabulation


# In[27]:


# Adaboost
from sklearn.ensemble import AdaBoostClassifier

# build the model
adaboost = AdaBoostClassifier(random_state=10)
# fit the model
adaboost.fit(X_train, y_train)


# In[28]:


# predict the values
y_pred_adaboost  = adaboost.predict(X_test)


# In[29]:


adaboost_metrics = pd.Series({'Model': "AdaBoost",
                     'AUC Score' : metrics.roc_auc_score(y_test, y_pred_adaboost),
                 'Precision Score': metrics.precision_score(y_test, y_pred_adaboost),
                 'Recall Score': metrics.recall_score(y_test, y_pred_adaboost),
                 'Accuracy Score': metrics.accuracy_score(y_test, y_pred_adaboost),
                  'f1-score':metrics.f1_score(y_test, y_pred_adaboost)})



# appending our result table
result_tabulation = result_tabulation.append(adaboost_metrics , ignore_index = True)

# view the result table
result_tabulation


# In[30]:


# XGboost
#import xgboost classifier
from xgboost.sklearn import XGBClassifier

# build the model
xgbm = XGBClassifier(random_state=1,learning_rate=0.01)
# fit the model
xgbm.fit(X_train, y_train)


# In[31]:


# predict the values
y_pred_xgbm  = xgbm.predict(X_test)


# In[32]:


# compiling the required information
xgbm_metrices = pd.Series({'Model': "XGBM",
                     'AUC Score' : metrics.roc_auc_score(y_test, y_pred_xgbm),
                 'Precision Score': metrics.precision_score(y_test, y_pred_xgbm),
                 'Recall Score': metrics.recall_score(y_test, y_pred_xgbm),
                 'Accuracy Score': metrics.accuracy_score(y_test, y_pred_xgbm),

                  'f1-score':metrics.f1_score(y_test, y_pred_xgbm)})



# appending our result table
result_tabulation = result_tabulation.append(xgbm_metrices , ignore_index = True)

# view the result table
result_tabulation


# In[33]:


# LOgistic Regression
from sklearn.linear_model import LogisticRegression

# Create logistic regression
logistic = LogisticRegression()

logistic.fit(X_train,y_train)


# In[34]:


# predict the values
y_pred = logistic.predict(X_test)


# In[35]:


# compiling the required information
logisitc = pd.Series({'Model': "Logistic Regression",
                     'AUC Score' : metrics.roc_auc_score(y_test, y_pred),
                 'Precision Score': metrics.precision_score(y_test, y_pred),
                 'Recall Score': metrics.recall_score(y_test, y_pred),
                 'Accuracy Score': metrics.accuracy_score(y_test, y_pred),
                  'f1-score':metrics.f1_score(y_test, y_pred)})



# appending our result table
result_tabulation = result_tabulation.append(logisitc , ignore_index = True)

# view the result table
result_tabulation


# In[36]:


from sklearn.naive_bayes import GaussianNB

# build the model
GNB = GaussianNB()

# fit the model
GNB.fit(X_train, y_train)


# In[37]:


# predict the values
y_pred_GNB  = GNB.predict(X_test)


# In[38]:


# compiling the required information
GNB_metrices = pd.Series({'Model': "Naive Bayes",
                     'AUC Score' : metrics.roc_auc_score(y_test, y_pred_GNB),
                 'Precision Score': metrics.precision_score(y_test, y_pred_GNB),
                 'Recall Score': metrics.recall_score(y_test, y_pred_GNB),
                 'Accuracy Score': metrics.accuracy_score(y_test, y_pred_GNB),

                  'f1-score':metrics.f1_score(y_test, y_pred_GNB)})



# appending our result table
result_tabulation = result_tabulation.append(GNB_metrices , ignore_index = True)

# view the result table

result_tabulation


# In[39]:


# KNN
from sklearn.neighbors import KNeighborsClassifier
#create new a knn model
knn = KNeighborsClassifier(n_neighbors=5)

#fit model to data
knn.fit(X_train, y_train)


# In[40]:


# predict the values
y_pred_knn  = knn.predict(X_test)


# In[41]:


# compiling the required information
knn_metrics = pd.Series({'Model': "KNN",
                     'AUC Score' : metrics.roc_auc_score(y_test, y_pred_knn),
                 'Precision Score': metrics.precision_score(y_test, y_pred_knn),
                 'Recall Score': metrics.recall_score(y_test, y_pred_knn),
                 'Accuracy Score': metrics.accuracy_score(y_test, y_pred_knn),
                  'f1-score':metrics.f1_score(y_test, y_pred_knn)})



# appending our result table
result_tabulation = result_tabulation.append(knn_metrics , ignore_index = True)

# view the result table
result_tabulation


# In[42]:


# Max AUC Score is achieved by Naive Bayes
# So selecting Naive Bayes
import pickle


# In[45]:


pickle.dump(GNB,open('insurance.pkl','wb'))


# In[ ]:




