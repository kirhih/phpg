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
sns.pairplot(df,hue='tgt')
# %%
from sklearn.neighbors import KNeighborsClassifier
knn3=KNeighborsClassifier(n_neighbors=3)

# %%
