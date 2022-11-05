import MyCounter from './components/MyCounter';
import MyGitHub from './components/MyGitHub';

function App() {
  return (
    <div>
      <h1>Hello React!</h1>
      <h2>Kelby Abel - b87t476</h2>
      <hr></hr>
      <p> </p>
      <MyCounter incBy={1}/><hr></hr>
      <MyCounter incBy={5}/><hr></hr>
      <MyGitHub /><hr></hr>
      
    </div>
  );
}

export default App;
