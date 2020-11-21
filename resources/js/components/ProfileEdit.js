import React, { Component } from "react";
import ReactDOM from "react-dom";
import axios from "axios";

class ProfileEdit extends Component {
    constructor () {
        super();
        this.state = {
            name:"",
            id:"",    
        }
    }
    componentDidMount(){
        axios.get('/api/student/{id}/Edit').then(res => {
            console.log(res);
        });
    }
    render(){
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <p className="text-center">This is welcome something</p>
                    </div>
                </div>
            </div>
        );
    }
}
export default ProfileEdit;
ReactDOM.render(<ProfileEdit />,document.getElementById('editprofile'));