/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require("./bootstrap");

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
import { Navbar } from "./components";

import "./../css/app.css";

function App() {
    return (
        <div>
            <Router>
                <Switch>
                    <Route path="/about">
                        <Navbar />
                        <h1>This is the About page</h1>
                    </Route>
                    <Route path="/users">
                        <Navbar />
                        <h1>This is the users page</h1>
                    </Route>
                    <Route path="/">
                        <Navbar />
                        <h1>This is the home page</h1>
                    </Route>
                </Switch>
            </Router>
        </div>
    );
}

export default App;
if (document.getElementById("root")) {
    ReactDOM.render(<App />, document.getElementById("root"));
}
