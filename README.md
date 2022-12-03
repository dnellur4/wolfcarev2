
<h1 align="center"> Group-15 </h1>

<p align="center"><img src="/header.png"></p>
<h1 align="center"> 🩺WolfCare-V2 </h1>

<div align="center">

[![DOI](https://zenodo.org/badge/546884622.svg)](https://zenodo.org/badge/latestdoi/546884622)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/dnellur4/flood_detection_model/blob/main/LICENSE.md)
[![GitHub Release](https://img.shields.io/github/release/dnellur4/flood_detection_model)](https://github.com/dnellur4/flood_detection_model/releases)
[![codecov](https://codecov.io/gh/dnellur4/flood_detection_model/branch/main/graph/badge.svg?token=lxt6cdJ4iI)](https://codecov.io/gh/dnellur4/flood_detection_model)
![Python](https://img.shields.io/badge/python-v3.8+-yellow.svg)
[![GitHub issues](https://img.shields.io/github/issues/dnellur4/flood_detection_model)](https://github.com/dnellur4/flood_detection_model/issues?q=is%3Aissue+is%3Aopen)
[![GitHub closed issues](https://img.shields.io/github/issues-closed/dnellur4/flood_detection_model)](https://github.com/dnellur4/flood_detection_model/issues?q=is%3Aissue+is%3Aclosed)
  </br>
[![Repo Size](https://img.shields.io/github/repo-size/dnellur4/flood_detection_model?color=brightgreen)](https://github.com/dnellur4/flood_detection_model.git)
[![contributors](https://img.shields.io/github/contributors/dnellur4/flood_detection_model)](https://github.com/dnellur4/flood_detection_model/graphs/contributors)
[![commit-activity](https://img.shields.io/github/commit-activity/w/dnellur4/flood_detection_model?color=blue)](https://github.com/dnellur4/flood_detection_model/graphs/commit-activity)
[![pull-requests-open](https://img.shields.io/github/issues-pr/dnellur4/flood_detection_model?color=yellow)](https://github.com/dnellur4/flood_detection_model/pulls)
[![pull-requests-closed](https://img.shields.io/github/issues-pr-closed/dnellur4/flood_detection_model?color=green)](https://github.com/dnellur4/flood_detection_modelpulls?q=is%3Apr+is%3Aclosed)
[![languages](https://img.shields.io/github/languages/count/dnellur4/flood_detection_model)](https://github.com/dnellur4/flood_detection_model)
[![forks](https://img.shields.io/github/forks/dnellur4/flood_detection_model?style=social)](https://github.com/dnellur4/flood_detection_model/network/members)

</div>


<p align="center">
  <a href="#overview">About WolfCare</a>
  ::
  <a href="#flowchart"> Flowchart </a> 
  ::
  <a href="#directory-structure">Directory Structure</a>
  ::
  <a href="#technologies">Technologies</a>
  ::
  <a href="#gettingstarted">Getting started</a> </br>

  <a href="#results">Results</a>
  ::
  <a href="#conclusion">Conclusion</a>
  ::
  <a href="#future-scope">Future Scope</a>
  ::
  <a href="#video">Video</a>
  ::
  <a href="#group-members">Group Members</a>
  
</p>

## Overview


    
## flowchart

## Directory Structure 
```txt
.github/workflows/
   python-app.yml
   pdoc-app.yml
docs/
  src
  proj1rubricComments.pdf
  proj1rubric.md
src/
  README.md
  Application/
      static/
          base.jpeg
          water.jpeg
          main.js
          style.css
      templates/
          index.html
          login_socialmedia.html
          predict.html
      App.py
      app.yaml
      model_prediction.py
  Training/
      bert+svm_flood_detection.ipynb
      training_model.py
test/
  README.md
  Web Results/
      Home.png
      login.png
      output_prediction.png
  __init__.py
  test_index.py
  test_login.py
  test_modelprediction.py
  test_predict.py
  test_return.py
  test_runner.py
.gitignore
.travis.yml
CITATION.md 
CODE-OF-CONDUCT.md
CONTRIBUTING.md
INSTALL.md
LICENSE.md
README.md
requirements.txt
setup.py         
```
## Technologies

<img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="python" width="20" height="20"/> Python </br>
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="Java script" width="20" height="20"/> Java Script </br>
 <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-plain.svg" alt="html" width="20" height="20"> CSS3 </br>
 <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-plain.svg" alt="css" width="20" height="20">  HTML 5 </br>
 <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jupyter/jupyter-original-wordmark.svg" alt="Jupyter" width="20" height="20"> Jupyter Notebook</br>

## Gettingstarted

  - ### Prerequisite:
      - Download [Python3.x](https://www.python.org/downloads/).

   - ### Installation:

      **Steps to setup virtual environment**
     - Create a virtual environment:

        `python3.8 -m venv app_env`
    
     - Activate the virtual environment: 

        `source app_env/bin/activate`
    
     - Build the dependencies in virtual environment:

        `pip install -r requirements.txt`

  - ### Instructions to Run the application.

     **To run/test the site:**

     - Clone [Flooddetection github repo](https://github.com/dnellur4/flood_detection_model).

     - Navigate to project directory.
  
     - Run `python3 App.py`

     - Site will be hosted at:(localhost)
       `http://127.0.0.1:3000/`

## Results
 ![alt text](https://github.com/dnellur4/flood_detection_model/blob/main/test/Web%20Results/home.png)
 ![alt text](https://github.com/dnellur4/flood_detection_model/blob/main/test/Web%20Results/login.png)
 ![alt text](https://github.com/dnellur4/flood_detection_model/blob/main/test/Web%20Results/output_prediction.png)
## Conclusion
  - Our Current Application takes post tile and description as Input.
  - We trained our model using BERT + SVM machinelearning model.
  - Depending on the inputs our trained machine learning model predicts the outcome whether the flood exists or not.
## Future scope
  - Moreover, due to advancement of social media, users now can write in these social media using their native language. So, an extension to a social media app will be of good use.
  - Our current model predicts the flood using  current text analysis, including the images along with the text could improve the accuracy of the model
  - We have a limited training data for the model in our application. It can be improved by training the model with more data.
## Video

https://user-images.githubusercontent.com/112122632/194800209-9f043016-e6d9-46b4-8e7b-f90fd7e6b64a.mp4

## Group Members ##
  - [Nelluru, Dedeepya](mailto:dnellur@ncsu.edu?) (dnellur)
  - [Kanamarlapudi, Venkata Gnana Vardhani](mailto:vkanama@ncsu.edu?) (vkanama)
  - [Vengali, Sai Kumar Goud](mailto:svengal@ncsu.edu?) (svengal)
  - [Immidisetti, Ratan](mailto:rimmidi@ncsu.edu?) (rimmidi)
  - [Chirumamilla, Raviteja](mailto:rchirum@ncsu.edu?) (rchirum)
