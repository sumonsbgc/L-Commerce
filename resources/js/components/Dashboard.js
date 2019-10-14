import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Cards from './Cards';

export default class Dashboard extends Component {
    render() {
        return (
            <div>
                <Cards />
            </div>
        )
    }
}


if (document.getElementById('dashboard_card')) {
    ReactDOM.render(<Dashboard />, document.getElementById('dashboard_card'));
}