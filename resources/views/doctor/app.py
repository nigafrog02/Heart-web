from pyexpat import features
from flask import Flask, render_template ,request,jsonify
import pickle
import numpy as np


#create flask app
app = Flask(__name__)
KNN_model = pickle.load(open('heart.pkl','rb'))


@app.route('/model')
def Home():
    return render_template('template.html')

@app.route('/predict', methods=['POST'])
def predict():
    float_features = [float(x) for x in request.form.values()]
    features = [np.array(float_features)]
    prediction = KNN_model.predict(features)

    return render_template("template.html" , prediction_text = "Heart disease level {}".format(prediction))
    


if __name__ == "__main__":
    app.run(debug=True)