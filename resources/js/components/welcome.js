import React from 'react';
import ReactDOM from 'react-dom';

function Welcome(){
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <a href="/login"><button className="btn btn-primary">Go to login</button></a>  
                    <a href="/register"><button className="btn btn-primary">Reigister</button></a>
                </div>
            </div>
        </div>
    )
}

export default Welcome;

if (document.getElementById('welcome')) {
    ReactDOM.render(<Welcome />, document.getElementById('welcome'));
}
