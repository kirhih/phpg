#%% tensorflow
# * 케라스 python < 파이토치 JAVA < 텐서플로우 C
import numpy as np
import pandas as pd
import tensorflow as tf
import matplotlib.pyplot as plt

# %%
print(tf.__version__)
# %%
# 데이터가져오기
mnist=tf.keras.datasets.mnist
(X_train,Y_train),(X_test,Y_test)= mnist.load_data()
print(X_train.shape,X_test.shape)
print(Y_train.shape,Y_test.shape)

# %%
for i in range(10):
    plt.imshow(X_train[i])
    plt.show()
    print(Y_train[i])
# %%
print('최대:',X_train[0].max(),'최소:',X_train[0].min())
# %%
# minmax 처리 전처리
(x_train,y_train)=(X_train/255,Y_train)
(x_test,y_test)=(X_test/255,Y_test)
print(x_train[0].max())
plt.hist(y_train)
# %%
# 모델 결정 ANN
layers=[
    tf.keras.layers.Flatten(input_shape=(28,28)),
    tf.keras.layers.Dense(10,activation='softmax')
]
model=tf.keras.models.Sequential(layers)
model.summary()
#%%
# 최적화함수  결정 optimizer=
# 손실(에러)결정 loss=
model.compile(optimizer='adam',
              loss='sparse_categorical_crossentropy',
              metrics=['accuracy'])

# %%
# 학습하기
model.fit(x_train,y_train,epochs=10)
# %%
