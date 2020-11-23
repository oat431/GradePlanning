import Axios from "axios";
import React, { Component } from "react";
import { Link } from 'react-router-dom';
class Header extends Component {
    //constructor(props){
        //super(props);
        //this.logout = this.logout.bind(this);
        //this.isLogin = this.login.bind(this);
    //}
    isLogin() {
        let login = false;
        if (login) {
            return (
                <div
                    className="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul className="navbar-nav mr-auto"></ul>
                    <ul className="navbar-nav ml-auto">
                        <li className="nav-item dropdown">
                            <a
                                id="navbarDropdown"
                                className="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                v-pre
                            >
                                Basic Authentication
                            </a>
                            <div
                                className="dropdown-menu dropdown-menu-right"
                                aria-labelledby="navbarDropdown"
                            >
                                <a
                                    className="dropdown-item"
                                    onClick={this.logout} 
                                >
                                    Logout
                                </a>

                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    className="d-none"
                                >
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            );
        } else {
            return (
                <div
                    className="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul className="navbar-nav mr-auto"></ul>
                    <ul className="navbar-nav ml-auto">
                        <li className="nav-item">
                            <Link className="nav-link" to="/login">
                                Login
                            </Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" to="/student/create">
                                Register
                            </Link>
                        </li>
                    </ul>
                </div>
            );
        }
    }
    render() {
        return (
            <nav className="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div className="container">
                    <Link className='navbar-brand' to='/'>Grade Planning</Link>
                    <button
                        className="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}"
                    >
                        <span className="navbar-toggler-icon"></span>
                    </button>
                    {this.isLogin()} 
                </div>
            </nav>
        );
    }
}
export default Header;
