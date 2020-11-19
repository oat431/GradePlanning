import React from 'react';
import ReactDOM from 'react-dom';

function Welcome(){
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className='card'>
                        <div className='card-header'>The planning system</div>
                        <div className='card-body'><a href='/course'>all the course in the system</a></div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Welcome;

if (document.getElementById('welcome')) {
    ReactDOM.render(<Welcome />, document.getElementById('welcome'));
}
