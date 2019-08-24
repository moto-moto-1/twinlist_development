import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Main from "../Main"

export default class Example extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">React Example Component</div>
                          <Main/>  
                            <div className="card-body">I'm a react 2 example component!</div>
                    
                        </div>



                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
