import React, { Component } from "react";
import axios from 'axios';
class Course extends Component {
    constructor(){
        super();
        this.state = {
            course:[]
        }
    }
  
    componentDidMount(){
        axios.get('/api/course').then(res=>{
            this.setState({
                course:res.data
            });
        });
    }

    render(){
        return(
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Course in the system</div>
                            <div className="card-body">
                                <table className="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>Course ID</th>
                                            <td>Course Name</td>
                                            <td>Course Credit</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {
                                            this.state.course.map(c => (
                                                <tr>
                                                    <th key={c.course_id}>{c.course_id}</th>
                                                    <td>{c.course_name}</td>
                                                    <td>{c.course_credit}</td>
                                                </tr>
                                            ))
                                        }
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
export default Course;