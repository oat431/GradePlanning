import axios from "axios";
import React, { Component } from "react";
class Login extends Component {
    constructor(props) {
        super(props);
        this.state = {
            studentName: "",
            studentID: "",
        };
        this.updateData = this.updateData.bind(this);
        this.authentication = this.authentication.bind(this);
    }
    updateData(event) {
        this.setState({
            [event.target.name]: event.target.value
        });
    }
    authentication(event) {
        event.preventDefault();
        let email = this.state.studentName.split(" ");
        const auth = {
            email:email[0] + "@" + email[0],
            password:this.state.studentID
        };
        axios.post("/api/signin", auth).then(res => {
            this.props.history.push('/');
        });
    }
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Sign in</div>
                            <div className="card-body">
                                <form onSubmit={this.authentication}>
                                    <div className="form-group row">
                                        <label
                                            htmlFor="studentName"
                                            className="col-md-4 col-form-label text-md-right"
                                        >
                                            Student name
                                        </label>
                                        <div className="col-md-6">
                                            <input
                                                id="studentName"
                                                type="text"
                                                className="form-control"
                                                name="studentName"
                                                onChange={this.updateData}
                                                value={this.state.studentName}
                                                autoFocus
                                            />
                                        </div>
                                    </div>
                                    <div className="form-group row">
                                        <label
                                            htmlFor="studentID"
                                            className="col-md-4 col-form-label text-md-right"
                                        >
                                            Student ID
                                        </label>
                                        <div className="col-md-6">
                                            <input
                                                id="studentID"
                                                type="text"
                                                className="form-control"
                                                name="studentID"
                                                onChange={this.updateData}
                                                value={this.state.studentID}
                                                autoFocus
                                            />
                                        </div>
                                    </div>
                                    <div className="form-group row mb-0">
                                        <div className="col-md-8 offset-md-4">
                                            <button
                                                type="submit"
                                                className="btn btn-primary"
                                            >
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Login;
