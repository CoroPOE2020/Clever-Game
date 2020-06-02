/*
    Header Component
    Component that brings together Logo, Menu, SideMenu Components
*/

import React, { Fragment } from "react";
import  { isMobileOnly } from 'react-device-detect';

import Menu from '../../UI/Menu/Menu';
import Logo from '../../UI/Logo/Logo';
import SideMenu from './SideMenu/SideMenu';

// Handle device type to properly display the Menu on Header or Footer 
let displayMenu = isMobileOnly ? null : <Menu />

const Header = props => {
    return (
        <Fragment>
            <header className="header">
                <Logo position="header__logo" />
                { displayMenu }
                <SideMenu />
            </header>
        </Fragment>
    );
};

export default Header;