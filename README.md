# Smart_questionnaire_NLP
[![js-standard-style](https://img.shields.io/badge/code%20style-standard-brightgreen.svg?style=flat)](https://github.com/AeshanaShalindra/Smart_questionnaire_NLP)


A novel approach by using NLP and Semantic similarity to compare questionnaire answers with predefined answers   
==========
## About The Module
A very simple module that allows you to

- [x] Define questions under predefined subject areas
- [x] Add intended answer to those quotations and comment on them 
- [x] Create dynamic questionnaires for each subject area under the following conditions 
       
### How Questions Are Generated

- each questionnaire contains 20 questions which are randomly selected from the question base created by user
- first few questions are generated as `one question from each topic under each subject area`.
e.g.:-
```sh
Software Engineering	
-Design Patterns
-OOP concepts
-Algorithms
-Computer Architecture
-Software Architecture
```
- based on the user performance on the first few questions, the `next set of quotations are selected from  best performed areas of the user`. 
- at the end of the questionnaire the users performance score is generated. 

### How Questions Are Scored 

This module uses a Natural Language Processing approach that employees `Semantic Similarity between sentences` to give an accurate score of the similarity between the expected answer and the given answer. 
a score between 1-10 is given for each question.

- [NLP-Python code](https://github.com/AeshanaShalindra/Smart_questionnaire_NLP/blob/master/pages/scoreNLP.py)

## Getting Started

this was developed on PHP 7.2 (supports from PHP 5.6 upwards )
needs MySQLi support (all connections are done through MySQLi)
- [Latest XAMPP package](https://www.apachefriends.org/index.html)

this also needs Python (2.7.13 or newer)
- [Python package used](https://www.python.org/downloads/release/python-2713/)

having installed python successfully, the following command should be written while being in the directory of the downloaded project file


add python Dependencies 

```sh
$ pip install -r requirements.txt
```

###check if the python code is working

in the command prompt navigate to where [scoreNLP.py](https://github.com/AeshanaShalindra/Smart_questionnaire_NLP/blob/master/pages/scoreNLP.py) code resides and run the following code 

`C:\xampp\htdocs\smartcv_admin\pages` should be substituted by your own directory

```sh
$ C:\xampp\htdocs\smartcv_admin\pages>python scoreNLP.py "hey you" "hey"
```
if it returns a score between 0-10 the code is good to go, 
if not add needed dependencies 



