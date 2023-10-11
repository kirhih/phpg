import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import Header from './lib/component/Header';
import Content from './lib/component/Content';
import Footer from './lib/component/Footer';
import reportWebVitals from './reportWebVitals';

const root = ReactDOM.createRoot(
  document.getElementById('root') as HTMLElement
);
root.render(
  <React.StrictMode>
    <App />
  </React.StrictMode>
);
const header = ReactDOM.createRoot(
  document.getElementById('header') as HTMLElement
);
header.render(
  <React.StrictMode>
    <Header />
  </React.StrictMode>
);
const content = ReactDOM.createRoot(
  document.getElementById('content') as HTMLElement
);
content.render(
  <React.StrictMode>
    <Content />
  </React.StrictMode>
);

const footer = ReactDOM.createRoot(
  document.getElementById('footer') as HTMLElement
);
footer.render(
  <React.StrictMode>
    <Footer />
  </React.StrictMode>
);


// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
