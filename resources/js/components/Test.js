import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Test extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Example Component</div>
                            <div className="card-body">
                                I'm an example components!
                            </div>
                        </div>
                        
                        <div className="card">
                            <div className="card-header">Header Component</div>
                            <div className="card-body">
                                I am card Body. Please Write Something on me
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById('Page')) {
    ReactDOM.render(<Test />, document.getElementById('Page'));
}