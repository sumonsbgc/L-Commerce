import React, { Component } from 'react';

export default class card extends Component {
  render() {
    return (
      <div className="col-md-4">
        <div className="card">
          <div className="card-header">
            Posts
          </div>
          <div className="card-body">
            30 Post Created
          </div>
        </div>
      </div>
    )
  }
}