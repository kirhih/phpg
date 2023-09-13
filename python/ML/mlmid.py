#%%
import sqlite3  #sqllite3 데이터베이스
import re       # 정규식
import numpy as np  # 숫자
import pandas as pd # 데이터 처리
import matplotlib.pyplot as plt # 그래프
import matplotlib
import seaborn as sns   # 그래프 고도화
# scikit-learn
print("init...")
#%%
from sklearn.datasets import load_breast_cancer
data=load_breast_cancer()
X=data['data']
Y=data['target']
fname=data['feature_names']
tname=data['target_names']
#print(data['DESCR'])
df=pd.DataFrame(X,columns=fname)
df
#%%
#EDA
# 기초통계량
df.describe()
#%%
df.info()
#%%
#기초시각화
plt.hist(Y)
Y

#%%
plt.plot(df['mean radius'],'.')
#%%
sns.scatterplot(df.iloc[:,:3])
#%%
tdf=df.copy()
tdf['tgt']=Y
sns.pairplot(tdf.iloc[:,-5:],hue='tgt')
## 앙상블 모델 Random Forest
#%%
from sklearn.ensemble import RandomForestClassifier as RF
rf=RF()
rf.fit(X_train,Y_train)
pred=dt.predict(X_test)
print(pred)
print(Y_test)
acc=accuracy_score(pred,Y_test)
print('RF[] acc:',acc)
# %%
