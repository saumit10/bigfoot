#!/usr/bin/env python
# coding: utf-8

# In[171]:


import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import seaborn as sns
sns.set()


# In[172]:


raw_data = pd.read_csv('diabetes.csv')
raw_data.head()


# In[173]:


data = raw_data.copy(deep=True)


# In[174]:


data[['Glucose',"BloodPressure","SkinThickness","Insulin","BMI"]] = data[['Glucose',"BloodPressure","SkinThickness","Insulin","BMI"]].replace(0,np.NaN)


# In[175]:


data.fillna(data['SkinThickness'].median() , inplace=True)
data.fillna(data['Glucose'].mean() , inplace=True)
data.fillna(data['Insulin'].mean() , inplace=True)
data.fillna(data['BMI'].mean() , inplace=True)
data.fillna(data['BloodPressure'].mean() , inplace=True)


# In[176]:


x = data.drop('Outcome',axis = 1)
y = data['Outcome']


# In[177]:


x.set_index('Pregnancies').to_csv('scale.csv')


# In[178]:


# Scaler
from sklearn.preprocessing import MinMaxScaler
scaler = MinMaxScaler()
scaler.fit(x)
X = scaler.fit_transform(x)


# In[179]:


from sklearn.model_selection import train_test_split

# let us now split the dataset into train & test
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state=10)

# print the shape of 'x_train'
print("X_train ",X_train.shape)

# print the shape of 'x_test'
print("X_test ",X_test.shape)

# print the shape of 'y_train'
print("y_train ",y_train.shape)

# print the shape of 'y_test'
print("y_test ",y_test.shape)


# In[180]:


#  Bagging Classifier
from sklearn.ensemble import BaggingClassifier
from sklearn import tree

# build the model
meta_estimator = BaggingClassifier(tree.DecisionTreeClassifier(random_state=10))

# fit the model
meta_estimator.fit(X_train, y_train)


# In[181]:


# predict the values
y_pred = meta_estimator.predict(X_test)


# In[182]:


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


# In[183]:


# Adaboost
from sklearn.ensemble import AdaBoostClassifier

# build the model
adaboost = AdaBoostClassifier(random_state=10)
# fit the model
adaboost.fit(X_train, y_train)


# In[184]:


# predict the values
y_pred_adaboost  = adaboost.predict(X_test)


# In[185]:


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


# In[186]:


# Xgboost
#import xgboost classifier
from xgboost.sklearn import XGBClassifier

# build the model
xgbm = XGBClassifier(random_state=1,learning_rate=0.01)
# fit the model
xgbm.fit(X_train, y_train)


# In[187]:


# predict the values
y_pred_xgbm  = xgbm.predict(X_test)


# In[188]:


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


# In[189]:


# LOgistic regression
from sklearn.linear_model import LogisticRegression

# Create logistic regression
logistic = LogisticRegression()

logistic.fit(X_train,y_train)


# In[190]:


# predict the values
y_pred = logistic.predict(X_test)


# In[191]:


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


# In[192]:


# Naive Bayes
from sklearn.naive_bayes import GaussianNB

# build the model
GNB = GaussianNB()

# fit the model
GNB.fit(X_train, y_train)


# In[193]:


# predict the values
y_pred_GNB  = GNB.predict(X_test)


# In[194]:


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


# In[195]:


from sklearn.neighbors import KNeighborsClassifier
#create new a knn model
knn = KNeighborsClassifier(n_neighbors=5)


# In[196]:


#fit model to data
knn.fit(X_train, y_train)


# In[197]:


# predict the values
y_pred_knn  = knn.predict(X_test)


# In[198]:


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


# In[199]:


# Random forest
# Import the model we are using
from sklearn.ensemble import RandomForestRegressor
# Instantiate model with 1000 decision trees
rf = RandomForestRegressor(n_estimators = 1000, random_state = 42)
# Train the model on training data
rf.fit(X_train, y_train);


# In[200]:


y_random = rf.predict(X_test)


# In[201]:


a = []
for i in y_random:
    if i >= 0.5 :
        a.append(1)
    else :
        a.append(0)
y_random = a

print(X_test)
print(pd.DataFrame(y_random,columns = ['predicted']))
# In[202]:


# compiling the required information
random_metrics = pd.Series({'Model': "Random Forest",
                     'AUC Score' : metrics.roc_auc_score(y_test, y_random),
                 'Precision Score': metrics.precision_score(y_test, y_random),
                 'Recall Score': metrics.recall_score(y_test, y_random),
                 'Accuracy Score': metrics.accuracy_score(y_test, y_random),
                  'f1-score':metrics.f1_score(y_test, y_random)})



# appending our result table
result_tabulation = result_tabulation.append(random_metrics , ignore_index = True)

# view the result table
result_tabulation


# In[203]:


# Selecting Bagging Meta Estimator
import pickle


# In[205]:


pickle.dump(rf, open('diabeties.pkl', 'wb'))


# In[ ]:




