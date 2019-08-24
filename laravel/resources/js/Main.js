import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter as Router, Route, Link,Switch } from 'react-router-dom';
import Welcome from "./pages/Welcome";
import Login from "./pages/Login";
import Personal from "./pages/Personal";
import PersonalReports from "./pages/PersonalReports";
import Register from "./pages/Register";
import Team from "./pages/Team";
import TeamReports from "./pages/TeamReports";

export default class Main extends Component {
    render() {
        return (
            // <p>inside router</p>


 <Router>
 
    
     <ul>
          <li><Link to="/welcome">Welcome</Link></li>
          <li><Link to="/login">Login</Link></li>
          <li><Link to="/register">Register</Link></li>
          <li><Link to="/personal">Personal</Link></li>
          <li><Link to="/team">Team</Link></li>
          <li><Link to="/personalreports">Personal Reports</Link></li>
          <li><Link to="/teamreports">Team Reports</Link></li>
        </ul>

        

        <Switch>  
 
  <Route path="/welcome" component={Welcome} />
  <Route path="/login" component={Login} />
  <Route path="/register" component={Register} />
  <Route path="/personal" component={Personal} />
  <Route path="/team" component={Team} />
  <Route path="/personalreports" component={PersonalReports} />
  <Route path="/teamreports" component={TeamReports} />

     </Switch>   
 </Router>



        )
    }


}

if (document.getElementById('example')) {
    ReactDOM.render(<Main />, document.getElementById('example'));
}