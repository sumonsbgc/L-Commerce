import React, { Component } from 'react';
// import ReactDOM from 'react-dom';

export default class Post extends Component{
    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col-md-4">
                        <div className="card">
                            <div className="card-header">
                                Posts
                            </div>
                            <div className="card-body">
                                49 Post Created
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card">
                            <div className="card-header">
                                Orders
                            </div>
                            <div className="card-body">
                                49 Product Ordered
                            </div>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="card">
                            <div className="card-header">
                                Payments
                            </div>
                            <div className="card-body">
                                40 Payments
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}