
<h1 align="center"> Group-15 </h1>

<p align="center"><img src="/header.png"></p>
<h1 align="center"> 🩺WolfCare-V2 </h1>

<div align="center">

[![DOI](https://zenodo.org/badge/573536951.svg)](https://zenodo.org/badge/latestdoi/573536951)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/dnellur4/wolfcarev2/blob/main/LICENSE.md)
[![GitHub Release](https://img.shields.io/github/release/dnellur4/wolfcarev2)](https://github.com/dnellur4/wolfcarev2/releases)
[![codecov](https://codecov.io/gh/dnellur4/wolfcarev2/branch/main/graph/badge.svg?token=6BKPfdxYKY)](https://codecov.io/gh/dnellur4/wolfcarev2)
![Python](https://img.shields.io/badge/python-v3.8+-yellow.svg)
[![GitHub issues](https://img.shields.io/github/issues/dnellur4/wolfcarev2)](https://github.com/dnellur4/wolfcarev2/issues?q=is%3Aissue+is%3Aopen)
[![GitHub closed issues](https://img.shields.io/github/issues-closed/dnellur4/wolfcarev2)](https://github.com/dnellur4/wolfcarev2/issues?q=is%3Aissue+is%3Aclosed)
  </br>
[![Repo Size](https://img.shields.io/github/repo-size/dnellur4/wolfcarev2?color=brightgreen)](https://github.com/dnellur4/wolfcarev2.git)
[![contributors](https://img.shields.io/github/contributors/dnellur4/wolfcarev2)](https://github.com/dnellur4/wolfcarev2/graphs/contributors)
[![commit-activity](https://img.shields.io/github/commit-activity/w/dnellur4/wolfcarev2?color=blue)](https://github.com/dnellur4/wolfcarev2/graphs/commit-activity)
[![pull-requests-open](https://img.shields.io/github/issues-pr/dnellur4/wolfcarev2?color=yellow)](https://github.com/dnellur4/wolfcarev2/pulls)
[![pull-requests-closed](https://img.shields.io/github/issues-pr-closed/dnellur4/wolfcarev2?color=green)](https://github.com/dnellur4/wolfcarev2/pulls?q=is%3Apr+is%3Aclosed)
[![languages](https://img.shields.io/github/languages/count/dnellur4/wolfcarev2)](https://github.com/dnellur4/wolfcarev2)
[![forks](https://img.shields.io/github/forks/dnellur4/wolfcarev2?style=social)](https://github.com/dnellur4/wolfcarev2/network/members)

</div>


<p align="center">
  <a href="#overview">About WolfCare</a>
  ::
  <a href="#flowchart">Flowchart </a> 
  ::
  <a href="#directory-structure">Directory Structure</a>
  ::
  <a href="#technologies">Technologies</a>
  ::
  <a href="#gettingstarted">Getting started</a> </br>
  ::
  <a href="#website-design">Website Design</a>
  ::
  <a href="#conclusion">Conclusion</a>
  ::
  <a href="#video">Video</a>
  ::
  <a href="#group-members">Group Members</a>
  
</p>

## Overview
<p>WolfCare is an online tool that helps patients maintain their health information and connects them to doctors through a secure online portal. The drawbacks of manually scheduling an appointment with a doctor are eliminated by a virtual system. It is practical, improves resource management, and helps synchronize calendar schedules.</p>
<p>
The list of doctors' specializations, contact information, and system credentials will all be filled up by the system administrator. In order to locate a doctor who specializes in their needs, people will search the doctor's appointment system website. Users may establish an account, search for doctors based on their specialties, check the doctors' sessions, and make appointments using this website. The management of doctors' patient appointment schedules can also be done in manage sessions. The doctors may then view all of their sessions as well as the patients' appointments based on their availability.</p>

    
## Flowchart

<p align="center"><img src="/flowchart.jpg"></p>

## Directory Structure 
```txt
.github/workflows
src
  Admin
  patient
  Doctor
  css
  img
docs
tests
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
proj2rubric.md
header.png
flowchart.jpg
```
## Technologies

![Javascript](https://img.shields.io/badge/javascript-%2320232a.svg?style=for-the-badge&logo=javascript&logoColor=%2361DAFB) &nbsp; ![PHP](https://img.shields.io/badge/php-%2320232a.svg?style=for-the-badge&logo=php&logoColor=%2361DAFB) &nbsp; ![MYSQL](https://img.shields.io/badge/mysql-%2320232a.svg?style=for-the-badge&logo=mysql&logoColor=%2361DAFB) &nbsp; ![HTML](https://img.shields.io/badge/html-%2320232a.svg?style=for-the-badge&logo=html&logoColor=%2361DAFB) &nbsp; ![CSS](https://img.shields.io/badge/css-%2320232a.svg?style=for-the-badge&logo=css&logoColor=%2361DAFB)
<br>
## Gettingstarted


  - ### Prerequisite:
      - Download [XAMPP](https://sourceforge.net/projects/xampp/files/XAMPP%20Mac%20OS%20X/8.0.6/) and run all the servers.

   - ### Installation:
     -  Clone the Github repository in your local system by running **`git clone https://github.com/dnellur4/wolfcarev2.git`** in your command line or downloading the repository zip file.
   - ### Instructions to Run the application.
     -  Place the project repository in **`/xampp/htdocs/`** (**Note:** the xampp folder will be present in the C directory of your local system).
     -  Run the xampp application, and start the **`Apache`, `MySQL`, and `FileZilla`** by clicking on the start button.
     -  Browse the PHPMyAdmin in a browser. i.e. http://localhost/phpmyadmin
     -  Create a new database naming wolfcare and Import the provided SQL file (wolfcare.sql).
     -  Browse the Application in a browser. i.e. http://localhost/wolfcarev2/src/.

## Website Design

<table border="2" bordercolorlight="#b9dcff" bordercolordark="#006fdd">

  <thead>  
    <h3 id ="design"> Main Page</h3>
    <img src="/docs/main.png">
  </thead>
  <h3 id ="design"> Patient's</h3>
  <tr style="background: #010203;"> 
    <td colspan = "2">
        <img src="/docs/patient1.jpeg">    
     </td>
     <td colspan = "2">
        <img src="/docs/patient2.jpeg">    
     </td>
  </tr>
   <tr style="background: #010203;"> 
    <td colspan = "2">
        <img src="/docs/patient3.jpeg">  
     </td>
     <td colspan = "2"> 
        <img src="/docs/patient4.png">
    </td>
  </tr>
  </table>
<br>
<h3 id ="design"> Doctor's</h3>
  <table border="2" bordercolorlight="#b9dcff" bordercolordark="#006fdd">
  <tr style="background: #010203;"> 
    <td colspan = "2">
        <img src="/docs/doctor1.jpeg" >    
     </td>
     <td colspan = "2">
        <img src="/docs/doctor2.jpeg">    
     </td>
  </tr>
   <tr style="background: #010203;"> 
    <td colspan = "2">
       <img src="/docs/doctor3.jpeg">   
     </td>
     <td colspan = "2"> 
        <img src="/docs/doctor4.png"> 
    </td>
  </tr>
  </table>
  <table>
 <h3 id ="design"> Admin page</h3>
  <tr style="background: #010203;"> 
      <td colspan = "2">
      <p style="color: #FF7A59"> Admin Page </p>  
        <img src="/docs/admin1.jpeg">    
     </td>
   </table>
<br>

<h2 id = "db"> Database Design </h2>

<table border="2" bordercolorlight="#b9dcff" bordercolordark="#006fdd">

    <img src="/docs/database.png">
  
  </table>
<br>

## Conclusion
<p>Wolcare V2 is end-to-end doctor's patient appointment application which has features like booking </p>

## Video


https://user-images.githubusercontent.com/28722298/205790714-bbd64fad-7b95-4b43-bb02-680164967618.mp4



## Group Members ##
  - [Nelluru, Dedeepya](mailto:dnellur@ncsu.edu?) (dnellur)
  - [Kanamarlapudi, Venkata Gnana Vardhani](mailto:vkanama@ncsu.edu?) (vkanama)
  - [Vengali, Sai Kumar Goud](mailto:svengal@ncsu.edu?) (svengal)
  - [Immidisetti, Ratan](mailto:rimmidi@ncsu.edu?) (rimmidi)
  - [Chirumamilla, Raviteja](mailto:rchirum@ncsu.edu?) (rchirum)
