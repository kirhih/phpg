import React from 'react';
import logo from './logo.svg';
import './App.css';
//Hello 콤포넌트  대문자로 시작
// 함수형 선언 컴포넌트
function Hello(){
  // 엘리먼트
  //JSX : Javascript XML(eXteneded Markup Language)
  // 바벨 등이 JS 문법으로 바꿔줌
  // 엘리먼트JSX: 반드시 DOM 이 형성이 되어야한다 태그로 반드시 닫혀야 한다.
  const ele=<p>hello world</p>; 
  // 컴포넌트 :엘리먼트의 기능적 강화
  return ele;
}
// ()함수형 JS
const Hello1=function(){}
// ()화살표 함수
const Hello2=()=>{
  const ele=<div><h1>화살표 함수형</h1></div>;
  return ele;
}

// App Component
function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.tsx</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
    </div>
  );
}

export default Hello2;
