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
cifa10=tf.keras.datasets.cifar10
cifac=['airplanes', 'cars', 'birds', 'cats', 'deer', 'dogs', 'frogs', 'horses', 'ships', 'trucks']
#%%
(X_train,Y_train),(X_test,Y_test)= cifa10.load_data()
print(X_train.shape,X_test.shape)
print(Y_train.shape,Y_test.shape)
Y_train[0][0]
# %%
for i in range(10):
    plt.imshow(X_train[i])
    plt.show()
    print(cifac[Y_train[i][0]])
# %%
print('최대:',X_train[0].max(),'최소:',X_train[0].min())
# %%
# minmax 처리 전처리
(x_train,x_test)=(X_train/255,X_test/255)
# one-hot encoding 형태로 변환
y_train =tf.keras.utils.to_categorical( Y_train.reshape(-1))
y_test = tf.keras.utils.to_categorical(Y_test.reshape(-1))
print('최대값',x_train[0].max())
plt.hist(y_train)
#%%
print(y_train[0],Y_train[0])

# %%
# 모델 결정 DNN
layers=[
    tf.keras.layers.Flatten(input_shape=(32, 32, 3)),
    tf.keras.layers.Dense(1024,activation='relu'),
    tf.keras.layers.Dense(128,activation='relu'),
    tf.keras.layers.Dense(64,activation='relu'),
    tf.keras.layers.Dense(10,activation='softmax')
]
model=tf.keras.models.Sequential(layers)
model.summary()
#%%
es=tf.keras.callbacks.EarlyStopping(monitor='val_loss',
                                  min_delta=0.001, 
                                  patience=10, 
                                  verbose=1, 
                                  mode='auto', 
                                  baseline=None, 
                                  restore_best_weights=False)
#%%
# 최적화함수  결정 optimizer=
# 손실(에러)결정 loss=
model.compile(optimizer='adam',
              loss='categorical_crossentropy',
              metrics=['accuracy'],
              )

# %%
# 학습하기
hist=model.fit(x_train,
               y_train,
               epochs=100,
               batch_size=1000,
               verbose=1,
               callbacks=[es])
# %%
# 시험보기
loss,acc=model.evaluate(x_test,y_test)
# %%
print(loss,acc)
# %%
