import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';

const root = ReactDOM.createRoot(
  document.getElementById('root') as HTMLElement
);
root.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
);
// 엘리먼트 직접 render(DOM에 적용하기)
// 1.JSX 를 이용한 방법 : Babel 등이 변환해서 사용
const ele=<p>Hello world</p>;
// 2.정식 React Element 생성 문법
let ele1=React.createElement("p",null,"정식 JS 생성");
// dom 내용은 자동으로 escape 된다(보안상 안전)
ele1 =React.createElement("h1",null,"<span>Escape</span>시작");
// JSX 기반 element
const ele2=<h1><span className='txtRed'>JSX</span>시작</h1>;
// props 이용
ele1=React.createElement('h1',{children:'props 를 활용한 생성'});// 렌더 대상 node react18 이상
//ele1=React.createElement('h1') 
//ele1.props={children:"hello"};// 17 이전 사용
const rootNode = document.getElementById('root') as HTMLElement;
//ReactDOM에 렌더 적용
ReactDOM.createRoot(rootNode).render(
  ele2
);
// 자식요소로 바인딩 // v18
//rootNode.append.bind(ele1)
// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
