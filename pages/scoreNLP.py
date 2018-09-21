import nltk, string, numpy, random, sys
#nltk.download('wordnet') # first-time use only
lemmer = nltk.stem.WordNetLemmatizer() #call library function
def LemTokens(tokens):
    return [lemmer.lemmatize(token) for token in tokens] #takes each token from a token array passed and does lemmetizing
remove_punct_dict = dict((ord(punct), None) for punct in string.punctuation)
def LemNormalize(text):
    return LemTokens(nltk.word_tokenize(text.lower().translate(remove_punct_dict)))
#nltk.download('punkt') # first-time use only
#can remove section from line 11 to 16 since it is stemmng and lemming is better than this
stemmer = nltk.stem.porter.PorterStemmer()
def StemTokens(tokens):
    return [stemmer.stem(token) for token in tokens]
remove_punct_dict = dict((ord(punct), None) for punct in string.punctuation)
def StemNormalize(text):
    return StemTokens(nltk.word_tokenize(text.lower().translate(remove_punct_dict)))

from sklearn.feature_extraction.text import CountVectorizer
LemVectorizer = CountVectorizer(tokenizer=LemNormalize, stop_words='english')

from requests import get

sss_url = "http://swoogle.umbc.edu/StsService/GetStsSim"
#api used to get accurate sementic similarity
def sss(s1, s2):
    response = get(sss_url, params={'operation':'api','phrase1':s1,'phrase2':s2})
    return float(response.text.strip())
    

def compare(sent1,sent2):
	documents=[sent1,sent2]
	LemVectorizer.fit_transform(documents)
	#print (LemVectorizer.vocabulary_)
	tf_matrix = LemVectorizer.transform(documents).toarray()
	#print (tf_matrix)
	from sklearn.feature_extraction.text import TfidfTransformer
	tfidfTran = TfidfTransformer(norm="l2")
	tfidfTran.fit(tf_matrix)
	#print (tfidfTran.idf_)
	tfidf_matrix = tfidfTran.transform(tf_matrix)
	#print (tfidf_matrix.toarray()) 
	cos_similarity_matrix = (tfidf_matrix * tfidf_matrix.T).min();
	return cos_similarity_matrix

print (((compare(sys.argv[1],sys.argv[2])+sss(sys.argv[1],sys.argv[2]))/2)*10)
#print (sss(sys.argv[1],sys.argv[2])*10)
#print sys.argv[1]
#print sys.argv[2],sys.argv[1]

