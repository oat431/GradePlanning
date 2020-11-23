import Axios from 'axios';
import React,{ Component } from 'react';
class Register extends Component {
    constructor(props){
        super(props);
        this.state = {
            StudentID : "",
            StudentName : ""
        }
        this.register = this.register.bind(this);
        this.updateData = this.updateData.bind(this);
    }
    updateData(event){
        this.setState({
            [event.target.name]:event.target.value
        });
    }
    register(event){
        event.preventDefault();
        let studentData = {
            studentName:this.state.StudentName,
            studentID:this.state.StudentID
        }
        Axios.post('/api/student',studentData).then(res=>{
            this.props.history.push('/');
        })
    }
    render(){
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Register</div>
                            <div className="card-body">
                                <form onSubmit={this.register}>
                                <div className="form-group row">
                                        <label
                                            htmlFor="StudentName"
                                            className="col-md-4 col-form-label text-md-right"
                                        >
                                            Student name
                                        </label>
                                        <div className="col-md-6">
                                            <input
                                                id="StudentName"
                                                type="text"
                                                className="form-control"
                                                name="StudentName"
                                                onChange={this.updateData}
                                                value={this.state.StudentName}
                                                autoFocus
                                            />
                                        </div>
                                    </div>
                                    <div className="form-group row">
                                        <label
                                            htmlFor="StudentID"
                                            className="col-md-4 col-form-label text-md-right"
                                        >
                                            Student ID
                                        </label>
                                        <div className="col-md-6">
                                            <input
                                                id="StudentID"
                                                type="text"
                                                className="form-control"
                                                name="StudentID"
                                                onChange={this.updateData}
                                                value={this.state.StudentID}
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
                                                Register
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

export default Register;