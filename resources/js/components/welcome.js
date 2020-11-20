import React, { Component } from "react";
import ReactDOM from "react-dom";
import axios from "axios";
class Welcome extends Component {
    constructor() {
        super();
        this.state = {
            student: []
        };
    }
    componentDidMount() {
        axios.get("/api/student").then(res => {
            this.setState({
                student: res.data
            });
        });
    }
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">
                                The planning system
                            </div>
                            <div className="card-body">
                                <a href="/course">
                                    all the course in the system
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">
                                The student In the list
                            </div>
                            <div className="card-body">
                                <table className="table table-strip">
                                    <thead>
                                        <tr>
                                            <th>Student ID</th>
                                            <td>Student Name</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {this.state.student.map(s => (
                                            <tr>
                                                <td key={s.student_id}>{s.student_id}</td>
                                                <td>{s.student_name}</td>
                                            </tr>
                                        ))}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Welcome;

ReactDOM.render(<Welcome />, document.getElementById("welcome"));
