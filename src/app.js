var App = React.createClass({
  render() {
    return (
      <div className="App">
        <div className="App-header">
          <img src="./public/react.svg" className="React-logo" alt="logo" />
          <img src="./public/php.svg" className="PHP-logo" alt="logo" />
          <h2>Welcome to React and PHP</h2>
        </div>
        <p className="App-intro">
          To get started, edit <code>src/App.js</code>, save,
          run <code>npm run make</code> and reload.
        </p>
        <p>
          The current time is {this.props.time}.
        </p>
        <div className="App-footer">
          <a href="https://www.theodo.fr" title="Theodo" target="_blank">
            <img src="./public/theodo.png" className="Theodo-logo" alt="logo" />
          </a>
        </div>
      </div>
    );
  }
});
