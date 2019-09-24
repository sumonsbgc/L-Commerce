import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Post from './Post.js'

export default class Dashboard extends Component{
    render() {
        return (
            <Post />
        )
    }
}


if (document.getElementById('dashboard_card')) {
    ReactDOM.render(<Dashboard />, document.getElementById('dashboard_card'));
}