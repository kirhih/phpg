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
# %%
from sklearn import datasets as data
iris=data.load_iris()
# 전처리
irdata=iris.data # 데이터
irtgt=iris.target # 라벨링
feature=iris.feature_names # 데이터 컬럼명
tgtname=iris.target_names #
#%%
feature=['sl','sw','pl','pw']
#%%
df=pd.DataFrame(irdata,columns=feature)
df.plot(style ='.') # 기초 그래프
# %%
df.describe() # 기초 통계량 요약
# %%
df.info() # 데이터타입 요약
# %%
#카테고리별 갯수 히스토그램
plt.hist(irtgt)
# %%
df['tgt']=irtgt
df
# %%
sns.pairplot(df,hue='tgt',palette='winter')
# %%
plt.plot(irtgt)
#%%
from sklearn.neighbors import KNeighborsClassifier
from sklearn.model_selection import train_test_split # 시험문제 분리하기
from sklearn.metrics import accuracy_score # 정확도 계산하기
X_train,X_test,Y_train,Y_test=train_test_split(irdata,irtgt,test_size=0.3,shuffle=True,random_state=1)
print(X_train.shape,X_test.shape)
print(Y_train.shape,Y_test.shape)

#%%
# 하이퍼 파라미터 튜닝 KNN
for i in range(3,20,2): #range(시작,종료,스텝)
    print('KNN:',i)
    knn3=KNeighborsClassifier(n_neighbors=i) # 모델 지정하기
    knn3.fit(X_train,Y_train) # 학습시키기
    pred=knn3.predict(X_test) #시험보기
    print(pred) # 시험본답 출력
    print(Y_test) # 실제답
    acc=accuracy_score(pred,Y_test)
    print("점수[",i,"]:",acc)

# %%
# SVM
from sklearn.svm import SVC
for i in range(1,10):
    svc=SVC(C=i)
    svc.fit(X_train,Y_train)
    pred=svc.predict(X_test)
    print(pred)
    print(Y_test)
    acc=accuracy_score(pred,Y_test)
    print('SVM[',i,'] acc:',acc)
#%%
# 디시전트리
from sklearn.tree import DecisionTreeClassifier as DT
for j in range(2,10):
    for i in range(2,10):
        dt=DT(max_depth=i,min_samples_leaf=j)
        dt.fit(X_train,Y_train)
        pred=dt.predict(X_test)
        print(pred)
        print(Y_test)
        acc=accuracy_score(pred,Y_test)
        print('DT[',i,',',j,'] acc:',acc)
#%%
from sklearn.datasets import load_breast_cancer
data=load_breast_cancer()
data['data'].shape

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
