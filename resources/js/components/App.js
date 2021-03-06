import React, { Component } from "react";
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import ReactDOM from "react-dom";
import Header from "./Header";
import Welcome from "./Welcome";
import Course from "./Course";
import Login from "./Login";
import Register from "./Register";
class App extends Component{
    render(){
        return (
            <BrowserRouter>
                <div>
                    <Header />
                    <Switch>
                        <Route exact path='/' component={Welcome} />
                        <Route path='/Allcourse' component={Course} />
                        <Route path='/login' component={Login}/>
                        <Route path='/student/create' component={Register} />
                    </Switch> 
                </div>
           </BrowserRouter> 
        );
    }
}
ReactDOM.render(<App />,document.getElementById('app'));