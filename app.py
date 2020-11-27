from flask import Flask, render_template, request
import pickle
import os
import numpy as np
import pandas as pd
from sklearn.preprocessing import MinMaxScaler

app = Flask(__name__)

port = int(os.environ.get('PORT', 8000))


# Load Models
iris = pickle.load(open('templates/Supervised/Classification/Iris_Classifier/iris.pkl', 'rb'))
performance = pickle.load(open('templates/Supervised/Regression/Vehicle Performance/performance.pkl', 'rb'))
diabeties = pickle.load(open('templates/Supervised/Classification/Diabeties/diabeties.pkl', 'rb'))
insurance = pickle.load(open('templates/Supervised/Classification/Insurance_Policy/insurance.pkl', 'rb'))
price_range = pickle.load(open("templates/Supervised/Classification/Mobile_Price_Classification/Mobile_price.pkl", 'rb'))
personal_loan = pickle.load(open("templates/Supervised/Classification/Personal_Loan/Personal.pkl", 'rb'))

@app.route('/')
def man():
    return render_template('home.php')


@app.route('/predict_iris', methods=['POST'])
def predict_iris():
    data1 = request.form['spl']
    data2 = request.form['spw']
    data3 = request.form['ptl']
    data4 = request.form['ptw']
    arr = np.array([[float(data1), float(data2), float(data3), float(data4)]])
    #scaler = StandardScaler()
    #arr = scaler.fit_transform(arr)
    print(arr,data1,data2,data3,data4)
    pred = iris.predict(arr)[0]
    return render_template('Models.php' , iris_prediction = pred)

@app.route('/predict_vehicle_performance', methods=['POST'])
def predict_vehicle_performance():
    # 8,307.0,130,3504,12.0,1970
    cylinders = request.form['cylinders']
    displacement = request.form['displacement']
    power = request.form['power']
    weight = request.form['weight']
    acceleration = request.form['acceleration']
    year = request.form['year']

    data = pd.read_csv('templates/Supervised/Regression/Vehicle Performance/standard.csv')
    data_entered = pd.DataFrame([[cylinders, displacement, power, weight, acceleration, year]], columns=data.columns.values)
    print(data.tail())

    print(data.tail())
    scaler = MinMaxScaler()
    scaler.fit(data)
    data = data.append(data_entered)
    arr = scaler.fit_transform(data)
    arr = arr[392]
    arr = np.array([arr])
    print(arr)
    pred = np.exp(performance.predict(arr)[0])
    return render_template('Models.php' , performance_prediction = pred)

@app.route('/predict_diabeties', methods=['POST'])
def predict_diabeties():
    Pregnancies, Glucose, BloodPressure, SkinThickness, Insulin, BMI, DiabetesPedigreeFunction, Age = request.form['Pregnancies'], request.form['Glucose'], request.form['BloodPressure'] , request.form['SkinThickness'] , request.form['Insulin'], request.form['BMI'], request.form['DiabetesPedigreeFunction'],request.form['Age']

    data = pd.read_csv('templates/Supervised/Classification/Diabeties/scale.csv')
    data_entered = pd.DataFrame(
        [[Pregnancies, Glucose, BloodPressure, SkinThickness, Insulin, BMI, DiabetesPedigreeFunction, Age]],
        columns=data.columns.values)
    print(data.tail())

    print(data.tail())
    scaler = MinMaxScaler()
    scaler.fit(data)
    data = data.append(data_entered)
    arr = scaler.fit_transform(data)
    print(arr)
    arr = arr[768]
    print(arr,"asdas")
    arr = np.array([arr])
    print(arr)
    pred = int(diabeties.predict(arr)[0])
    print(pred,"asdadfdfd")
    return render_template('Models.php', diabeties_prediction=pred)

@app.route('/predict_insurance', methods=['POST'])
def predict_insurance():
    percent_paid, days, income, months_3_6_, months_6_12_, more_than_12_months, writing_score, \
    paid_premiums, channel, area = float(request.form['percent_paid']), float(request.form['days']) * 365.0 , \
                                   float(request.form['income']) , float(request.form['3_6_months']) , \
                                   float(request.form['6_12_months']), float(request.form['more_12_months']), \
                                   float(request.form['writing_score']),float(request.form['paid_premiums']), \
                                   request.form['channel'],request.form['area']

    if income <= 23603.99:
        income = 0
    elif (income > 23603.99) and (income <= 109232):
        income = 1
    elif (income > 109232) and (income <= 194434):
        income = 2
    elif (income > 194434) and (income <= 279636):
        income = 3
    elif (income > 279636) and (income <= 364838):
        income = 4
    elif (income > 364838) and (income <= 450040):
        income = 5
    else:
        income = 6

    if area == "Urban":
        area = 1
    else:
        area = 0

    if channel == "A":
        channel = 0
    elif channel == "B":
        channel = 1
    elif channel == "C":
        channel = 2
    elif channel == "D":
        channel = 3
    else:
        channel = 4

    data = pd.read_csv('templates/Supervised/Classification/Insurance_Policy/scale.csv')
    data_entered = pd.DataFrame([[percent_paid, days, income, months_3_6_, months_6_12_, more_than_12_months,
                                  writing_score, paid_premiums, channel, area]], columns=data.columns.values)
    print(data.tail())

    print(data.tail())
    scaler = MinMaxScaler()
    scaler.fit(data)
    data = data.append(data_entered)
    arr = scaler.fit_transform(data)
    print(arr, "asd")
    print(pd.DataFrame(arr))

    arr = arr[79853]
    arr = np.array([arr])
    print(pd.DataFrame(arr))
    pred = int(insurance.predict(arr)[0])
    return render_template('Models.php', insurance_prediction=pred)


@app.route('/predict_price_range', methods=['POST'])
def predict_price_range():
    # battery_power,clock_speed,fc,int_memory,m_dep,mobile_wt,n_cores,pc,px_height,px_width,ram,sc_h,sc_w,talk_time
    # 842,2.2,1,7,0.6,188,2,2,20,756,2549,9,7,19
    battery_power,clock_speed,fc,int_memory,m_dep,mobile_wt,n_cores,pc,px_height,px_width,ram,sc_h,sc_w,talk_time = float(request.form['battery_power']),float(request.form['clock_speed']),float(request.form['fc']),float(request.form['int_memory']),float(request.form['m_dep']),float(request.form['mobile_wt']),float(request.form['n_cores']),float(request.form['pc']),float(request.form['px_height']),float(request.form['px_width']),float(request.form['ram']),float(request.form['sc_h']),float(request.form['sc_w']),float(request.form['talk_time']) #563,0.5,2,41,0.9,145,5,6,1263,1716,2603,11,2,9
    data = pd.read_csv('templates/Supervised/Classification/Mobile_Price_Classification/scale.csv')
    data_entered = pd.DataFrame([[battery_power,clock_speed,fc,int_memory,m_dep,mobile_wt,n_cores,pc,px_height,px_width,ram,sc_h,sc_w,talk_time]], columns=data.columns.values)
    scaler = MinMaxScaler()
    scaler.fit(data)
    data = data.append(data_entered)
    arr = scaler.fit_transform(data)
    print(arr , "asd")
    print(pd.DataFrame(arr).tail())
    arr = arr[2000]
    arr = np.array([arr])
    pred = price_range.predict(arr)[0]
    print(pred)
    return render_template('Models.php', price_range_prediction=pred)


@app.route('/predict_personal_loan', methods=['POST'])
def predict_personal_loan():
    # 1.0,49,4,1.6,1,0,1,0,0,0
    Experience,Income,Family,CCAvg,Education, \
    Mortgage,Securities ,Account,Online,CreditCard = float(request.form['Experience']),int(request.form['Income']),int(request.form['Family']),float(request.form['CCAvg']),request.form['Education'],\
                                                     request.form['Mortgage'],request.form['Securities'],request.form['Account'],request.form['Online'],request.form['CreditCard']

    # Adjuting Eduction
    if(Education.lower() == "undergrad"):
        Education = 0
    elif(Education.lower() == "grad"):
        Education = 1
    else:
        Education = 2
    # Adjusting Mortgage
    if(Mortgage.lower() == "no"):
        Mortgage = 0
    else:
        Mortgage = 1
    # Adjusting Securities
    if (Securities.lower() == "no"):
        Securities = 0
    else:
        Securities = 1
    # Adjusting CD Account
    if(Account.lower() == "no"):
        Account = 0
    else:
        Account = 1
    # Adjusting Online
    if(Online.lower() == "no"):
        Online = 0
    else:
        Online = 1
    # Adjusting Credit Card
    if(CreditCard.lower() == "no"):
        CreditCard = 0
    else:
        CreditCard = 1


    data = pd.read_csv('templates/Supervised/Classification/Personal_Loan/scale.csv')
    data_entered = pd.DataFrame([[Experience,Income,Family,CCAvg,Education,Mortgage,Securities,Account,Online,CreditCard]], columns=data.columns.values)

    scaler = MinMaxScaler()
    scaler.fit(data)
    data = data.append(data_entered)
    arr = scaler.fit_transform(data)
    print(arr , "asd")
    print(pd.DataFrame(arr).tail())

    arr = arr[4948]
    arr = np.array([arr])


    pred = personal_loan.predict(arr)[0]
    print(pred)
    return render_template('Models.php', personal_loan_prediction=pred)



@app.route('/home', methods=['POST'])
def home():
    return render_template('home.php')


@app.route('/datasets', methods=['POST'])
def datasets():
    return render_template('Datasets_home.php')


@app.route('/models', methods=['POST'])
def models():
    return render_template('Models.php')


@app.route('/concepts', methods=['POST'])
def concepts():
    return render_template('Content.php')


@app.route('/Datasets')
def Datasets():
    return render_template('Datasets_home.php')

@app.route('/Home')
def Home():
    return render_template('home.php')


@app.route('/classify_dataset')
def classify_dataset():
    return render_template('classification_dataset.php')

@app.route('/cluster_dataset')
def cluster_dataset():
    return render_template('clustering_dataset.php')

@app.route('/reg_dataset')
def reg_dataset():
    return render_template('regression_dataset.php')

@app.route('/vision_dataset')
def vision_dataset():
    return render_template('vision_dataset.php')



if __name__ == "__main__":
    app.run(debug=True)
