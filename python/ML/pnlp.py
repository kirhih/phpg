#%%
import sqlite3  #sqllite3 데이터베이스
import re       # 정규식
import numpy as np  # 숫자
import pandas as pd # 데이터 처리
import matplotlib.pyplot as plt # 그래프
import matplotlib
import seaborn as sns   # 그래프 고도화
# 형태소 분석기
from konlpy.tag import Kkma
# %%
kkma=Kkma()
# %%
res=kkma.pos('안녕하세요 그런데 여러분 만나서 반갑습니다.')
res
# %%
reqPos=['NNG','NNP','NP','VV','VA','VCP','VCN','JC','MAC','EFN','EFA','EFQ','EFO','EFA','EFI','EFR']
wset=[]
for r in res:
    if(r[1] in reqPos):
        wset.append(r[0])
        print(r)
print(wset)


# %%
